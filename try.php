<?
try{
	$a = 1;
	$b = 0;
	if($b == 0){
		throw new Exception("Error!");
		}
	$c = $a/$b;
}catch(Exception $e){
	echo 'Error: '.$e->getMessage().'<br>';
	echo 'Line #: '.$e->getLine().'<br>';
	echo 'File: '.$e->getFile().'<br>';
}
echo 'The work continues!';
?>