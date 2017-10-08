<?php
include "../db.php";
if(isset($_POST['in_form_r'])){
	$lname=$_POST['lname'];
	$husband_name=$_POST['husband_name'];
	$fname=$_POST['fname'];
	$father_name=$_POST['father_name'];
	$grand_father=$_POST['grand_father'];
	$address=$_POST['address'];
	$village=$_POST['village'];
	$city=$_POST['city'];
	$birth_date=$_POST['birth_date'];
	$birth_place=$_POST['birth_place'];
	$blood_group=$_POST['blood_group'];
	$gender=$_POST['gender'];
	$metrial_status=$_POST['metrial_status'];
	$occ=$_POST['occ'];
	$occ_address=$_POST['occ_address'];
	$occ_type=$_POST['occ_type'];
	$mobile_no=$_POST['mobile_no'];
	$education=$_POST['education'];
	$age=$_POST['age'];
	mysql_select_db($dbname);
	$retval= mysql_query("insert into from_r (lname,fname,husband_name,father_name,grand_father,address,village,city,birth_place,birth_date,blood_group,gender,metrial_status,occ,occ_type,occ_address,mobile_no,education,age) values ('$lname','$fname','$husband_name','$father_name','$grand_father','$address','$village','$city','$birth_place','$birth_date','$blood_group','$gender','$metrial_status','$occ','$occ_type','$occ_address','$mobile_no','$education','$age')",$conn);
	if(!$retval){echo mysql_error();}
	
	echo"this is phop";
}

?>
<form action="" method=POST onsubmit="return check_no()">
<table>
	<tr><td>gender:</td><td><select name=gender>
<option value=M>M</option>
<option value=F>F</option>
</select></td></tr>
<tr><td>metrial_status:</td><td>
<select name=metrial_status>
<option value=Merrid>Merrid</option>
<option value=Unmerrid>unmerrid</option>
</select>
</td></tr>
<tr><td>lname:</td><td><input type=text name=lname></td></tr>
<tr><td>fname:</td><td><input type=text name=fname></td></tr>
<tr><td>father_name:</td><td><input type=text name=father_name></td></tr>
<tr><td>husband_name:</td><td><input type=text name=husband_name></td></tr>
<tr><td>grand_father:</td><td><input type=text name=grand_father></td></tr>
<tr><td>village:</td><td><input type=text name=village></td></tr>
<tr><td>address:</td><td><input type=text name=address></td></tr>
<tr><td>city:</td><td><input type=text name=city></td></tr>
<tr><td>birth_date:</td><td><input type=text name=birth_date></td></tr>
<tr><td>age:</td><td><input type=text name=age></td></tr>
<tr><td>birth_place:</td><td><input type=text name=birth_place></td></tr>
<tr><td>blood_group:</td><td><input type=text name=blood_group></td></tr>
<tr><td>education:</td><td><input type=text name=education></td></tr>


<tr><td>occ:</td><td><input type=text name=occ></td></tr>
<tr><td>occ_address:</td><td><input type=text name=occ_address></td></tr>
<tr><td>occ_type:</td><td><input type=text name=occ_type></td></tr>
<tr><td>mobile_no:</td><td><input type=text name=mobile_no id=no></td></tr>
<tr><td><input type=submit name=in_form_r></td></tr>
</table>
</form>

<script>
function check_no(){
	no=document.getElementById('no');
	if(no.value==""||no.value==null){return false;
	alert("no not inserted");
	}else{return true;}
}
</script>