<?php

	function addTwoNumbers($number1, $number2){

		$result = $number1 + $number2; //

		return $result;

	}

	/*echo 'Hello' . '<br>';

	echo addTwoNumbers(6, 10); //

	echo 'End' . '<br>';*/


	// array functions

	// array_key_exists()

	$cars = [

		'toyota' => '5326',

		'bmw' => '5326',

		'ferari' => '5326',
	];


	/*if (array_key_exists('toyota', $cars)){

	  echo "Key exists!";

	} else {

	  echo "Key does not exist!";

	}*/

	$numbers = [1,6235,3,4,5];

	$newArray = array_map('addOne', $numbers);


	print_r($newArray);


	function addOne($i){

		return $i + 1;
	}

	//echo array_key_exists('toyota', $cars) ? "Key exists!" : "Key does not exist!";



	
	



?>