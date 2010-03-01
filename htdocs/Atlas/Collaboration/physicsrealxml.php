<?php 
ob_start();
$xml_physics = file_get_contents('https://atlas.web.cern.ch/Atlas/Collaboration/xmls/physics.xml');
 
// Use cURL to get the RSS feed into a PHP string variable.
$ch_physics = curl_init();
curl_setopt($ch_physics, CURLOPT_URL, 'https://atlas.web.cern.ch/Atlas/Collaboration/xmls/physics.xml');
curl_setopt($ch_physics, CURLOPT_HEADER, false);
curl_setopt($ch_physics, CURLOPT_RETURNTRANSFER, true);
$xml_physics = curl_exec($ch_physics);
curl_close($ch_physics);
if(strstr($xml_physics,"<item>"))
{
// Include the handy XML data extraction functions.
$channel_title_physics = value_in('title', $xml_physics);

$channel_link_physics = value_in('link', $xml_physics);

// Create an array of item elements from the XML feed.
$news_items_physics = element_set('item', $xml_physics);

foreach($news_items_physics as $item_physics) {
    $title_physics = value_in('title', $item_physics);
    $url_physics = value_in('link', $item_physics);
	$pubDate_physics = value_in('pubDate', $item_physics);
	$description_physics = value_in('description', $item_physics);
    $item_array_physics[] = array(
            'title' => $title_physics,
            'url' => $url_physics,
			'pubDate' => $pubDate_physics,
			'description' => $description_physics
           
    );
}

// Include the handy XML data extraction functions.


// Create an array of item elements from the XML feed.


if (sizeof($item_array_physics) > 0) {
$html_physics="";

    $count = 0;
    foreach ($item_array_physics as $item_physics) {
	$pattern = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";

	$replacement = "\${1},\${2} \${3} \${4}";
	$datetime_physics=preg_replace($pattern, $replacement, make_safe($item_physics['pubDate']));
	/*$datetime_physics=ereg_replace("T", " at ", make_safe($item_physics['pubDate']));
	$datetime_physics=ereg_replace("Z", " ", $datetime_physics);*/
	$patterndate = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";
	$replacementdate = "\${2} \${4} \${3}";
	$date=preg_replace($patterndate, $replacementdate, make_safe($item_physics['pubDate']));
	$currentdate=date('d');
	$currentmonth=date('m');
	$currentyear=date('Y');
	$a=explode(" ",$date);
	$a[2]=getmonth($a[2]);
	$curdate=$currentyear."-".$currentmonth."-".$currentdate;
	$datadate=$a[1]."-".$a[2]."-".$a[0];
	$physicsdescription=truncate($item_physics['description'],'200','');
	if($count == 3)
	{
			if(strtotime($datadate) <= strtotime($curdate))
				{
	 $html_physics.= '<h6 class="last-child"><a href="'.make_safe($item_physics['url']).'" class="icon">'.make_safe($item_physics['title']).'<br/><span class="dateNews">'.
                $datetime_physics.'</span><br/></a>'.html_entity_decode($physicsdescription).'<a href="'.make_safe($item_physics['url']).'"> >>></a></h6>';
				}
	 
	}
       
	   else
	   {
	   			if(strtotime($datadate) <= strtotime($curdate))
				{
	    $html_physics.= '<h6><a href="'.make_safe($item_physics['url']).'" class="icon">'.make_safe($item_physics['title']).'<br/><span class="dateNews">'.
                $datetime_physics.'</span><br/></a>'.html_entity_decode($physicsdescription).'<a href="'.make_safe($item_physics['url']).'"> >>></a></h6>';
				}
	   }
       
       
        // Limit the output to 3 news items.
        if (++$count == 5) {
            break;
        }
    }
   
    echo $html_physics;
	if($html_physics=="")
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