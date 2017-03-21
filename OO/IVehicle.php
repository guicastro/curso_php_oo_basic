<?php

interface IVehicle {

	//Indica que o método é obrigatório
	public function getEngine($type = "hp");

	//Indica que vai ter obrigatoriamente o método abstrato
	public function getBrand();

	//Indica que vai ter obrigatoriamente o método getColor
	public function getColor();
}