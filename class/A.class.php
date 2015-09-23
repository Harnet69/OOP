<?class A{
	static function A1(){
		echo "A1";
	}
	static function A2(){
		static::A1();//работает позднее статическое связывание
	}
}
?>