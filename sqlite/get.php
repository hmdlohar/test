<?php 
if(isset($_GET['get'])){
	$file=fopen("t.txt","r+");
	echo fgets($file);
	fclose($file);
}
if(isset($_GET['put'])){
	$data=$_GET['put'];
	$file=fopen("t.txt","w");
	fwrite($file,$data);
	fclose($file);
}
$file=fopen("t.txt","r+");
	echo fgets($file);
	fclose($file);
?>