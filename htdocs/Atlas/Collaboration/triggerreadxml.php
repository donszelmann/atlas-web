<?php 
ob_start();
$xml_trigger = file_get_contents('https://atlas.web.cern.ch/Atlas/Collaboration/xmls/trigger.xml');
 
// Use cURL to get the RSS feed into a PHP string variable.
$ch_trigger = curl_init();
curl_setopt($ch_trigger, CURLOPT_URL, 'https://atlas.web.cern.ch/Atlas/Collaboration/xmls/trigger.xml');
curl_setopt($ch_trigger, CURLOPT_HEADER, false);
curl_setopt($ch_trigger, CURLOPT_RETURNTRANSFER, true);
$xml_trigger = curl_exec($ch_trigger);
curl_close($ch_trigger);
if(strstr($xml_trigger,"<item>"))
{
// Include the handy XML data extraction functions.
$channel_title_trigger = value_in('title', $xml_trigger);

$channel_link_trigger = value_in('link', $xml_trigger);

// Create an array of item elements from the XML feed.
$news_items_trigger = element_set('item', $xml_trigger);

foreach($news_items_trigger as $item_trigger) {
    $title_trigger = value_in('title', $item_trigger);
    $url_trigger = value_in('link', $item_trigger);
	$pubDate_trigger = value_in('pubDate', $item_trigger);
	$description_trigger = value_in('description', $item_trigger);
    $item_array_trigger[] = array(
            'title' => $title_trigger,
            'url' => $url_trigger,
			'pubDate' => $pubDate_trigger,
			'description' => $description_trigger
           
    );
}


// Include the handy XML data extraction functions.


// Create an array of item elements from the XML feed.


if (sizeof($item_array_trigger) > 0) {
$html_trigger="";

    $count = 0;
    foreach ($item_array_trigger as $item_trigger) {
	$pattern = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";

	$replacement = "\${1},\${2} \${3} \${4}";
	$datetime_trigger=preg_replace($pattern, $replacement, make_safe($item_trigger['pubDate']));
	/*$datetime_trigger=ereg_replace("T", " at ", make_safe($item_trigger['pubDate']));
	$datetime_trigger=ereg_replace("Z", " ", $datetime_trigger);*/
	$patterndate = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";
	$replacementdate = "\${2} \${4} \${3}";
	$date=preg_replace($patterndate, $replacementdate, make_safe($item_detector['pubDate']));
	$currentdate=date('d');
	$currentmonth=date('m');
	$currentyear=date('Y');
	$a=explode(" ",$date);
	$a[2]=getmonth($a[2]);
	$curdate=$currentyear."-".$currentmonth."-".$currentdate;
	$datadate=$a[1]."-".$a[2]."-".$a[0];
	$triggerdescription=truncate($item_trigger['description'],'200','');
	if($count == 1)
	{
			if(strtotime($datadate) <= strtotime($curdate))
			
				{
	 $html_trigger.= '<h6 class="last-child"><a href="'.make_safe($item_trigger['url']).'" class="icon">'.make_safe($item_trigger['title']).'<br/><span class="dateNews">'.
                $datetime_trigger.'</span><br/></a>'.html_entity_decode($triggerdescription).'<a href="'.make_safe($item_trigger['url']).'"> >>></a><a href="'.make_safe($item_computer['url']).'" class="icon"> >>></a></h6>';
				}
	}
       
	   else
	   {		
	  			if(strtotime($datadate) <= strtotime($curdate))
				{
	    $html_trigger .= '<h6><a href="'.make_safe($item_trigger['url']).'" class="icon">'.make_safe($item_trigger['title']).'<br/><span class="dateNews">'.
                $datetime_trigger.'</span><br/></a>'.html_entity_decode($triggerdescription).'<a href="'.make_safe($item_trigger['url']).'"> >>></a></h6>';
				}
	   }
       
       
        // Limit the output to 5 news items.
        if (++$count == 5) {
            break;
        }
    }
   
    echo $html_trigger;
	if($html_trigger=="")
	{
	echo "<p style='padding:2px 0px 0px 10px; font-size:13px;color:#4D4D4D;font-weight:bold;'> No active news</p>";

	}
}
}
else
{
echo "<p style='padding:2px 0px 0px 10px; font-size:13px;color:#4D4D4D;font-weight:bold;'> No active news</p>";
}

  ?>