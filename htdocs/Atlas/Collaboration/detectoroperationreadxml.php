<?php 
ob_start();

 $xml_detector = file_get_contents('https://atlas.web.cern.ch/Atlas/Collaboration/xmls/detector.xml');
 
// Use cURL to get the RSS feed into a PHP string variable.
$ch_detector = curl_init();
curl_setopt($ch_detector, CURLOPT_URL, 'https://atlas.web.cern.ch/Atlas/Collaboration/xmls/detector.xml');
curl_setopt($ch_detector, CURLOPT_HEADER, false);
curl_setopt($ch_detector, CURLOPT_RETURNTRANSFER, true);
$xml_detector = curl_exec($ch_detector);
curl_close($ch_detector);
if(strstr($xml_detector,"<item>"))
{
// Include the handy XML data extraction functions.
$channel_title_detector = value_in('title', $xml_detector);

$channel_link_detector = value_in('link', $xml_detector);

// Create an array of item elements from the XML feed.
$news_items_detector = element_set('item', $xml_detector);

foreach($news_items_detector as $item_detector) {
    $title_detector = value_in('title', $item_detector);
    $url_detector = value_in('link', $item_detector);
	$pubDate_detector = value_in('pubDate', $item_detector);
	$description_detector = value_in('description', $item_detector);
    $item_array_detector[] = array(
            'title' => $title_detector,
            'url' => $url_detector,
			'pubDate' => $pubDate_detector,
			'description' => $description_detector
           
    );
}
// Include the handy XML data extraction functions.


// Create an array of item elements from the XML feed.


if (sizeof($item_array_detector) > 0) {
$html_detector="";

    $count = 0;
    foreach ($item_array_detector as $item_detector) {
	$pattern = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";

	$replacement = "\${1},\${2} \${3} \${4}";
	$datetime_detector=preg_replace($pattern, $replacement, make_safe($item_detector['pubDate']));
	/*	$datetime_detector=ereg_replace("T", " at ", make_safe($item_detector['pubDate']));
	$datetime_detector=ereg_replace("Z", " ", $datetime_detector);*/
	$patterndate = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";
	$replacementdate = "\${2} \${4}";
	$date=preg_replace($patterndate, $replacementdate, make_safe($item_detector['pubDate']));
	$currentdate=date('d');
	$currentyear=date('Y');
	$a=explode(" ",$date);
	$detectordescription=truncate($item_detector['description'],'200','');
	if($a[0]<=$currentdate && $a[1]<=$currentyear)
		{
               $html_detector.= '<li><a href="'.make_safe($item_detector['url']).'" class="icon">'.make_safe($item_detector['title']).'<br/><span class="dateNews">'.
                $datetime_detector.'</span></a>'.html_entity_decode($detectordescription).'<a href="'.make_safe($item_detector['url']).'"> >>></a></li>';
	   }
	  
       
       
        // Limit the output to 3 news items.
        if (++$count == 5) {
            break;
        }
    }
   
    echo $html_detector;
	
	if($html_detector=="")
	{
	echo "<p style='padding:1px 0px 1px 0px; font-size:13px;color:#4D4D4D;font-weight:bold;'> No active news</p>";
	}
}

}
else
{
echo "<p style='padding:1px 0px 1px 0px; font-size:13px;color:#4D4D4D;font-weight:bold;'> No active news</p>";
}
  ?>