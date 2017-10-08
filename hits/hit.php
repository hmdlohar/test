<?php
$file=fopen("hit.html","r+");
$hit=fgets($file);
if($hit==""){$hit=0;}
fclose($file);
$file=fopen("hit.html","w+");

$hit++;
fwrite($file,$hit);
fclose($file);
?>