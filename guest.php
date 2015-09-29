<?php
header('Content-Type: text/html;charset=utf-8');
require 'guestDB.class.php';
$note = new GuestDB;
$errMsg = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	include 'save_note.inc.php';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>Гостевая книга</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<h1>отзывы и заметки</h1>
<?php
if($errMsg){
	echo "<h3>$errMsg</h3>";
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Заголовок сообщения:<br />
<input type="text" name="title" /><br />

Текст сообщения:<br />
<textarea name="description" cols="50" rows="5"></textarea><br />
Автор:<br />
<input type="text" name="source" /><br />
<br />
<input type="submit" value="Добавить!" />

</form>

<?php
include 'get_note.inc.php';
?>

</body>
</html>