<?
class Animal{
	public $name;
	public $age = 0;
	function sayHello($word){
		echo $this->name.' say '.$word;
		$this->DrawBr();
	}
	function DrawBr(){
		echo '<br>';
	}
	function __construct($num){
		echo 'Object '.$num.' created <br>';
	}
	function __destruct(){
		echo "Object deleted <br>";
	}
}
$cat = new Animal(1);
$dog = new Animal(2);
$cat->name = "Cat";
$dog->name = "Dog";
$cat->sayHello("Myau");
$dog->sayHello("Gav");
?>