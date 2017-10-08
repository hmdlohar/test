<?php
if(isset($_GET['trynew'])){$trynew=$_GET['trynew'];}else{$trynew="just TRy";}
if(isset($_COOKIE['num'])){
	$num=$_COOKIE['num'];
	$num++;
	setcookie('num',$num);
	}else{$num=0;
	setcookie('num',0);}
$trynow=date("i:s")."and num={$num}--TRY1 and trynew={$trynew}<br>";
$file=fopen("try.html","a+");
fwrite($file,$trynow);
//if($num<=10){header("Location: try.php");}else{setcookie('num',0);}
?>
<script>

</script>