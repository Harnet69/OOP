<?
function __autoload($name){
	include "class/$name.class.php";
}
$x = new A;
$x->A1();

B::A2();

$user1 = new User("Иван", "Иванов", 12345);
$user1->ShowUser();
$user2 = new User("Пётр", "Петров", 23456);
$user2->ShowUser();
$user3 = clone $user1;
$user3->ShowUser("Сидор", "Сидоров", 343545);
$user4 = new User("Феликс", "Феликсов", "1wqeqw345");
$user4->ShowUser();
$SuperUser1 = new SuperUser("Админ", "Админов", "addь", "Я АДМИН!");
$SuperUser1->ShowUser();
$SuperUser2 = new SuperUser("Админ2", "Админов2", "a1ddь", "Я 2 АДМИН!");
$SuperUser2->ShowUser();
echo $a = $user1->GiveName()."<br>";
echo "Создано Юзеров ".user::$cntu."<br>";
echo "Создано Суперюзеров ".SuperUser::$cntsu."<br>";
user::Hi();
$user1->showSV();

if (is_a($SuperUser1, User)){// преверяется наследование, т.е. есть ли в наследником у User $SuperUser1
	echo "Всё окей!";
}
else {
	echo "Всё плохо";
}
if ($SuperUser1 instanceOf  User){// преверяется наследование, т.е. есть ли в наследником у User $SuperUser1
	echo "Всё окей!";
}
else {
	echo "Всё плохо";
}
?>