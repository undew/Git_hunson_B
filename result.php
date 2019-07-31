<?php
//*************************
//課題No.00
//作成日:2019//
//作成者:峯松康二
//クラス:IH-12A-905
//*************************

require_once './func/func.php';
require_once './config/config.php';


$input = array(
  'title'       => '',
  'user_name'   => '',
  'staple_food' => '',
  'taste'       => '',
  'smell'       => '',
  'spiciness'   => '',
);
$material = array(
  'staple_food' => '',
  'taste'       => '',
  'smell'       => '',
  'spiciness'   => '',
);
$error_mes = array(
  'title'       => '',
  'user_name'   => '',
);
$date     = new DateTimeImmutable();


//投稿ボタンを押したとき
if(isset($_POST['contribute'])) {

  //値受け取り
  foreach($input as $key => $value) {
    $input[$key] = (string)filter_input(INPUT_POST, $key);
  }
  $input['post_date'] = $date -> format('Y-m-d');
  
  //エラーチェック
  //空白チェック
  if($input['title'] === '') {
    $error_mes['title'] = 'タイトルを入力してください。';
  }
  if($input['user_name'] === '') {
    $error_mes['user_name'] = 'ニックネームを入力してください。';
  }
  //文字数チェック
  if(mb_strlen($input['title']) <= 30) {
    $error_mes['title'] = '';
  }
  if(mb_strlen($input['user_name']) <= 30) {
    $error_mes['user_name'] = '';
  }
  

  //データベースに書き込み
  $sql = "INSERT INTO post(name,main,taste,flavor,hot_taste,post_date,nice) VALUES(?,?,?,?,?,?,0)";
  $result = execute_sql($sql, $input);  // 自作関数
}

//カレーの結果受け取り
if(isset($_POST['cook'])) {
  foreach($material as $key => $value) {
    $material[$key] = (string)filter_input(INPUT_POST, $key);
  }
}


//材料からカレーを算出

//DBから説明読み込み
$sql = "SELECT id,name,kind,description,little_description";
$description = execute_sql($sql);


//DBから説明読み込み
$sql    = "SELECT FROM WHERE";
$result = execute_sql($sql);

require_once './tpl/result.php';