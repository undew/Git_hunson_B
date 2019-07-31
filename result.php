<?PHP
//*************************
//課題No.00
//作成日:2019//
//作成者:峯松康二
//クラス:IH-12A-905
//*************************

require_once './func/func.php';
require_once './config/config.php';


$material = array(
  'staple_food' => '',
  'taste'       => '',
  'smell'       => '',
  'spiciness'   => '',
);


//カレーの結果受け取り
if(isset($_POST['cook'])) {
  foreach($material as $key => $value) {
    $material[$key] = (string)filter_input(INPUT_POST, $key);
  }
}
echo '<pre>';
var_dump($material);
echo '</pre>';

//材料からカレーを算出
//DBから説明読み込み
$sql = "SELECT * FROM WHERE ";
$row = execute_sql($sql);

require_once './tpl/result.php';