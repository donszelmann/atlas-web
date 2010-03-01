<?php 
ob_start();
 $xml_data = file_get_contents('https://atlas.web.cern.ch/Atlas/Collaboration/xmls/data.xml');
 
// Use cURL to get the RSS feed into a PHP string variable.
$ch_data = curl_init();
curl_setopt($ch_data, CURLOPT_URL, 'https://atlas.web.cern.ch/Atlas/Collaboration/xmls/data.xml');
curl_setopt($ch_data, CURLOPT_HEADER, false);
curl_setopt($ch_data, CURLOPT_RETURNTRANSFER, true);
$xml_data = curl_exec($ch_data);
curl_close($ch_data);

// Include the handy XML data extraction functions.
$channel_title_data = value_in('title', $xml_data);

$channel_link_data = value_in('link', $xml_data);

// Create an array of item elements from the XML feed.
$news_items_data = element_set('item', $xml_data);
if(strstr($xml_data,"<item>"))
{
foreach($news_items_data as $item_data) {
    $title_data = value_in('title', $item_data);
    $url_data = value_in('link', $item_data);
	$pubDate_data = value_in('pubDate', $item_data);
	$description_data = value_in('description', $item_data);
    $item_array_data[] = array(
            'title' => $title_data,
            'url' => $url_data,
			'pubDate' => $pubDate_data,
			'description' => $description_data
           
    );
}

// Include the handy XML data extraction functions.


// Create an array of item elements from the XML feed.


if (sizeof($item_array_data) > 0) {
$html_data="";

    $count = 0;
    foreach ($item_array_data as $item_data) {
	$pattern = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";

	$replacement = "\${1},\${2} \${3} \${4}";
	$datetime_data=preg_replace($pattern, $replacement, make_safe($item_data['pubDate']));
	/*$datetime=explode(",",make_safe($item_data['pubDate']));
	$datetime_data=ereg_replace("GMT", "GM", $datetime[1]);*/
	$description=truncate($item_data['description'],'200','');
	$patterndate = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";
	$replacementdate = "\${2} \${4} \${3}";
	$date=preg_replace($patterndate, $replacementdate, make_safe($item_data['pubDate']));
	$currentdate=date('d');
	$currentmonth=date('m');
	$currentyear=date('Y');
	$a=explode(" ",$date);
	$a[2]=getmonth($a[2]);
	$curdate=$currentyear."-".$currentmonth."-".$currentdate;
	$datadate=$a[1]."-".$a[2]."-".$a[0];
	
	if($count == 1)
	{
			if(strtotime($datadate) <= strtotime($curdate))
		{
				 $html_data.= '<h6 class="last-child"><a href="'.make_safe($item_data['url']).'" class="icon">'.make_safe($item_data['title']).'<br/><span class="dateNews">'.
                $datetime_data.'</span><br/></a>'.html_entity_decode($description).'<a href="'.make_safe($item_data['url']).'"> >>></a></h6>';
		}
	}
       
	   else
	   {
	   			if(strtotime($datadate) <= strtotime($curdate))
				{
	   			 $html_data.= '<h6 ><a href="'.make_safe($item_data['url']).'" class="icon">'.make_safe($item_data['title']).'<br/><span class="dateNews">'.
                $datetime_data.'</span><br/></a>'.html_entity_decode($description).'<a href="'.make_safe($item_data['url']).'"> >>></a></h6>';
	  			}
	   }
       
       
        // Limit the output to 3 news items.
        if (++$count == 5) {
            break;
        }
    }
   
    echo $html_data;
	if($html_general=="")
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