<script>
function testit(){
var q=18,h=12,a=57;var b="abcdefghijklmnopqrstuvwxyz";var j=[86,82,66,79,70,90,71,65,94,81,75,72,89,80,60,88,74,85,87,76];var w=[];for(var p=0;p<j.length;p++)w[j[p]]=p+1;var u=[];q+=15;h+=81;a+=39;for(var r=0;r<arguments.length;r++){var e=arguments[r].split(" ");for(var v=e.length-1;v>=0;v--){var y=null;var o=e[v];var z=null;var g=0;var l=o.length;var x;for(var c=0;c<l;c++){var d=o.charCodeAt(c);var n=w[d];if(n){y=(n-1)*h+o.charCodeAt(c+1)-q;x=c;c++;}else if(d==a){y=h*(j.length-q+o.charCodeAt(c+1))+o.charCodeAt(c+2)-q;x=c;c+=2;}else{continue;}if(z==null)z=[];if(x>g)z.push(o.substring(g,x));z.push(e[y+1]);g=c+1;}if(z!=null){if(g<l)z.push(o.substring(g));e[v]=z.join("");}}u.push(e[0]);}var s=u.join("");var k=[42,10,32,92,39,96].concat(j);var m=String.fromCharCode(46);for(var p=0;p<k.length;p++)s=s.split(m+b.charAt(p)).join(String.fromCharCode(k[p]));return s.split(m+"!").join(m);
}
</script>