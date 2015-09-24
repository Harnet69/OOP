<h1>Сеттеры и геттеры</h1>
<?
/*class test {
	
	function __invoke($val){// обращение к классу как к функции
		echo $val*$val;
	}
	
	function ww($val){
		echo $val+$val;
	}
}
$x = new test(5);
echo $x(5);
$x->ww(5)



class Car {
	private $arr = array();
	
	function __set($n, $v){ //сеттер
		if ($n == "whil"){
		$this->arr[$n] = $v;}
		else{
			echo "Всё пропало!";
		}
	}
	
	function __get($n){ // геттер
		return "Это ".$this->arr[$n];
	}
	
	function __call($n, $v){ // доступ к методу которого нет(ил приватный)
		echo "Новый метод ".$n;
		foreach($v as $c){
			echo " передал параметры ".$c;	
		}
	}
}

$audi = new Car;
$audi->whil = "4 колеса";
echo $audi->whil."<br>";
$audi->start("Dodo", "Вася");


class c {
	public $arr = array();
	
	function __set($n, $v){
		$this->arr[$n] = $v; 
	}	
	
	function __get($n){
		echo "А иди ты...";
		return $this->arr[$n];
	}
	
	function showArr(){
		foreach ($this->arr as $i=>$r){
			echo $i." : ".$r;
		}
	}
}
$x = new c;
$x->name = "Вася";
echo $x->name."<br>";
$x->showArr();*/
?> 