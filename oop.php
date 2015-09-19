<?
class Car{
	const NUMWHEELS = 4;
	function PrintNumwheels(){
		echo self::NUMWHEELS;
	}
}

class MyExceptionOne extends Exception{
	function __construct($msg){
		parent:: __construct($msg);
	}
}

class MyExceptionTwo extends Exception{
	function __construct($msg){
		parent:: __construct($msg);
	}
}

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
	
	function __construct($x, $y){
		try{
			if($x == 0){
				throw new MyExceptionOne('No parametr 1');
			}
			if($y == 0){
				throw new MyExceptionTwo('No parametr 2');
			}
		echo 'Object '.$x, $y.' created <br>';
		}catch(MyExceptionOne $e){
			echo 'Error: '.$e->getMessage().'<br>';
			echo 'Line #: '.$e->getline().'<br>';
			echo 'File: '.$e->getfile().'<br>';
			
		}catch(MyExceptionTwo $e){
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
$cat = new Animal(0,1);
$dog = new Animal(1,0);
$mouse = new Animal(1,7 );
$supercat = clone $cat;
$cat->name = "Cat";
$dog->name = "Dog";
$cat->sayHello("Myau");
$dog->sayHello("Gav");
$car = new Car();
echo Car::NUMWHEELS.'<br>';
?>