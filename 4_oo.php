<?php

/*### PARADIGMA OO ###

	- Classe é um molde para algo concreto, inclusive podendo se reutilizado no mesmo projeto
	- Método é como se fosse uma função, mas dentro de uma classe

### PARADIGMA OO ###*/


class People {

	public function getHello($name) {

		return "Hello {$name}!";
	}

}

$p = new People;

echo $p->getHello("Eu mesmo");