<table>
<?php
include "../db.php";
	mysql_select_db($dbname);
	$retval=mysql_query("select * from from_r",$conn);
	while($row=mysql_fetch_array($retval)){
	$lname=$row['lname'];
	$husband_name=$row['husband_name'];
	$fname=$row['fname'];
	$father_name=$row['father_name'];
	$grand_father=$row['grand_father'];
	$address=$row['address'];
	$village=$row['village'];
	$city=$row['city'];
	$birth_date=$row['birth_date'];
	$birth_place=$row['birth_place'];
	$blood_group=$row['blood_group'];
	$gender=$row['gender'];
	$metrial_status=$row['metrial_status'];
	$occ=$row['occ'];
	$occ_address=$row['occ_address'];
	$occ_type=$row['occ_type'];
	$mobile_no=$row['mobile_no'];
	$education=$row['education'];
	$age=$row['age'];	
	echo "<tr><td>{$lname}</td><td>{$fname}</td>
	<td>{$husband_name}</td>
	<td>{$father_name}</td>
	<td>{$grand_father}</td>
	<td> </td>
	<td> </td>
	<td>{$gender}</td>
	<td>{$metrial_status}</td>
	<td>{$village}</td>
	<td>{$birth_date}</td>
	<td>{$birth_place}</td>
	<td>{$age}</td>
	<td></td>
	<td></td>
	<td>{$education}</td>
	<td>{$occ}</td>
	<td>{$occ_address}</td>
	<td>{$occ_type}</td>
	<td></td><td></td><td></td>
	<td>{$blood_group}</td>
	<td>{$address}</td>
	<td>{$city}</td>
	<td>GUJARAT</td>
	<td>INDIA</td>
	<td>{$mobile_no}</td>
	</tr>";
	}

?>

</table>