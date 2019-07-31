<?php
require './func/func.php';
require './config/config.php';
//GETが存在するか
if (!empty($_GET['id'])) {
  $id = $_GET['id'];
} else {
  redirect('board.php?sort=new');
}

$array = array(
  'main' => [10,11,12],
  'taste' => [1,2,3],
  'flavor' => [4,5,6],
  'hot_taste' => [7,8,9],
);

$cn = new mysqli(HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
$cn->set_charset("utf-8");
$query = "SELECT * FROM post WHERE id = ?";
$stmt = $cn->prepare($query);
$stmt->bind_param("i",$id);
$stmt->execute();
$post_row = fetch_all($stmt);

$query = "SELECT * FROM spice WHERE id = ?";
$stmt = $cn->prepare($query);
$stmt->bind_param("i",$post_row[0]['main']);
$stmt->execute();
$main = fetch_all($stmt);

$query = "SELECT * FROM spice WHERE id = ?";
$stmt = $cn->prepare($query);
$stmt->bind_param("i",$post_row[0]['taste']);
$stmt->execute();
$taste = fetch_all($stmt);

$query = "SELECT * FROM spice WHERE id = ?";
$stmt = $cn->prepare($query);
$stmt->bind_param("i",$post_row[0]['flavor']);
$stmt->execute();
$flavor = fetch_all($stmt);

$query = "SELECT * FROM spice WHERE id = ?";
$stmt = $cn->prepare($query);
$stmt->bind_param("i",$post_row[0]['hot_taste']);
$stmt->execute();
$hot_taste = fetch_all($stmt);

$stmt->close();
$cn->close();


$name = '';
$msg  = '';

$err['name'] = '';
$err['msg'] = '';

//コメントの投稿ボタンが押されたら
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $msg  = $_POST['msg'];
  if (empty($name)) {
    $err['name'] = 'ニックネームが入力されていません';
  } elseif (mb_strlen($name) > 30) {
    $err['name'] = 'ニックネームは30文字以内で入力してください';
  }

  if (empty($msg)) {
    $err['msg'] = 'メッセージが入力されていません';
  } elseif (mb_strlen($name) > 30) {
    $err['msg'] = 'メッセージは50文字以内で入力してください';
  }

  //エラー文が一つも出ていない時
  if (array_search(!'', $err) === false) {
    $cn = new mysqli(HOST, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
    }
    $cn->set_charset("utf-8");
    $query = "SELECT MAX(id) FROM reply WHERE post_id = ?";
    $stmt = $cn->prepare($query);
    $stmt->execute();
    $max_id = fetch_all($stmt);
    is_null($max_id[0]) ? $max_id[0] = 1 : $max_id[0] += 1;

    $query = "INSERT INTO reply(id,post_id,msg,post_date) VALUES(?,?,?,now())";
    $stmt = $cn->prepare($query);
    $stmt->bind_param("iis", $max_id[0], $id, $msg);
    $stmt->execute();
    $stmt->close();
    $cn->close();
  }
}

$reply_row = array();

$cn = new mysqli(HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
$cn->set_charset("utf-8");
//コメントを取得
$query = "SELECT * FROM reply WHERE post_id = ?";
$stmt = $cn->prepare($query);
$stmt->execute();
$reply_row = fetch_all($stmt);
$stmt->close();
$cn->close();

require_once './tpl/work_about.php';
