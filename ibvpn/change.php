<?php 
$dir=opendir(".");
$i=200;

while(($d=readdir($dir))!==false){
	
	if(stripos($d,"india")>0){
		echo $d."<br>";
		rename($d,"vp{$i}.ovpn");
		$i++; 	
	}
	
}
echo $i;
?>
45.64.106.35

103.250.184.111  
103.205.140.125 
139.59.2.46
45.64.106.21