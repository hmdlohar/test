<?php
include '../db.php';
$sql = "CREATE TABLE from_r( ".
		"id INT NOT NULL AUTO_INCREMENT, ".
		"fname TEXT NOT NULL, ".
		"husband_name TEXT NOT NULL, ".
		"father_name TEXT NOT NULL, ".
		"address TEXT NOT NULL, ".
		"city TEXT NOT NULL, ".
		"village TEXT NOT NULL, ".
		"birth_date TEXT NOT NULL, ".
		"age TEXT NOT NULL, ".
		"birth_place TEXT NOT NULL, ".
		"blood_group TEXT NOT NULL, ".
		"mobile_no TEXT NOT NULL, ".
		"grand_father TEXT NOT NULL, ".
		"gender TEXT NOT NULL, ".
		"metrial_status TEXT NOT NULL, ".
		"occ TEXT NOT NULL, ".
		"occ_address TEXT NOT NULL, ".
		"occ_type TEXT NOT NULL, ".
		"lname TEXT NOT NULL, ".
		"PRIMARY KEY ( id )); ";
mysql_select_db( $dbname );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>
