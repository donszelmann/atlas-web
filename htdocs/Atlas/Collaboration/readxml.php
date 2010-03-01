<?php
echo "This is xml added by client for General - extra code in url link";
echo "<br/>";
echo $xml_general = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20General%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');
?>
<?php
echo "<br/>";

echo "trigger";
echo $xml_general = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Trigger%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');

echo "<br/>";
echo "This is xml as client add some stuff after the link, he provided and i add that link after each link of xml feed he provided."; 
 
 echo "<br/>";
echo $xml_general = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Data%20Preparation%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');

 echo "<br/>";
echo $xml_general = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Computing%20%26%20Software%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');


 echo "<br/>";
echo $xml_general = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Physics%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');


 echo "<br/>";
echo $xml_general = file_get_contents('http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Operation%20News&p=925__b%3A%24TODAY%24-%3E2200-01-01');
?>