<?
$id = $note->clearInt($_GET['del']);
if($id){
	$note->deleteNote($id);
}
?>