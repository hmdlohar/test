<form action="" method="POST">
<input type=text name=yarray id=yarray>
<select name=quality id=quality>
<option value="hd720">best</option>
<option value="medium">mediam</option>
<option value="small">low</option>
</select>
<p onclick=fetchAll()>Get All</p> 
<p onclick=listArray2()>list</p> 
</form>
<div id=list>
List of All

</div>
<div id=allarray style="position:fixed;top:20px;right:10px;">
<textarea id=listArray cols=30 rows=30>

</textarea>
</div>
<script>
function listArray(single){
	document.getElementById("listArray").value=document.getElementById("listArray").value+single+",\n";
}
function listArray2(){
	inp=document.getElementsByTagName("input");
	for(x=1;x<inp.length;x++){
		listArray(inp[x].value);
	}
}
	d1=Array();
	d2=Array();
	d5=Array();
	d7=Array();
	d6=Array();
function fetchAll(){
	yarray=document.getElementById("yarray").value;
	quality=document.getElementById("quality").value;
	ya=yarray.split("-hmd-");
	for(x=0;x<ya.length;x++){
		getLinks(ya[x],quality,"divss"+x,x);
	}
}

function getLinks(yid,quality,div,x){
d1[x]=document.createElement("input");
d2[x]=document.createElement("a");
d7[x]=document.createElement("a");
d4=document.createElement("span");
d5[x]=document.createElement("span");
d6[x]=document.createElement("span");
d3=document.createElement("br");
d4.innerHTML=" - ";
d7[x].innerHTML="<a onclick=reload('"+yid+"','"+div+"')>R</a>";
d1[x].id=div;
d2[x].id=div+"2";
d2[x].innerHTML="downloasd";
d2[x].setAttribute("download", "all.mp4");

document.getElementById("list").appendChild(d1[x]);
document.getElementById("list").appendChild(d2[x]);
document.getElementById("list").appendChild(d4);
document.getElementById("list").appendChild(d7[x]);
document.getElementById("list").appendChild(d5[x]);
document.getElementById("list").appendChild(d6[x]);
document.getElementById("list").appendChild(d3);
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
   data2=data.split("-hmd-");
   //document.getElementById('result').innerHTML=data;
   data2[0]=data2[0]+"&title="+data2[1];
    d1[x].value=data2[0];
    d2[x].href=data2[0];
    d2[x].setAttribute("download",data2[1]+".mp4");
    d2[x].title=data2[1];
    d5[x].innerHTML=data2[2]+" - ";
    d6[x].innerHTML=data2[1];
   // listArray(data2[0]);
   // alert(data);
    }
  }
xmlhttp.open("GET","index2.php?videoid="+yid+"&type=Download&q="+quality,true);
xmlhttp.send();
}
function reload(yid,div){
	quality=document.getElementById("quality").value;
	div=document.getElementById(div);
	//alert(div.value);
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {    
   var data=xmlhttp.responseText;
  //alert(data);
   data2=data.split("-hmd-");
   //document.getElementById('result').innerHTML=data;
   data2[0]=data2[0]+"&title="+data2[1];
   div.value=data2[0];
/*
    d1[x].value=data2[0];
    d2[x].href=data2[0];
    d2[x].title=data2[1];
    d5[x].innerHTML=data2[2]+" - ";
    d6[x].innerHTML=data2[1];
*/
    //listArray(data2[0]);
    
    }
  }
xmlhttp.open("GET","index2.php?videoid="+yid+"&type=Download&q="+quality,true);
xmlhttp.send();
}
</script>