<?php

function dd($dump){

	var_dump($dump);
	die();
}
function request(){

	$request = $_SERVER['REQUEST_METHOD'];
	if ($request=='POST'){

		return $_POST;
	}else{
		return $_GET;
	}
}

function isEmpty(){
$request = request();
$empty = false;
foreach ($request as $key => $value) {
  if (empty($request[$key])){

    $empty= true;
  }
}
  return $empty;
}



 ?>
