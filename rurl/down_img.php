<?php
if(isset($_GET['down_now'])){
	$destination_folder = 'files/';
	$url=$_GET['down_now'];
$newfname = $destination_folder . basename($url);

$file = fopen ($url, "rb");
if ($file) {
  $newf = fopen ($newfname, "wb");

  if ($newf)
  while(!feof($file)) {
    fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
  }
}

if ($file) {
  fclose($file);
}

if ($newf) {
  fclose($newf);
}	
	
}	
	


?>