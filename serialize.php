<h1>Онц-онц!</h1>
<?
class A{
	function foo (){
		echo __CLASS__;
	}
}
class B{
	function foo (){
		echo __CLASS__;
	}
}	

	function deref($name){
		switch ($name){
		case "A" : return new A;break; 
		case "B" : return new B;break; 
		}
	}
deref("A")->foo();
deref("B")->foo();




function __autoload($name){
	include "class/".$name.".class.php";
}


/*$user1 = new Serialize("Иван", "ivan");
$user1->name = "Пётр";
$user1->lastname = "Петров";
echo $user1->name;
echo $user1->lastname;*/
?> 