<link href="http://localhost/platform-new/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<style>
#cp-marker{
    font-size: 32px;
    color: #fff;
    text-shadow: 0 0 3px rgba(0,0,0,.8);
    cursor:hand;
    margin-top:-10px;
    margin-left: -10;
}
</style>
<img src="img/color-circle2.png" draggable="false"  id="cp-img" height=115 width=115 style="display:block;-webkit-user-drag: auto;">

<canvas id="cp-canvas"></canvas>
<div id="background-color" style="height:50px;width:50px;background-color: #FFFFFF;position: fixed; left:200px;top:30px;border: 1px solid gold;"></div>

<script src="cp.js"> </script>
<br>
<div>
	<canvas id="cp-scale" style="width:230px;height:20px;border:1px solid black;"></canvas>
</div>

<i class="fa fa-caret-up" id="cp-marker" ></i>

<script type="text/javascript">
img=document.getElementById("cp-img");
canvas=document.getElementById("cp-canvas");
//c=new cp(img,img.clientHeight,img.clientWidth,canvas);
c=new cp(img,115,115,canvas);

document.addEventListener('colorChange', function(e){
   // e.target matches the elem from above
   document.getElementById("background-color").style.backgroundColor=e.detail;
}, false);
scale=document.getElementById("cp-scale");
marker=document.getElementById("cp-marker");

c.setScale(scale,230,marker);
</script>