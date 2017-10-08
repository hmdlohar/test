
<?php

if($_GET['cr']){
	$cr= $_GET['cr'];
	$cr2=$cr+1;
	if($cr<9&$cr>0){$crs="000{$cr}";}
	if($cr<99&$cr>10){$crs="00{$cr}";}
	if($cr<999&$cr>100){$crs="0{$cr}";}
	if($cr<9999&$cr>1000){$crs="{$cr}";}
	$file=fopen("profile/cookies_{$crs}.txt","w+");
	fclose($file);
	if($cr<=500){header("Location: in.php?cr={$cr2}");}
	
}
if(isset($_POST['in_cooki'])){
	$name=$_POST['name'];
	$cookie=$_POST['cooki'];
	$cooki="<tr><td>{$name}</td><td><textarea cols=30 rows=10>{$cookie}</textarea></td></tr>";
	$file=fopen("out.html","a+");
	$fwrite=fwrite($file,$cooki);
	if(!$fwrite){
		echo "Error In in";
		}else {echo "Entered sucessfully";}
}
?>
<form action="" method=POST>
<input type=text name=name>
<textarea name=cooki></textarea>
<input type=submit name=in_cooki>
</form>
