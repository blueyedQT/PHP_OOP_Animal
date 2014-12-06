<?php 

class Animal {
	public $name;
	public $health = 100;
	public function __construct($name) {
		$this->name = $name;
	}
	public function walk() { 
		$this->health -= 1;
		return $this;
	}
	public function run() {
		$this->health -= 5;
		return $this;
	}
	public function display_health() {
		echo 'Name: '.$this->name.'<br>
			Health: '.$this->health.'<br>';
	}
}

class Dog extends Animal {
	public $health = 150;
	public function pet() {
		$this->health += 5;
		return $this;
	}
}

class Dragon extends Animal {
	public $health = 170;
	public function fly() {
		$this->health -= 10;
		return $this;
	}
	public function display_health() {
		echo 'This is a dragon!<br>';
		parent:: display_health();
	}
}

$animal = new Animal("animal");
$animal->walk()->walk()->walk()->run()->run()->display_health();
echo '<br>';

$animal2 = new Dog("dog");
$animal2->walk()->walk()->walk()->run()->run()->pet()->display_health();
echo '<br>';

$animal3 = new Dragon("dragon");
$animal3->walk()->walk()->walk()->run()->run()->fly()->fly()->display_health();
?>