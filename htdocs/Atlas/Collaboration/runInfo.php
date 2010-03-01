<?php
 header("Content-Type: application/xhtml+xml; charset=utf-8");
$rawFeedUrl='http://atlas-service-runinformation.web.cern.ch/atlas-service-runinformation/rawfeed.xml';
$pt1PageUrl='https://atlasop.cern.ch/atlas-point1/wmi/current/Run%20Status_wmi/';
$xslPath='xsl/rawfeed2table.xsl';

//get the feed xml containing most of the information: this is raw xml from the database web service
function getRawFeedXml($url){
  $ch=curl_init();
   $header[]="Accept: text/xml";
   curl_setopt($ch,CURLOPT_URL,$url);
   curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); //returns the result in a string; otherwise the output is returned directly by curl_exec
   $result=curl_exec($ch);
   curl_close($ch);
   return $result;
}
function parseFeedString($feedString){
  $firstRowPosition=strpos($feedString, '<tr>');
  $secondRowStartPosition=strpos($feedString, '<tr>', $firstRowPosition+3);
  $secondRowEndPosition=strpos($feedString, '</tr>', $secondRowStartPosition);
  $secondRowLength=$secondRowEndPosition-$secondRowStartPosition + 5;
  $extractedString=substr($feedString, $secondRowStartPosition, $secondRowLength);
  return $extractedString;
}

function makeValidXml($htmlString){
  $nocolor=str_replace(' bgcolor="#ffffff" ALIGN="center">','>',$htmlString);
  $lowercaseLink0=str_replace('<A HREF=','<a href=',$nocolor);
  $lowercaseLink1=str_replace('</A>','</a>',$lowercaseLink0);
  //should use regular expression replace here
  $splitString=explode('FONT', $lowercaseLink1);
  $fontContentsArray=explode('">',$splitString[1]);
  $cleanContents0=str_replace('<','',$fontContentsArray[1]);
  $cleanContents1=str_replace('/','',$cleanContents0);
  $reconstructedString=substr($splitString[0],0,-1).$cleanContents1.substr($splitString[2],1);
  return $reconstructedString;
}
/***************
 *   MAIN
 ***************/
  $pageString=getRawFeedXml($pt1PageUrl);      //get page as a string
  echo makeValidXml(parseFeedString($pageString));
?>
