<?php
//*************************
//課題No.
//作成日:2019//
//作成者:峯松康二
//クラス:IH-12A-905
//*************************
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
function redirect($url) {
  header('HTTP/1.1 301 Moved Permanently');
  header("Location: $url");
  exit;
}
// 概要  ：データベースに接続してSQLを実行する
// 引数1 ：string $sql プリペアドステートメント
// 引数2 ：string/array $data SQL文の条件
// 戻り値：エラー発生時 string
//        参照系 array
//        更新系 bool
function execute_sql(string $sql, ...$data) {
  $rows = array();
  $cnt = 1;
  if(is_array($data[0])){
    $data = array_values($data[0]);  //連想配列を普通の配列に変換
    $cnt = count($data);
  }
  // データ型を生成
  $data_type = substr(gettype($data[0]), 0, 1);
  for($i = 1; $i < $cnt; ++$i){
    $data_type .= substr(gettype($data[$i]), 0, 1);
  }
  $cn = mysqli_connect(HOST, DB_USER, DB_PASS, DB_NAME);
  //接続失敗時エラーコードを返却
  if(mysqli_connect_errno($cn)){
    return $error_code = '201';
  }
  mysqli_set_charset($cn, 'utf8');
  mysqli_begin_transaction($cn);
  try{
    $stmt = mysqli_prepare($cn, $sql);
    if(!empty($data[0])){
      mysqli_stmt_bind_param($stmt, $data_type, ...$data);
    }
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
  }
  catch(Exception $e){
    mysqli_rollback($cn);
    mysqli_close($cn);
    return $error_code = '201';
    // return;
  }
  mysqli_commit($cn);
  if(mysqli_stmt_field_count($stmt) != 0){
    while ($row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }
    mysqli_close($cn);
    return $rows;
  }
  mysqli_close($cn);
  return true;
}
function fetch_all(& $stmt) {
  $hits = array();
  $params = array();
  $row = array();
  $meta = $stmt->result_metadata();
  while ($field = $meta->fetch_field()) {
      $params[] = &$row[$field->name];
  }
  call_user_func_array(array($stmt, 'bind_result'), $params);
  while ($stmt->fetch()) {
    $c = array();
    foreach($row as $key => $val) {
      $c[$key] = $val;
    }
    $hits[] = $c;
  }
  return $hits;
}
