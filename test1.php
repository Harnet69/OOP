<?
class Dog {
	public $nick;
	public $age;
	public $feet;
	
	function __construct($n, $a, $f){
		$this->nick = $n;
		$this->age = $a;
		$this->feet = $f;
	}
	
	function ShowDog(){
		echo "Собака по имени ".$this->nick." возрастом ".$this->age." года имеет ".$this->feet." лап(ы).<br>";
	}
}

class SuperDog extends Dog {
	public $color;
	
	function __construct($n, $a, $f, $c){
		parent:: __construct ($n, $a, $f);
		$this->color = $c;
	}

	function ShowSuperDog(){
		parent:: ShowDog();
		echo "Его цвет ".$this->color;
}
}

$rex = new Dog("Рекс", 3, 4);
$Dodo = new Dog("Додо", 10, 6);
$rex->ShowDog();
$Dodo->ShowDog();
$sava = new SuperDog("Яша", 0.2, 4, "White");
$sava->ShowSuperDog();
?>