<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Blitz HTML Parser & Analyzer</title>
<style>
#container{ magin:0 auto; width:98%; }
li{ padding:5px 0; border-bottom:1px dotted #ddd;}
i{ color:#666; }
.block{ padding:10px; border:1px dotted #ddd;margin:5px; }
.w48{ width:46%;}
.fleft{float:left; }
.clear{clear:both;}
</style>
</head>
<body>
<?php


include_once('blitz.class.php');


$targetUrl = "http://atlas.web.cern.ch/Atlas/Collaboration/event2.html";
//$targetUrl = "test.html";

$data = file_get_contents( $targetUrl );

$startTime = microtime(true);

$blitz = new Blitz();
$blitz->LoadHTML($data);
$result =  $blitz->Analyze();

$endTime = microtime(true);
$totalTime = (float)$endTime - (float)$startTime;


foreach( $result['texts'] as $text ){
	echo "<a href='".$text['href']."'>".$text['text']."</a><br>";
	
	/*
	echo '<i>',$text['href'],'</i><br />';
	if( $text['text'] != '' )echo 'text: ',$text['text'],'<br />';
	if( $text['title'] != '' ) echo 'title: ',$text['title'],'<br />';
	*/	
}
?>
</body>
</html>