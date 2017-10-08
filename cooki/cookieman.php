<button onclick=alert(document.cookie)>Show cookie</button>
<input type=text id=cookieName>
<button onclick=setCookie()>set Cookie</button><br>
<a href="" onclick="return addCookie()">Addcookie</a>
<?php 
if(isset($_GET['addCookie'])){
	$cvalue=$_GET['addCookie'];
	setcookie($cvalue, "Value1", time() + (86400 * 30), "/");
}
?>

<script>
function addCookie(){
	var ck=document.getElementById("cookieName").value;
	window.location.assign("?addCookie="+ck);
	return false;
}
</script>