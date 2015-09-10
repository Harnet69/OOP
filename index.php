<h1>Работа с OOP по версии Harnet</h1>
<?
	class Animal {
		public $name;
		public $lastname;
		
		function __construct($n,$l){
			$this->name = $n;
			$this->lastname = $l;
		}
		
		function show_anim(){
			echo $this->name."<br>";
			echo $this->lastname."<br>";
		}
	}

	$cat = new Animal("Атос","Атосыч");
	$cat->show_anim();
	
	
	
?> 