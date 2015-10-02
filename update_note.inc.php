<?
if (isset ($_POST['edite'])){
$id = $_POST['id'];	
$title = $note->clearStr($_POST['title']);
$description = $note->clearStr($_POST['description']);
$author = $note->clearStr($_POST['author']);
$datetime = date('d-m-Y H:i:s');
	if (empty ($title) or empty ($author)){
		echo "Вы не заполнили обязательное поле!";
	}
	else {
		$note->updateNote($id, $title, $description, $author, $datetime);
		header('Location:guest.php');
	}
}
echo $id = $note->clearInt($_GET['up']);
$arr = $note->editNote($id);
$datetime = date('d-m-Y H:i:s');
foreach ($arr as $item){
		$id = $item['id'];
		$title = $item['title'];
		$description = $item['description'];
		$author = $item['author'];
		$datetimeOld = $item['datetime'];
}
?>
<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
<input type="hidden" name="id" value="<?=$id?>">
Заголовок сообщения:<br />
<input type="text" name="title" value="<?=$title?>"/><br />
Текст сообщения:<br />
<?echo '<textarea name="description">'.$description.'</textarea>'?><br />

Автор:<br />
<input type="text" name="author" value="<?=$author?>"/><br />
<br />
<input type="submit" name="edite" value="Редактировать!" />

</form>


