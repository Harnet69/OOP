<?
abstract class Human {
	public $fio;
	public $age;
	function __construct($f, $a){
		$this->fio = $f;
		$this->age = $a;
	}
	function Show(){
		echo $this->fio." ".$this->age;
	}
	abstract function add();
}
class Man extends Human{
	function add(){
		echo "Lelele";
	}
	
}

$human1 = new Man("Иванов Иван Иваныч", 55);
$human1->Show();
$human1->add();
?>