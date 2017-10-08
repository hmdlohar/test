<?php 

$file=fopen("002.vcf","a");
for($x=0;$x<=5000;$x++){
	$x2=$x+10000;
	//$ss= "BEGIN:VCARD<br>VERSION:2.1<br>N:;Cnt {$x};;;<br>FN:Tikk<br>TEL;CELL:+9197865{$x2}<br>END:VCARD<br>";
	$ss= "BEGIN:VCARD\nVERSION:2.1\nN:;Cnt {$x};;;\nFN:Tikk\nTEL;CELL:+9197865{$x2}\nEND:VCARD\n";
	fwrite($file,$ss);
}


?>