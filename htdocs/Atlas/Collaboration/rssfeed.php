<?php 

//General News
$generalnews = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20General%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');
$generalnews_myFile = "/afs/cern.ch/atlas/www/Collaboration/xmls/general.xml";
$fh = fopen($generalnews_myFile, 'w') or die("can't open file");
fwrite($fh, $generalnews);

//Detector 
$Detector  = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Operation%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');
$Detector_myFile = "/afs/cern.ch/atlas/www/Collaboration/xmls/detector.xml";
$fh = fopen($Detector_myFile, 'w') or die("can't open file");
fwrite($fh, $Detector);


//Trigger 
$Trigger  = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Trigger%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');
$Trigger_myFile = "/afs/cern.ch/atlas/www/Collaboration/xmls/trigger.xml";
$fh = fopen($Trigger_myFile, 'w') or die("can't open file");
fwrite($fh, $Trigger);

//Computing & Software
$Computing  = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Computing%20%26%20Software%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');
$Computing_myFile = "/afs/cern.ch/atlas/www/Collaboration/xmls/computing.xml";
$fh = fopen($Computing_myFile, 'w') or die("can't open file");
fwrite($fh, $Computing);

//Data Preparation

$Data  = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Data%20Preparation%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');
$Data_myFile = "/afs/cern.ch/atlas/www/Collaboration/xmls/data.xml";
$fh = fopen($Data_myFile, 'w') or die("can't open file");
fwrite($fh, $Data);


//Physics 

$Physics  = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Physics%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');
$Physics_myFile = "/afs/cern.ch/atlas/www/Collaboration/xmls/physics.xml";
$fh = fopen($Physics_myFile, 'w') or die("can't open file");
fwrite($fh, $Physics);

fclose($fh);

?>

