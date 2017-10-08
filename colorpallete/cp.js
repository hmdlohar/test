function cp(img,height,width,canvas){
	var cpCanvas,cpImg,cpHeight,cpWidth,event1,scale,scaleSize,marker,scalePos;
	event1= document.createEvent('CustomEvent');
	scalePos=-10;
	cpImg=img;
	cpHeight=height;
	cpWidth=width;
	cpCanvas=canvas;
	cpCanvas.height = cpHeight;
	cpCanvas.width = cpWidth;

	drawCanvas();
	//cpCanvas.addEventListener("click", mdown);
	cpCanvas.onclick=getXY;
	cpCanvas.onmouseup=mup;
    cpCanvas.onmousedown=mdown;

    cpImg.onclick=getXY;
	cpImg.onmouseup=mup;
    cpImg.onmousedown=mdown;

    this.dc=function(){
    	drawCanvas();
    }
    this.setScale=function(sc,si,mark){
    	scale=sc;
    	scaleSize=si;
    	marker=mark;
    	//marker.onclick=getXY;
		marker.onmousedown=onMouseDownArrow;
    	marker.onmouseup=onMouseUpArrow;
    	scale.onmouseup=onMouseUpArrow;
    	scale.onclick=onMouseMoveArrow;
    	scaleCenter();
    	createLeanerGradient(scale,"#000000");
	    triggerColorChange("#000000");
    }
    this.initScale=function(){
    	createLeanerGradient(scale,"#000000");
	    triggerColorChange("#000000");
    }
    function triggerColorChange(cl){
    	event1.initCustomEvent('colorChange', true, true,cl);
    	document.dispatchEvent(event1);
    }
    function drawCanvas(){
    	cpCanvas.getContext('2d').drawImage(cpImg, 0, 0, cpWidth, cpHeight);
    }
    function mdown(){
		cpCanvas.addEventListener("mousemove", getXY);
	}
	function mup(){
		cpCanvas.removeEventListener("mousemove", getXY);
	}
	function scaleCenter(){
		pt=scaleSize/2-10;
		marker.style.marginLeft=(pt)+"px";
	}
	function createLeanerGradient(c,cl){
		
		var ctx=c.getContext("2d");

		var grd=ctx.createLinearGradient(0,0,scaleSize,0);
		grd.addColorStop(0,"white");
		grd.addColorStop(0.5,cl);
		grd.addColorStop(1,"black");

		ctx.fillStyle=grd;
		ctx.fillRect(0,0,scaleSize+70,150);
	}
	function getXY(event){
	    rec=canvas.getBoundingClientRect();
	    px=event.offsetX;
	    py=event.offsetY;
	    cl=getPixelColorHex(canvas,px,py); //get color of pixcel from canvas using x,y
	    //console.log(cl);
	    //setCurrentColor(cl);
	    window.scaleColor=cl;
	   
	    scaleCenter();
	    console.log(cl);
	    createLeanerGradient(scale,cl);
	    triggerColorChange(cl);
	    //setPaletteScale(cl);
	    //	scaleFromPoint();

	}
	function getPixelColorHex(canvas,x,y){
	    con=canvas.getContext('2d');
	    col=con.getImageData(x, y, 1,1).data;
	    //return col;
	    return rgbToHex(col[0],col[1],col[2]);
	}

	function onHexChange(){
	    setCurrentColor(hexNow.value);
	    console.log("cng");
	}
	//color palette functions.-------------------------------------------------------------
	//Color palette works on canvas. image is loaded into canvas and then we perform different function on canvas.

	function onMouseDownArrow(){
	    document.addEventListener("mousemove", onMouseMoveArrow);
	}
	function onMouseUpArrow(){
	    document.removeEventListener("mousemove", onMouseMoveArrow);
	}
	function scaleClick(event){
	    point=((event.offsetX));
	    console.log("offsetx "+point);
	}
	function onMouseMoveArrow(event){
	    window.ev=event;
	    if(event.type="click"){
		    point=((event.layerX-10));
		    console.log("click even");
		    if(point>=-10 && point<=scaleSize-10){
		        marker.style.marginLeft=(point)+"px";
		        scalePos=point;
		    }	    	
	    }
	    else{
		    point=((event.layerX))-20;

		    if(point>=-10 && point<=scaleSize-10){
		        marker.style.marginLeft=(point)+"px";
		        scalePos=point;
		    }
		}
	    cl=getPixelColorHex(scale,point+20,10);
	    console.log("of "+point);
	    triggerColorChange(cl);
	}
	function onMouseMoveCanvas(event){
	    getXY(event);
	}
	function rgbToHex(r, g, b) {
    	return "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
	}
}





