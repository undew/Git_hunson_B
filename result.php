<?PHP
//*************************
//課題No.00
//作成日:2019//
//作成者:峯松康二
//クラス:IH-12A-905
//*************************

$input = array(
  'title'       => '',
  'user_name'   => '',
  'description' => '',
);
$error_mes = array(
  'title'       => '',
  'user_name'   => '',
  'description' => '',
);
$material = array(
  'staple_food' => '',
  'taste'       => '',
  'smell'       => '',
  'spiciness'   => '',
);
$date     = new DateTimeImmutable();


//投稿ボタンを押したとき
if(isset($_POST['contribute'])) {

  //値受け取り
  foreach($input as $key => $value) {
    $input[$key] = (string)filter_input(INPUT_POST, $key);
  }
  
  //エラーチェック
  //空白チェック
  if($input['title'] === '') {
    $error_mes['title'] = 'タイトルを入力してください。';
  }
  if($input['user_name'] === '') {
    $error_mes['user_name'] = 'ニックネームを入力してください。';
  }
  if($input['title'] === '') {
    $error_mes['title'] = 'タイトルを入力してください。';
  }
  //文字数チェック
  if(mb_strlen($input['title']) <= 30) {
    $error_mes['title'] = 'タイトルを入力してください。';
  }
  //まだ途中

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
//DBから読み込み




require_once './tpl/result.php';