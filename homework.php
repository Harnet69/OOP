<h1>Тест</h1>
<?
class User {
	/*private $arr = array();
	function __set ($n, $v){
		$this->arr[$n] = $v;
	}
	
	function __get ($n){
		return "Здрасси, это ".$this->arr[$n]."<br>";
	}

	function __call($na, $mm){
		echo "Вы создали поле $na с параметрами ";
		//foreach ($mm as $i=>$k){
		//	echo $k." ";
		//}
		echo implode (',',$mm);

	}	
*/
}

$user1 = new User;
$user1->name = "Дурак Вася";
echo $user1->name;
//$user1->showMy("Иван","Иванов",25);
?>