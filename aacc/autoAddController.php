<?php
function fileRead(){
$file=fopen("status.txt","r+");
$str=fgets($file);
fclose($file);
return $str;	
}
function fileWrite($data){
$file=fopen("status.txt","w+");
fwrite($file,$data);
fclose($file);
return $data;	
}

if(isset($_GET['resetStatus'])){
	$str=$_GET['resetStatus'];
	$data=$_GET['data'];
	if($str=="gc"){
		$strNow=explode("-",fileRead());
		fileWrite("{$data}-{$strNow[1]}");
	}
	if($str=="mbasic"){
		$strNow=explode("-",fileRead());
		fileWrite("{$strNow[0]}-{$data}");
	}
}
echo fileRead();


?>