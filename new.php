<?
function __autoload($name){
	include "class/".$name.".php";	
}

function foo (Animal $dog){
	echo "Трям!";
}
$dog = new Animal();
foo($dog);

/*function foo (array $x){
	echo implode (' , ',$x);
}
$x = array("a","b","c","d");
foo($x);
*/
?>