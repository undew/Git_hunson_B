<?PHP
//*************************
//課題No.00
//作成日:2019//
//作成者:峯松康二
//クラス:IH-12A-905
//*************************

require_once './func/func.php';
require_once './config/config.php';


$date     = new DateTimeImmutable();
$input = array(
  'title'     => (string)filter_input(INPUT_POST, 'title'),
  'name'      => (string)filter_input(INPUT_POST, 'name'),
  'main'      => (string)filter_input(INPUT_POST, 'main'),
  'taste'     => (string)filter_input(INPUT_POST, 'taste'),
  'flavor'    => (string)filter_input(INPUT_POST, 'flavor'),
  'hot_taste' => (string)filter_input(INPUT_POST, 'hot_taste'),
  'post_date' => $date -> format('Y-m-d'),
  'nice'      => 0,
);

$sql = "INSERT INTO post(title,name,main,taste,flavor,hot_taste,post_date,nice) VALUES(?,?,?,?,?,?,?,?)";
$result = execute_sql($sql, $input);  // 自作関数

header('Content-type: text/plain; charset= UTF-8');
echo $input;