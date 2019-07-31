<?PHP
//*************************
//課題No.00
//作成日:2019//
//作成者:峯松康二
//クラス:IH-12A-905
//*************************

require_once './func/func.php';
require_once './config/config.php';


$input = array(
  'staple_food' => '',
  'taste'       => '',
  'smell'       => '',
  'spiciness'   => '',
);
$error_mes = array(
  'title' => '',
  'name'  => '',
);


//カレーの結果受け取り
if(isset($_POST['cook'])) {
  foreach($input as $key => $value) {
    $input[$key] = (string)filter_input(INPUT_POST, $key);
  }
}

if(isset($_POST['write'])) {
  $date     = new DateTimeImmutable();
  $input = array(
    'title'       => (string)filter_input(INPUT_POST, 'title'),
    'name'        => (string)filter_input(INPUT_POST, 'name'),
    'staple_food' => (string)filter_input(INPUT_POST, 'staple_food'),
    'taste'       => (string)filter_input(INPUT_POST, 'taste'),
    'smell'       => (string)filter_input(INPUT_POST, 'smell'),
    'spiciness'   => (string)filter_input(INPUT_POST, 'spiciness'),
    'post_date'   => $date -> format('Y-m-d'),
    'nice'        => 0,
  );

  //エラーチェック
  if($input['title'] == '') {
    $error_mes['title'] = 'タイトルを入力してください。';
  }
  if($input['name'] == '') {
    $error_mes['title'] = '名前を入力してください。';
  }
  if(mb_strlen($input['title']) <= 30) {
    $error_mes['title'] = '30文字以内で入力してください。';
  }
  if(mb_strlen($input['name']) <= 30) {
    $error_mes['name'] = '30文字以内で入力してください。';
  }
  $sql = "INSERT INTO post(title,name,main,taste,flavor,hot_taste,post_date,nice) VALUES(?,?,?,?,?,?,?,?)";
  $result = execute_sql($sql, $input);  // 自作関数
}

//DBから説明読み込み
$sql  = "SELECT name FROM spice WHERE id IN(?,?,?,?)";
$rows = execute_sql($sql, array($input['staple_food'], $input['taste'], $input['smell'], $input['spiciness']));

//材料からカレーを算出
if($input['spiciness'] == 7) {
  $img = 'result_curry_01.png';
}
elseif($input['spiciness'] == 8) {
  $img = 'result_curry_06.png';
}
elseif($input['spiciness'] == 9) {
  $img = 'result_curry_11.png';
}

require_once './tpl/result.php';