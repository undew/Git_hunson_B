<?php
require './func/func.php';
require './config/config.php';

//GETが存在するか
if(!isset($_GET['sort'])){
  $_GET['sort'] = 'new';
}

$post_row = array();

$cn = new mysqli(HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
$cn->set_charset("utf-8");

if($_GET['sort'] == 'new'){
  //新着表示
  $query = "SELECT * FROM post ORDER BY post_date DESC";
} elseif($_GET['sort'] == 'nice'){
  //評価順
  $query = "SELECT * FROM post ORDER BY nice DESC";
}

$stmt = $cn->prepare($query);
$stmt->execute();
$post_row = fetch_all($stmt);

$stmt->close();
$cn->close();

if(isset($_POST['nice'])){
  $cn = new mysqli(HOST, DB_USER, DB_PASS, DB_NAME);
  if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
  }
  $cn->set_charset("utf-8");
  $stmt = $cn->prepare("UPDATE post SET nice = nice+1 WHERE id = ?");
  $stmt->bind_param("i",$_POST['nice']);
  $stmt->execute();
  $stmt->close();
  $cn->close();

  header('location:board.php?sort=new');
  exit();
}

require_once './tpl/board.php';