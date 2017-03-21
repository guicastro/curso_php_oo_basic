<?php

require_once("Vehicle.php");

class Bike extends Vehicle {

	public $model;

	public function __construct($brand,$color,$model) {

		/*
		$this->model = $model;
		$this->brand = strtoupper($brand);
		$this->color = $color;

		O método parent faz a mesma coisa que o código acima
		mas aproveita o que está no construtor da classe pai
		desta forma reaproveita o código, não precisando
		redigitar o construtor
		O método parent:: chama os métodos da classe pai
		*/

		parent::__construct($brand,strtoupper($color));

	}


	public function getBrand() {

		return $this->brand;
	}


	public function getColor() {

		return $this->color;
	}
}