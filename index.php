<?php

function pre($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

require_once('constants.php');
require_once('loader.php');

$heinz = new modelsUser(array());

echo __DIR__.'<br>';
echo dirname(__DIR__);
?>