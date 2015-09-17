<?
try{
	$a = 1;
	$b = 0;
	if($b == 0){
		throw new Exception("Error!");}
	$c = $a/$b;
}catch(Exception $e){
	echo $e->getMesssage();
	echo $e->getLine();
	echo $e->getFile();
}
?>