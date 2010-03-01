<?php 
ob_start();

 $xml_computer = file_get_contents('https://atlas.web.cern.ch/Atlas/Collaboration/xmls/computing.xml');
 
// Use cURL to get the RSS feed into a PHP string variable.
$ch_computer = curl_init();
curl_setopt($ch_computer, CURLOPT_URL, 'https://atlas.web.cern.ch/Atlas/Collaboration/xmls/computing.xml');
curl_setopt($ch_computer, CURLOPT_HEADER, false);
curl_setopt($ch_computer, CURLOPT_RETURNTRANSFER, true);
$xml_computer = curl_exec($ch_computer);
curl_close($ch_computer);
if(strstr($xml_computer,"<item>"))
{
// Include the handy XML data extraction functions.
$channel_title_computer = value_in('title', $xml_computer);

$channel_link_computer = value_in('link', $xml);

// Create an array of item elements from the XML feed.
$news_items_computer = element_set('item', $xml_computer);

foreach($news_items_computer as $item_computer) {
    $title_computer = value_in('title', $item_computer);
    $url_computer = value_in('link', $item_computer);
	$pubDate_computer = value_in('pubDate', $item_computer);
	$description_computer = value_in('description', $item_computer);
    $item_array_computer[] = array(
            'title' => $title_computer,
            'url' => $url_computer,
			'pubDate' => $pubDate_computer,
			'description' => $description_computer
           
    );
}
// Include the handy XML data extraction functions.


// Create an array of item elements from the XML feed.


if (sizeof($item_array_computer) > 0) {
$html_computer="";

    $count = 0;
    foreach ($item_array_computer as $item_computer) {
	$pattern = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";

	$replacement = "\${1},\${2} \${3} \${4}";
	$datetime_computer=preg_replace($pattern, $replacement, make_safe($item_computer['pubDate']));
	/*$datetime_computer=ereg_replace("T", " at ", make_safe($item_computer['pubDate']));
	$datetime_computer=ereg_replace("Z", " ", $datetime_computer);*/
	$patterndate = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";
	$replacementdate = "\${2} \${4} \${3}";
	$date=preg_replace($patterndate, $replacementdate, make_safe($item_computer['pubDate']));
	$currentdate=date('d');
	$currentmonth=date('m');
	$currentyear=date('Y');
	$a=explode(" ",$date);
	$a[2]=getmonth($a[2]);
	$curdate=$currentyear."-".$currentmonth."-".$currentdate;
	$datadate=$a[1]."-".$a[2]."-".$a[0];
	$computerdescription=truncate($item_computer['description'],'200','');
	if($count == 2)
	{
		if(strtotime($datadate) <= strtotime($curdate))
		{
	 	$html_computer.= '<h6 class="last-child"><a href="'.make_safe($item_computer['url']).'" class="icon">'.make_safe($item_computer['title']).'<br/><span class="dateNews">'.
               $datetime_computer.'</span><br/></a>'.html_entity_decode($computerdescription).'<a href="'.make_safe($item_computer['url']).'"> >>></a></h6>';
	 	}
	}
       
	   else
	   {
	   if(strtotime($datadate) <= strtotime($curdate))
		{
	    $html_computer.= '<h6><a href="'.make_safe($item_computer['url']).'" class="icon">'.make_safe($item_computer['title']).'<br/><span class="dateNews">'.
                $datetime_computer.'</span><br/></a>'.html_entity_decode($computerdescription).'<a href="'.make_safe($item_computer['url']).'" > >>></a></h6>';
		}		
	   }
       
       
        // Limit the output to 3 news items.
        if (++$count == 5) {
            break;
        }
    }
   
    echo $html_computer;
	if($html_computer=="")
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