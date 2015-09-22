<?
class User{
	private $data = array();
	
	public function __set($name, $value){
		$this->data[$name] = $value;
	}
	
	public function __get($name){
		if(array_key_exists ($name, $this->data)){
			return $this->data[$name];
		}
	}
	
	public function __call($name, $a){
		echo $name.' do not work '. implode(', ',$a);
	}
	
	private function bebe(){
		echo 'memememe';
	}
	
	public function __toString(){
		return "A vot figvam!";
	}
}
$object = new User;
$object->name = "superpuper";
echo '<h1>'.$object->name.'</h1>';
$object->foo(1,2);
echo '<br>blabla<hr>';
$object->bebe();
echo '<br>WORk and WORK<hr>';
echo $object;
?>