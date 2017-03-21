<?php

/*
class Car {

	public $name;
	public $brand;
	public $color;
	public $engine;

	public function getEngine($type = "hp") {

		return $this->engine." {$type}";
	}
}
- O conteúdo da classe passou para a classe Vehicle para exemplificar Herança
*/

require_once("Vehicle.php");

class Car extends Vehicle {

	private $doors;

	public function setDoors($doors) {

		$this->doors = $doors;
	}

	public function getDoors() {

		return $this->doors;
	}

	public function getColor() {

		return $this->color;
	}

	public function getBrand() {

		return $this->brand;
	}
}
