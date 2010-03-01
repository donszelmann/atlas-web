<?php 
/*
// Just for test including these page - To run the page seperately for TEST // ADDED By Rudra - Jan 20 2010
ob_start();
include_once("includes/applicationtop.php");
include_once("includes/header.php");
*/
$xml_general = file_get_contents('https://atlas.web.cern.ch/Atlas/Collaboration/xmls/general.xml');
 
// Use cURL to get the RSS feed into a PHP string variable.
$ch_general = curl_init();
curl_setopt($ch_general, CURLOPT_URL, 'https://atlas.web.cern.ch/Atlas/Collaboration/xmls/general.xml');
curl_setopt($ch_general, CURLOPT_HEADER, false);
curl_setopt($ch_general, CURLOPT_RETURNTRANSFER, true);
$xml = curl_exec($ch_general);
curl_close($ch_general);
if(strstr($xml_general,"<item>"))
{
// Include the handy XML data extraction functions.
$channel_title_general = value_in('title', $xml_general);

$channel_link_general = value_in('link', $xml_general);

// Create an array of item elements from the XML feed.
$news_items_general = element_set('item', $xml_general);

foreach($news_items_general as $item_general) {
    $title_general = value_in('title', $item_general);
    $url_general = value_in('link', $item_general);
	 $pubDate_general = value_in('pubDate', $item_general);
	 $description_general = value_in('description', $item_general);
	
    $item_array_general[] = array(
            'title' => $title_general,
            'url' => $url_general,
			'pubDate' => $pubDate_general,
			'description' => $description_general
           
    );
	
}

if (sizeof($item_array_general) > 0) {
$html_general="";

    $count = 0;
    foreach ($item_array_general as $item_general) {
		//$datetime=ereg_replace("GMT", " ", make_safe($item_general['pubDate']));
		$pattern = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";

		$replacement = "\${1},\${2} \${3} \${4}";
		$datetime=preg_replace($pattern, $replacement, make_safe($item_general['pubDate']));
		
		$patterndate = "/(\w+), (\d+) (\w+) (\d+) (\d+):(\d+):(\d+) (\w+)/i";

		$replacementdate = "\${2} \${4} \${3}";
		$date=preg_replace($patterndate, $replacementdate, make_safe($item_general['pubDate']));
		$currentdate=date('d');
		$currentmonth=date('m');
		$currentyear=date('Y');
		$a=explode(" ",$date);
		$a[2]=getmonth($a[2]);
		$curdate=$currentyear."-".$currentmonth."-".$currentdate;
		$datadate=$a[1]."-".$a[2]."-".$a[0];
		
		if(strtotime($datadate) <= strtotime($curdate)){
		//$datetime=ereg_replace("Z", " ", $datetime);
               $html_general .= '<li><a href="'.make_safe($item_general['url']).'" class="icon">'.make_safe($item_general['title']).'<br/><span class="dateNews">'.
                $datetime.'</span></a>'.truncate(html_entity_decode($item_general['description']),200,' ').'<a href="'.make_safe($item_general['url']).'"> >>></a></li>';
				
	 	}
		else
		{
		$scode="<p style='padding:1px 0px 1px 0px; font-size:13px;color:#4D4D4D;font-weight:bold; width:294px;'> No active news</p>";
		}
        // Limit the output to 3 news items.
        if (++$count == 5) {
            break;
        }
    }
   
    echo $html_general;
	if($html_general=="")
	{
	echo $scode;
	}
}
}
else
{
echo "<p style='padding:1px 0px 1px 0px; font-size:13px;color:#4D4D4D;font-weight:bold; width:294px;'> No active news</p>";

}
function truncate ($str, $length=10, $trailing='...')
{
/*
** $str -String to truncate
** $length - length to truncate
** $trailing - the trailing character, default: "..."
*/
	  // take off chars for the trailing
	  $length-=mb_strlen($trailing);
	  if (mb_strlen($str)> $length)
	  {
		 // string exceeded length, truncate and add trailing dots
		 return mb_substr($str,0,$length).$trailing;
	  }
	  else
	  {
		 // string was already short enough, return the string
		 $res = $str;
	  }
	  return $res;
}
function getmonth($mn){

            switch($mn){

                        case "Jan":

                                    $month = "01";

                                    break;

                        case "Feb":

                                    $month = "02";

                                    break;

                        case "Mar":

                                    $month = "03";

                                    break;

                        case "Apr":

                                    $month = "04";

                                    break;

                        case "May":

                                    $month = "05";

                                    break;

                        case "Jun":

                                    $month = "06";

                                    break;

                        case "Jul":

                                    $month = "07";

                                    break;

                        case "Aug":

                                    $month = "08";

                                    break;

                        case "Sep":

                                    $month = "09";

                                    break;

                        case "Oct":

                                    $month = "10";

                                    break;

                        case "Nov":

                                    $month = "11";

                                    break;

                        case "Dec":

                                    $month = "12";

                                    break;

            }

            return $month;

}

?>
<style>
.dateNews{
	font-size:10px;
	text-decoration:none
}
</style>
