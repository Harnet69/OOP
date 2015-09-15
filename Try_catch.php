<h1>Обработка исключений</h1>
<?
try {
	$a = 1;
	$b = 0;	
		if ($b ==0){
			throw new Exception ("на ноль делить нельзя!<br>");// сообщение, которое выводится в "кетче" методом $e->GetMessage
		}
		$c = $a/$b;
		echo "Бубастик - жевастик<br>";
	}
	catch (Exception $e){
		echo "Ошибка : ".$e->GetMessage()."<br>";
		echo "В строке : ".$e->GetLine()."<br>";
		echo "В файле : ".$e->GetFile()."<br>";
	}
	echo "А код продолжается";
?> 