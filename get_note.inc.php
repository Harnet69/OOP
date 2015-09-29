<?php
$result = $note->getNote();
echo '<p>Всего записей в книге: '.count($result);
foreach($result as $item){
		$id = $item['id'];
		$title = $item['title'];
		$desc = $item['description'];
		$author =$item['author'];
		$dt = time('d-m-Y H:i:s', $item['datetime']);
		echo <<<LABEL
		<hr>
		Заголовок:<br>
		$title
		<p>Сообщение: $desc</p>
		<br> Автор: $author
		<p align='right'>
			<a href='guest.php?del=$id'>Удалить</a>
		</p>
LABEL;
}
?>