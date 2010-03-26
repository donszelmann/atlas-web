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
        <td>
  			<?php 
				$file = 'https://atlasop.cern.ch/atlas-point1/dcs/dcs/process.php?page=ATLAS';
				$contents = file_get_contents($file); 
				echo $contents;  					
			?>        
        </td>
      </tr>
      <tr>
        <td>
  			<?php 
				$file = 'https://atlasop.cern.ch/atlas-point1/wmi/current/Run%20Status_wmi/ATLAS.html';
				$contents = file_get_contents($file); 
				echo $contents;  					
			?>        
        </td>
      </tr>
    </table></td>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
  			<?php 
				$file = 'https://atlasop.cern.ch/atlas-point1/wmi/current/Data%20Quality%20Monitoring_wmi/ATLAS.html';
				$contents = file_get_contents($file); 
				echo $contents;  					
			?>        
        </td>
      </tr>
      <tr>
        <td><img src="https://atlasop.cern.ch/atlas-point1/dcs/data/snapshots/ATLAS.png" width="600" /></td>
      </tr>
      <tr>
        <td><img src="https://atlasop.cern.ch/atlas-point1/wmi/current/WTRP_wmi/pot_globalRates_0.png" width="600" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>