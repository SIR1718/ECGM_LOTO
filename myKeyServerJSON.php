<?php 
//class in php

class KeyGenerator {

public $numbers;
public $stars;

public function __construct($n,$s) {

	$this->numbers = array();
	$this->stars = array();

	// numbers

	do {
		$randomNumber = rand(1,50);
		if (!in_array($randomNumber,$this->numbers)) {
			$this->numbers[] = $randomNumber;
		}
	} while (count($this->numbers) < $n);
	sort($this->numbers);

	// stars

	do {
		$randomNumber = rand(1,11);
		if (!in_array($randomNumber,$this->stars)) {
			$this->stars[] = $randomNumber;
		}
	} while (count($this->stars) < $s);
	sort($this->stars);

}

}


// new instance
$k = new KeyGenerator(5,2);

$JSONKey = json_encode($k);


// dump the object
//var_dump($k);

echo $JSONKey;

?>