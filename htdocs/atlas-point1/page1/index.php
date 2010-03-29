<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="20">
<title>ATLAS Overview</title>
<link rel="stylesheet" type="text/css" href="../css-new/style.css" />
<link rel="stylesheet" type="text/css" href="page1.css" />
<!--[if lt IE 8]>
    <script src="script-new/IE8.js" type="text/javascript"></script>
    <![endif]-->
<script type="text/javascript" src="../script-new/jquery.js"></script>
<script type="text/javascript" src="../script-new/collapDiv.js"></script>
<script type="text/javascript" src="../script-new/jquery-1.2.1.min.js"></script>
<script type="text/javascript" src="../script-new/menu.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="topRow">
        <div id="login" class="container">
            <div class="slogun">
                <p><a href="http://www.cern.ch">European Organization for Nuclear Research</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div id="header">
        <div id="logoWp" class="container">
            <h1><a href="http://atlas.web.cern.ch/Atlas/Collaboration/index.php">Atlas Experiment</a></h1>
            <ul class="topNav">
                <li><a href="http://atlas.web.cern.ch/Atlas/Collaboration/index.php" class="active">Collaboration</a></li>
                <li><em></em><a href="http://atlas.web.cern.ch/Atlas/Collaboration/atlas_live.php" >ATLAS Now</a></li>
                <li><em></em><a href="http://atlas.ch/">ATLAS Public</a></li>
                <li class="last-child"><em></em><a href="http://www.cern.ch">CERN&nbsp;</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>

    <div id="mainWp">
        <div id="content" class="container">
   
   			<table border="0" cellpadding="0" cellspacing="0">
   			<tr><td valign="top" rowspan="2">
   			
   			<table border="0" cellpadding="0" cellspacing="0">
   			<tr><td valign="top">
            <div class="lhcStatus">
   				<h3><div>LHC Status</div></h3>
       			<a href="http://vistar-capture.web.cern.ch/vistar-capture/lhc1.png">
					<img src="http://vistar-capture.web.cern.ch/vistar-capture/lhc1.png" width="100%" />
				</a>
    		</div>
    		
    		</td></tr>
    		<tr><td valign="top">
    		
            <div class="detectorControl">
   				<h3><div>Detector Status</div></h3>
      			<a href="https://atlasop.cern.ch/atlas-point1/dcs/status_pages.html">
					<img src="../dcs/data/snapshots/ATLAS.png" width="100%" />
				</a>
				<p style="position: relative; top: -472px; left: 5px; width: 240px; padding: 0px; background-color: #fff;">&nbsp;</p>
    		</div>

			</td></tr>
			</table>
			
			<td colspan="2" valign="top">
            <div class="runStatus">
                <h3><div>Run Status</div></h3>
                <div class="datapreInside">
                        <?php 
				$file = '../wmi/current/Run Status_wmi/ATLAS.html';
				if(file_exists($file)) {
					$fp = fopen($file, 'r'); 
					$contents = fread($fp, filesize($file)); 
					fclose($fp); 
					
					$pattern = '/Other active partitions can be seen here\.<\/a>.?<br.?\/>.?<table width="100%">.?<tr><td align="center">(.*)<\/td>.?<\/tr>.?<tr><td align="center"><font size="5" color="#3c3cb7"><b>Busy Status/s';
					if(preg_match($pattern, $contents, $matches)) { 
						$text = $matches[1]; 
					} else {
						$text = "Error: Cannot parse '$file'";
					}
					$text = preg_replace('/bgcolor="#004080"/s', 'class="runStatusHead"', $text);
					$text = preg_replace('/bgcolor="#dbeffb"/s', 'class="runStatusKey"', $text);
					$text = preg_replace('/bgcolor="#ffffff"/s', 'class="runStatusValue"', $text);
					$text = preg_replace('/color="#00ff00"/s', 'class="runStatusRunning"', $text);
				} else {
					$text = "Error: Cannot find '$file'";
				}
				echo $text;  					
			?>
                </div>
            </div>
            </td></tr>
			
			<tr>
			<td valign="top">
    		<div class="trigger">
   				<h3><div>Trigger Rates</div></h3>
   				<table border="0" cellpadding="0" cellspacing="0"><tr><td>       			
					<img src="../wmi/current/WTRP_wmi/pot_globalRates_0.png" width="100%" />
				</td></tr><tr><td>
					<img src="../wmi/current/WTRP_wmi/pot_StreamRates_0.png" width="100%" />
				</td></tr><tr><td>
					<img src="../wmi/current/WTRP_wmi/pot_StreamRates_1.png" width="100%" />
				</td></tr></table>
		    </div>
		    </td>
		    
		    <td valign="top">
		    <div class="event">
   				<h3><div>Event Display</div></h3>
   				<a href="https://atlas-live.cern.ch/event_files/Default/latest.png">
   				<table border="0" cellpadding="0" cellspacing="0"><tr><td colspan="2">
   				<div class="RhoZ">
					<img src="https://atlas-live.cern.ch/event_files/Default/latest.png"/>
				</div>
				</td></tr>
				<tr><td>
				<div class="YX1"> 
					<img src="https://atlas-live.cern.ch/event_files/Default/latest.png"/>
				</div>
				</td>
				<td>
				<div class="YX2"> 
					<img src="https://atlas-live.cern.ch/event_files/Default/latest.png"/>
				</div>
				</td>
				</tr>
				</table>
				</a>
      		</div> 
			</td>
			
			</tr>
			</table>
            <div class="clearfix"></div>
        </div>
        <!--end content-->
    </div>
    <!--end mainWp-->
    <div id="footer">
        <div id="copyright" class="container">
            <p>Copyright© 2010 CERN - <a href="mailto:Mark.Donszelmann@cern.ch?subject=ATLAS Operations Website">ATLAS Operations</a></p>
        </div>
    </div>
</div>
<!--end wrapper-->
</body>
</html>

<!--
      		<div class="quality">
   				<h3><div>Quality</div></h3>
        		<div class="datapreInside">
        		<a href="https://atlasop.cern.ch/atlas-point1/wmi/current/Run%20Status_wmi/ATLAS.html">
				<?php 
				$file = '../wmi/current/Data Quality Monitoring_wmi/ATLAS.html';
				if(file_exists($file)) {
					$fp = fopen($file, 'r'); 
					$contents = fread($fp, filesize($file)); 
					$pattern = '/<br.?\/>(.*)<br.?\/>/s';
					if(preg_match($pattern, $contents, $matches)) { 
						$text = $matches[1]; 
					} else {
						$text = "Error: Cannot parse '$file'";
					}
					$text = preg_replace('/bgcolor="#00ff00"/s', 'class="statusOk"', $text);
					$text = preg_replace('/bgcolor="#ffdc00"/s', 'class="statusActive"', $text);
					$text = preg_replace('/bgcolor="#808080"/s', 'class="statusInactive"', $text);
					$text = preg_replace('/bgcolor="#ff0000"/s', 'class="statusError"', $text);
					$text = preg_replace('/bgcolor="#0000ff"/s', 'class="statusStandby"', $text);
				} else {
					$text = "Error: Cannot find '$file'";
				}
				echo $text;  					
				?>
				</a>
      			</div>
    		</div>
-->          


<!--

   <div class="genNewBox1">
   	<h3>DAQ Status</h3>
       <div class="subBoxOpen">
       	<div class="datapreInside">
       		...
  			<?php 
				$file = '../dcs/dcs/process.php?page=ATLAS';
				$contents = file_get_contents($file); 
				echo $contents;  					
			?>        
        </div>
      </div>
    </div>

-->
