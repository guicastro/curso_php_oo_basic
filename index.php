<?php

/*### CRIANDO CLASSE OO ###

	- Quando vamos criar um arquivo de classe em PHP, deve ser criado um único arquivo para uma classe
	- No arquivo que vai criar, já colocar o nome da classe com a primeira letra em maiúscula
	- O nome do arquivo deve ser o mesmo nome da classe
	- O nome da classe é sempre no singular
	- Os objetos, depois de criado, são independentes, cada um tem suas características
	- Atributos são propriedades internas dos objetos, são as variáveis das classes
	- Atributo sempre deve ser criado com a visibilidade (public, private, etc)
	- Métodos são as ações de uma classe, o que ela vai executar. É um função (function)
	- Método sempre deve ser criado com a visibilidade (public, private, etc)
	- Assinatura é a forma que o método é executado (ou chamado)
	- Herança é quando uma classe herda atributos ou métodos de outra classe
	- Construtor é um método que é executado toda a vez que uma classe é instanciada, ou seja, quando se cria um objeto
	- O Construtor passa por herança, se não foi definido um construtor nas classes, ele irá herdar da classe pai
	- Quando tem o construtor, os parâmetros devem ser passados no momento de instanciar
	- O que está no construtor é obrigatório, ou seja, se não tiver setado os valores ele irá retornar erro
	- Se for setado null no método construtor, eles não precisam ser setados na instância
	- public é visível a todos, dentro e fora da classe, pode ser setado no instanciamento
	- private só pode ser setado dentro da classe, via setter ou getter
	- Geralmente os atributos são privados e se utiliza setters e getters, para aumentar a segurança
	- protected protege o atributo. Ele protege na classe pai (igual ao private) mas libera nas classe filho, ou seja, não é setado no instanciamento mas pode ser setado quando em classe filho
	- AbstractedClass é um modelo para outras classes. Não se instancia uma nova classe, somente herda (via extentds)
	- Métodos abstratos também podem ser criados. Os métodos abstratos são de implementação obrigatório nas classes que herdam a classe abstrata
	- Interface é uma classe que vai definir um padrão de desenvolvimento das suas classe
	- Interface é um resumo do que precisa ter em todas as suas classes
	- Olhando na interface é possível saber tudo o que vai ter para funcionar as classes
	- Interface é como se fosse os campos obrigatórios de uma classe, mas com atributos e métodos
	

### CRIANDO CLASSE OO ###*/

require_once("OO/Car.php");
require_once("OO/Bike.php");

$ferrari = new Car("Ferrari","Vermelha");
$ferrari->name = "Ferrari";
$ferrari->engine = 488;
$ferrari->setDoors(2);


$mustang = new Car("Ford","Amarelo");
$mustang->name = "Mustang";
$mustang->engine = 300;
$mustang->setDoors(4);


$kawasaki = new Bike("Kawasaki","Verde","Sport");
$kawasaki->name = "ZX-10";
$kawasaki->engine = 150;

echo "<pre>";
print_r($ferrari);
echo "<br>".$ferrari->getEngine("cv");
echo "<br>".$ferrari->getColor();
echo "</pre>";

echo "<pre>";
print_r($mustang);
echo $mustang->getEngine();
echo "</pre>";

echo "<pre>";
print_r($kawasaki);
echo "<br>".$kawasaki->getEngine();
echo "</pre>";
