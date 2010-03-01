<?php 
/*
$filename ="https://atlas.web.cern.ch/Atlas/Collaboration/event.html"; 
$handle = fopen ($filename, "r"); 
echo $body =fread ($handle,filesize($filename)); 

fclose ($handle);
*/
echo $file = file_get_contents('https://atlas.web.cern.ch/Atlas/Collaboration/event.html');
?>