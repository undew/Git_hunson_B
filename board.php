<?php
require './func/func.php';
require './config/config.php';

//GETが存在するか
if(empty($_GET['sort'])){
  $_GET['sort'] = 'new';
}

$post_row = array();

if($_GET['sort'] == 'new'){
  //新着表示
  $query = "SELECT * FROM post ORDER BY post_date DESC";
} elseif($_GET['sort'] == 'nice'){
  //評価順
  $query = "SELECT * FROM post ORDER BY nice DESC";
}

$post_row = execute_sql($query);

require_once './tpl/board.php';