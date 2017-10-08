<?php 
	$dateNow=date("Y-m-d H:i:s");
	$date1=date_create($dateNow);
      $datePast="2017-09-10 05:48:54";
      $d1=explode(" ",$datePast);
      $d11=explode("-",$d1[0]);
      $d12=explode(":",$d1[1]);
      //$d=mktime($d12[0],$d12[1],$d12[2],$d11[1],$d11[2],$d11[0]);
      $d=strtotime($datePast);
      $dp=date("Y-m-d H:i:s", $d);
      $date2=date_create($dp);
      
      
      print_r($diff=date_diff($date1,$date2));
	echo $diff->h;
?>
<button onclick='alert(document.cookie);'>cook</button>
<script>

</script>


