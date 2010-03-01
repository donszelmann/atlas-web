<?php
$filename ="https://atlas.web.cern.ch/Atlas/Collaboration/event2.html"; 
$handle = fopen ($filename, "r"); 
$body = fread ($handle, 10000); 
fclose ($handle);
$body=explode('<div style="margin: 0pt 0pt 0.3em; padding: 0pt; font-weight: bold;">',$body);
$b=explode('</div>',$body[0]);
echo $b[0];
?>