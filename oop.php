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
		try{
			if(!$num){
				throw new Exception('No animal');
			}
		echo 'Object '.$num.' created <br>';
		}catch(Exception $e){
			echo 'Error: '.$e->getMessage().'<br>';
			echo 'Line #: '.$e->getline().'<br>';
			echo 'File: '.$e->getfile().'<br>';
			
		}
	}
	
	function __destruct(){
		echo "Object deleted <br>";
	}
	
	function __clone(){
		echo 'Object cloned <br>';
	}
}
$cat = new Animal(1);
$dog = new Animal(2);
$mouse = new Animal();
$supercat = clone $cat;
$cat->name = "Cat";
$dog->name = "Dog";
$cat->sayHello("Myau");
$dog->sayHello("Gav");
?>