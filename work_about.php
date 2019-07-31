<?php
require './func/func.php';
require './config/config.php';
//GETが存在するか
if(!empty($_GET['id'])){
  $id = $_GET['id'];
} else {
  redirect('board.php?sort=new');
}
//メインの投稿を取得
$query = "SELECT * FROM post WHERE id = ?";
$post_row = execute_sql($query);

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
  } elseif(mb_strlen($name) > 30){
    $err['name'] = 'ニックネームは30文字以内で入力してください';
  }

  if (empty($msg)) {
    $err['msg'] = 'メッセージが入力されていません';
  } elseif(mb_strlen($name) > 30){
    $err['msg'] = 'メッセージは50文字以内で入力してください';
  }

  //エラー文が一つも出ていない時
  if (array_search(!'', $err) === false) {
    $query = "SELECT MAX(id) FROM reply WHERE post_id = ?";
    $max_id = execute_sql($query);
    is_null($max_id) ?$max_id = 1 : $max_id += 1 ;

    $query = "INSERT INTO reply(id,post_id,msg,post_date) VALUES(?,?,?,now())";
    execute_sql($query,$max_id,$id,$msg);
  }
}

$reply_row = array();

//コメントを取得
$query = "SELECT * FROM reply WHERE post_id = ?";
$reply_row = execute_sql($query);

require_once './tpl/work_about.php';