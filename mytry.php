<?
session_start();
echo $_SESSION[$a];
if ($_SERVER['REQUEST_METHOD'] =="POST"){
	session_start();
	$a = $_POST['mama'];
	$_SESSION[$a] = $a;
	header('Location:mytry.php');
}
?>
<form action="<? $_SERVER['REQUEST_URI']?>" method="POST">
<input type="text" name="mama">Мама</input>
<input type="submit">Отправить</input>
</form>
