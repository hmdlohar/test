<div id=main_div>
<button onclick=doThis()>Do this</button>
</div>

<script>
mainDiv=document.getElementById("main_div");
function doThis(){
inputs0=prompt("enter string");
isnputs0="-hmd-Abhishek Patel-hmd-Vishal S Shinde-hmd-Kuwar Ajay Singh Rathore-hmd-Bright Sunny-hmd-Loveraj Raj-hmd-Himanshu Sharma-hmd-I'm not sure-hmd--hmd-Himanshu Sharma-hmd-Paresh Dharodia-hmd-Santosh Mandal-hmd-Rockline Venkatesh-hmd-Deejay Gaurav Singh-hmd-Shaynam Ladakhi-hmd-I'm not sure-hmd--hmd-Suresh Nair-hmd-Krishan Kumar Sharma-hmd-Sathish Prabhu-hmd-Arjun Kolishetty-hmd-Himanshu Sharma-hmd-Ramji Gulati-hmd-I'm not sure-hmd--hmd-Comedian Riyaz Ahmed-hmd-Alokk Nath Pathak-hmd-Ramji Gulati-hmd-Auztynn Auzzyy-hmd-Abhishek Patel-hmd-Sadh Orhan-hmd-I'm not sure-hmd--hmd-Abhinav Gupta-hmd-Shaynam Ladakhi-hmd-Comedian Riyaz Ahmed-hmd-Dev Bhatiya-hmd-Gaurav Singh-hmd-Himanshu Sharma-hmd-I'm not sure-hmd--hmd-LLoyd Paul-hmd-Amit Tiwari-hmd-Alokk Nath Pathak-hmd-Shaynam Ladakhi-hmd-Vishal S Shinde-hmd-Krishan Kumar Sharma-hmd-I'm not sure-hmd--hmd-Rajveer Dutta-hmd-Tiago Barbosa-hmd-Sanjeev Rai-hmd-Gaurav Gupta-hmd-Bright Sunny-hmd-Abhinav Gupta-hmd-I'm not sure-hmd-";
inputs1=inputs0.split("-hmd-");for(x=0;x<inputs1.length;x++){el=document.createElement("a");el.className="clicknow";el.href="https://mbasic.facebook.com/search/?search=people&query="+inputs1[x];el.target="new"+x;mainDiv.appendChild(el);el.innerHTML=inputs1[x]+"<br>";}target(); }


function target(){
	inputs = document.getElementsByClassName('clicknow'); for(var i=0; i<inputs.length; i++) { inputs[i].click()};
}
</script>
