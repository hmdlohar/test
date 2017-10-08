<?php 

function get_enrol($enrol){
$cSession = curl_init();
$post_data = "EnrNo={$enrol}&program=MCA&Submit=submit";
//step2
curl_setopt($cSession,CURLOPT_URL,"https://mbasic.facebook.com/");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
//curl_setopt ($cSession, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($cSession,CURLOPT_HEADER, false); 
curl_setopt($cSession,CURLOPT_HTTPHEADER, array('__test=f6a029a445268d37d58ea0c63eae7b73; wp-settings-1=mfold%3Do%26libraryContent%3Dbrowse%26editor%3Dtinymce%26imgsize%3Dfull%26editor_expand%3Don%26post_dfw%3Doff%26hidetb%3D1; wp-settings-time-1=1454156580')); 
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5

return $result;
}
echo get_enrol("adfs");



?>