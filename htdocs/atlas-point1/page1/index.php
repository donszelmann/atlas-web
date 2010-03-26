<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top">
			<?php 
				$file = '../wmi/current/Run Status_wmi/ATLAS.html';
				if(file_exists($file)) {
					$fp = fopen($file, 'r'); 
					$contents = fread($fp, filesize($file)); 
					fclose($fp); 
					
					$pattern = '/Other active partitions can be seen here\.<\/a>.?<br.?\/>(.*)<\/tr>.?<tr><td align="center"><font size="5" color="#3c3cb7"><b>Busy Status/s';
					if(preg_match($pattern, $contents, $matches)) { 
						$text = $matches[1]; 
					} else {
						$text = "Error: Cannot parse '$file'";
					}
				} else {
					$text = "Error: Cannot find '$file'";
				}
				echo $text;  					
			?>
        </td>
      </tr>
      <tr>
        <td><img src="../dcs/data/snapshots/ATLAS.png" width="600" /></td>
      </tr>
      <tr>
        <td><img src="../wmi/current/WTRP_wmi/pot_globalRates_0.png" width="600" /></td>
      </tr>
    </table></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
  			<?php 
				$file = '../dcs/dcs/process.php?page=ATLAS';
				$contents = file_get_contents($file); 
				echo $contents;  					
			?>        
        </td>
      </tr>
      <tr>
        <td>
			<?php 
				$file = '../wmi/current/Data Quality Monitoring_wmi/ATLAS.html';
				if(file_exists($file)) {
					$fp = fopen($file, 'r'); 
					$contents = fread($fp, filesize($file)); 
							fclose($fp); 
						} else {
							$contents = "Error: Cannot find '$file'";
						}
				echo $contents;  					
			?>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>