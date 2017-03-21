<?php

/*
class Vehicle {

	public $name;
	public $brand;
	protected $color;
	public $engine;

	public function __construct($brand,$color) {

		$this->brand = $brand;
		$this->color = $color;
	}

	public function getEngine($type = "hp") {

		return $this->engine." {$type}";
	}
}
- Foi transformada em classe Abstrata pata exercício
*/

require_once("IVehicle.php");

abstract class Vehicle implements IVehicle {

	public $name;
	public $brand;
	protected $color;
	public $engine;

	public function __construct($brand,$color) {

		$this->brand = $brand;
		$this->color = $color;
	}

	public function getEngine($type = "hp") {

		return $this->engine." {$type}";
	}

	abstract public function getBrand();
}