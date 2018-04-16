<?php 
require_once('vendor/autoload.php');
require_once('db.php');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$param = $_GET['param'];

// 1. shop/all
// 2. shop/item/{id=3}
// 3. manage/add

$param_array = explode('/', $param);
var_dump($param_array);

if (!file_exists($param_array[0]. '.php')) {
	echo "Sorry, wrong route";
	exit;
}

require_once($param_array[0] . '.php');

$handle_obj = new $param_array[0]();

if (array_key_exists(1, $param_array)) {
	$method = $param_array[1] . 'Method';
} else {
	$method = 'indexMethod';
}

if (array_key_exists(2, $param_array)) {
	echo $handle_obj->method($param_array[2]);
} else {
	echo $handle_obj->method;
}

 ?>