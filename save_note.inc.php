<?php
$title = $note->clearStr($_POST['title']);
$description = $note->clearStr($_POST['description']);
$author = $note->clearStr($_POST['author']);


if(empty($title) or empty($description)){
	$errMsg = 'Заполните поля';
}else{
	$note->saveNote($title, $description, $author);
	header('Location:guest.php');
}
?>