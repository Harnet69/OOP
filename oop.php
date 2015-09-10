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
}
$cat = new Animal();
$dog = new Animal();
$cat->name = "Cat";
$dog->name = "Dog";
$cat->sayHello("Myau");
$dog->sayHello("Gav");
?>