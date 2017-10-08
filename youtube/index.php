<head>
<link rel="stylesheet" href="style.css" />
<title>Download and save any video from Youtube,Dailymotion,Metacafe, more!</title>
<meta name="description" content="Download and save videos directly from Youtube, Google, Metacafe, Putfile and more. Simply copy and paste.">
<meta name="keywords" content="online,3gp,mp4,flv,avi,keepvid,keep,vid,siddhu,download,direct,help,rip,copy,save,video,stream,youtube,">
<meta name="robots" content="All,index,follow"><meta name="revisit-after" content="7 days">
</head>
<center>
by <a href="http://facebook.com/siddhusce" >Siddhu vydyabhushana</a>
<table>
<tr>
<td>
<form method="post">
<label style="color:#333333"><h3>3GP,FLV,MP4,AVI and more...(***No JAVA Plugins Required***)</h3></label>
<label style="color:#ff3377"><h1>Paste <b style="color:#eeeeee;background:#3399ff">YOUTUBE</b> link here to download:</h1></label>
<input type="text" name="url" value="" style="width:500px;height:30px" placeholder="Enter link here to download :http://www.youtube.com/watch?v=YeR7McJIltk">
<input type="submit" style="background:#3399ff;height:30px;color:white" value="Get Video Link">
</form>
</td>
</tr>
</table>
</center>
<hr color="#33bbee">
<?php
if(isset($_POST['url']))
{
  include('curl1.php');
  include('curl.php');
  include('youtube.php');
  $tube = new youtube();
  $links = $tube->get($_POST['url']);
  if($links) { ?>
	<center>
	<h2>Downloadable Links:</h2>
    <?php
	$url=$_POST['url'];
	$url=substr($url,31);
	$my_video_info = 'http://www.youtube.com/get_video_info?&video_id='. $url;
	$my_video_info = curlGet($my_video_info);
	$thumbnail_url = $title = $url_encoded_fmt_stream_map = $type = '';
	parse_str($my_video_info);
	echo '<h2 style="color:#3399ff">'.$title.'</h2>';
	echo '<p><img src="'. $thumbnail_url .'" border="0" hspace="2" vspace="2"></p>';
	$my_title = $title;
		 for($i=0;$i<count($links);$i++)
	   {
	   ?>
<!--<a href='<?php echo $links[$i]['url'];?>'>Download <b><a>-->
<?php echo strtoupper($links[$i]['ext']);?></b><?php echo $links[$i]['type'];?>:
<?php
echo  '<a href="download.php?mime=' . $links[$i]['type'] .'&title='. urlencode($my_title) .'&token=' . base64_encode($links[$i]['url']).'" >download</a>';
?><br/><br/>

		 <?php
	   }
    ?>

	</center>
    </pre>
  
  <?php } else {

      echo $tube->error;

  }

}

?>


