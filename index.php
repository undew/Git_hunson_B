<?php
require_once './func/func.php';
require_once './config/config.php';

$cn = new mysqli(HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
$cn->set_charset("utf-8");

$query = "SELECT * FROM spice WHERE kind = 'main'";
$stmt = $cn->prepare($query);
$stmt->execute();
$main_row = fetch_all($stmt);

$query = "SELECT * FROM spice WHERE kind = 'taste'";
$stmt = $cn->prepare($query);
$stmt->execute();
$taste_row = fetch_all($stmt);


$query = "SELECT * FROM spice WHERE kind = 'flavor'";
$stmt = $cn->prepare($query);
$stmt->execute();
$flavor_row = fetch_all($stmt);

$query = "SELECT * FROM spice WHERE kind = 'hot_taste'";
$stmt = $cn->prepare($query);
$stmt->execute();
$hot_taste_row = fetch_all($stmt);

require_once './tpl/index.php';