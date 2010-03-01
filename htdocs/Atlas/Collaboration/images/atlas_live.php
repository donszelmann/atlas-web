<?php 
ob_start();
include_once("includes/applicationtop.php");
//include_once("includes/header.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ATLAS Experiment</title>
<link rel="stylesheet" type="text/css" href="<?=Baseurl?>css/style.css" />
<link rel="shortcut icon" href="/Atlas/Collaboration/images/atlasblue.ico">


<!--[if lt IE 8]>
<script src="script/IE8.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="<?=Baseurl?>script/jquery.js"></script>
<script type="text/javascript" src="<?=Baseurl?>script/collapDiv.js"></script>
<script type="text/javascript" src="<?=Baseurl?>script/animatedcollapse.js">



<script src="<?=Baseurl?>script/jquery-1.2.1.min.js" type="text/javascript"></script>


<script src="<?=Baseurl?>script/javascript.js" type="text/javascript"></script>
</head>

<body>
<div id="wrapper">
	<div id="topRow">
    	<div id="login" class="container"> <?php if($_SESSION['valid_code']=="") {?><a href="<?=Baseurl?>login/login.php" class="loginBtn" >Login</a> <?php } else {?> <a href="logout.php"><img src="images/logout.jpg"  style="padding:4px;" /></a><span class="userinfo"><?=$_SESSION['HTTP_ADFS_FULLNAME']?>&nbsp;&nbsp;&nbsp;<?=$_SESSION['HTTP_ADFS_EMAIL']?></span><?php } ?>
        	 <div class="slogun"><p><a href="http://www.cern.ch/" title="Go to the CERN homepage">European Organization for Nuclear Research</a></p></div>
             <div class="clearfix"></div>
        </div>       
    </div><!--end tophead-->
    <div id="header">
    	<div id="logoWp" class="container"><h1><a href="<?=Baseurl?>index.php">Atlas Experiment</a></h1>
           	<ul class="topNav">
            	<li><a href="<?=Baseurl?>index.php" <?=$class?>>Collaboration</a></li>
                <li><em></em><a href="<?=Baseurl?>atlas_live.php" <?=$class1?>>ATLAS Now</a></li>
                <li><em></em><a href="http://atlas.ch/">ATLAS Public</a></li>
                <li class="last-child"><em></em><a href="http://www.cern.ch/">CERN&nbsp;</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div><!--end header-->
<?php 

include_once 'xml_regex.php';
?>

<script type="text/javascript">

animatedcollapse.addDiv('jason', 'fade=1,height=80px')
animatedcollapse.addDiv('kelly', 'fade=1,height=100px')
animatedcollapse.addDiv('michael', 'fade=1,height=120px')

animatedcollapse.addDiv('cat', 'fade=0,speed=400,group=pets')
animatedcollapse.addDiv('dog', 'fade=0,speed=400,group=pets,persist=1,hide=1')

//Webcast
animatedcollapse.addDiv('rabbit_webcasts', 'fade=1,speed=400,group=pets,hide=1')

//Latest news
animatedcollapse.addDiv('rabbit_latestnews', 'fade=1,speed=400,group=pets,hide=1')

//Atlantis Event Display
animatedcollapse.addDiv('rabbit_atlantis', 'fade=1,speed=400,group=pets,hide=1')

//LHC Operation
animatedcollapse.addDiv('rabbit_lhcoperation', 'fade=1,speed=400,group=pets,hide=1')

//LHC Cooldown
//animatedcollapse.addDiv('rabbit_lhccooldown', 'fade=1,speed=400,group=pets,hide=1')

animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()

</script>
<?
if($_SESSION['valid_code']=="")
{
	echo $_SESSION['geturl']="1";
	//header("location:https://atlas.web.cern.ch/Atlas/Collaboration/login/login.php");
	//exit();
}
else
?>

      <?php 
	  
		
		if($_SESSION['valid_code']!="") {
			$classlarge_colBox="large_colBox";
			$classlastest_news="lastest_news";
			$classwebcast="webcast";
		}
		else
		{
			$classlarge_colBox="large_colBox_notlogin";
			$classlastest_news="lastest_news_notlogin";
			$classwebcast="webcast_notlogin";
		}
		if($_SESSION['ATLAS-MEMBER']=="0")
		{
			$classlarge_colBox1="large_colBox_notlogin";
		}
		?>  
    <div id="mainWp">
    	<div id="content" class="container">
        	<div class="firstRow">
            
        	<div class="<?=$classlastest_news;?>">
            	<!--<h3 class="active">Lastest News</h3>-->
				
				<h3><a href="#" rel="toggle[rabbit_latestnews]" data-openimage="images/minus_arrow.png" data-closedimage="images/plus_arrow.png" style="text-decoration:none; color:#FFFFFF">Lastest News<span style="margin-left:495px;"><img src="images/minus_arrow.png" border="0" style="padding-top:3px"/></span></a></h3>
				
				<?php if($_SESSION['valid_code']!="") {?>    
                <div class="subBox" id="rabbit_latestnews">
                	<div class="lastest_ltCol">
                    	<div class="generalNews">
                        	<div class="title1">General News</div>                          
                            <div class="insideBox">              
                              
                                <ul class="newsList1">
								
								<?php
								include_once("generalnewsreadxml.php");
								?>
								<h6 style="padding:2px 0px 2px 0px; text-decoration:none; font-size:11px; text-align:right;"><a href="http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20General%20News" target="_blank">All General News</a></h6>
                                    <!--<li><a href="#">Precise Timing Adjustment for the ATLAS Level1 Endcap Muon Trigger System</a></li>
                                    <li><a href="#">Discovery potential of the SM Higgs with ATLAS</a></li>
                                    <li><a href="#">Commissioning of the ATLAS Pixel Detector with cosmics data</a></li>-->
                                </ul>
                            </div>
                        </div><!--end general news-->
                        
                        <div class="generalNews">
                        	<div class="title2">trigger</div>                          
                                <div class="insideBox">  
								<?php
								include_once("triggerreadxml.php");
								?>             
                                 <h6 style="padding:2px 10px 2px 0px; text-decoration:none; font-size:11px; text-align:right;"><a href="http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Trigger%20News" target="_blank">All Trigger News</a></h6>    
                                    
                          </div>
                      </div><!--end trigger-->	
                        <div class="generalNews">
                        	<div class="title3">Physics</div>                          
                            <div class="insideBox">  
							<?php
								include_once("physicsrealxml.php");
								?>  
								<h6 style="padding:2px 10px 2px 0px; text-decoration:none; font-size:11px; text-align:right;"><a href="http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Physics%20News" target="_blank">All Physics News</a></h6>            
                            <!--  <h6>Approval for ICHEP2010: deadline May 24</h6>
                              <h6>Students' plot of the day</h6>
                              <h6>High statistics Z+jets MC available here</h6>
                              <h6 class="last-child">Draft paper on Z' discovery availabe for comments</h6>-->
                                
                          </div>
                        </div><!--end physcis-->
                    	
                    </div>
                    <div class="lastest_rtCol">
                        <div class="generalNews">
                                <div class="title4">detector operation </div>                          
                                <div class="insideBox">              
                                 <!-- <p id="date"  onclick="javascript:getdate()"></p>
								  <script language="javascript"> 
								  function getdate()
								  {
								  var today = new Date();
    var year = today.getYear();
    if(year<1000) year+=1900;
    var todayStr = GetDay(today.getDay()) + ", ";
    todayStr += GetMonth(today.getMonth()) + " " + today.getDate();
    todayStr += ", " + year;
	document.write(todayStr);
	}
	</script>-->
                            
                                         <?php
								include_once("intervention.html");
								?> 
                                 <h6 style="padding:2px 10px 2px 0px; text-decoration:none; font-size:11px; text-align:right;"><a href="http://indico.cern.ch/categoryDisplay.py?categId=1419" target="_blank">All Interventions</a></h6> 
                                </div>
                      </div><!--end detector operation-->
                             
							 
							  <div class="generalNews">
                                <div class="title5">computing & software</div>                          
                            <div class="insideBox">          
							<?php
								include_once("computersoftwarerealxml.php");
								?>    
                              <!--<h6>Release 22: validation completed in 1 week</h6>
                              <h6>XXX Tier1 resumed operation after two days whutdown</h6>
                              <h6 class="last-child">Data collected until yesterday 4 pm reconstructed: worldwide distribution completed</h6>-->
                                <h6 style="padding:2px 10px 2px 0px; text-decoration:none; font-size:11px; text-align:right;"><a href="http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Computing%20%26%20Software%20News" target="_blank">All Computing & Software News</a></h6>
                          </div>
                        </div><!--end computing and Software-->
					  
                        <div class="generalNews">
                                <div class="title4">data preparation</div>                          
                                <div class="insideBox">              
                                 <?php
								include_once("datapreparationreadxml.php");
								?>
                                    <h6 style="padding:2px 10px 2px 0px; text-decoration:none; font-size:11px; text-align:right;"><a href="http://cdsweb.cern.ch/rss?cc=ATLAS%20Live%20Data%20Preparation%20News" target="_blank">All Data Preparation News</a></h6>    
                          </div>
                      </div><!--end data preparation-->
                            

                    </div>
                </div>
				<?php 
				}
				?>
                <div class="clearfix"></div>
            </div><!--end lastest News-->
            
            <div class="<?=$classwebcast?>">
            	<!--<h3 >Webcast</h3>-->
				
				<h3><a href="#" rel="toggle[rabbit_webcasts]" data-openimage="images/minus_arrow.png" data-closedimage="images/plus_arrow.png" style="text-decoration:none; color:#FFFFFF">Webcast<span style="margin-left:188px;"><img src="images/minus_arrow.png" border="0" style="padding-top:3px"/></span></a></h3>
				
                <div class="subBox" id="rabbit_webcasts">
                 <!-- 	<div class="flashPlayer">
                    	<a href="https://espace.cern.ch/atlas-collaborative-tools/atlas-live-video/webcasts/atlas-live-1/default.aspx" target="_blank"><img src="<?=Baseurl?>images/ATLASLive1Webcast_tiff.jpg" width="274" height="204" alt="#" /></a>
                      <p class="blod_txt">ATLAS Live 1</p>
                       
                    </div>-->
              <div class="movieList">
                    	<ul>
                        	 <li><a target="_blank" href="https://espace.cern.ch/atlas-collaborative-tools/atlas-live/acr-anycast/default.aspx" class="floatLeft"><img src="<?=Baseurl?>images/ATLASLive1Webcast_beam.jpg" width="120" height="81" alt="#"></a>
                            	<p class="bold">ATLAS Control Room</p>
                              
                            </li>
                          <li><a  target="_blank" href="https://espace.cern.ch/atlas-collaborative-tools/atlas-live/collab-meeting/default.aspx" class="floatLeft"><img src="<?=Baseurl?>images/CERN-40-S2-C01_jpg.jpg" alt="#" width="120" height="81"></a>
                            	<p class="bold">Collaboration Meetings</p>
                             
                            </li>
                        </ul>
                    </div>
              </div>
			 
                <div class="clearfix"></div>
            </div><!--end webcast-->
        
            </div>
                 
       		<div class="run_status">
        	<div class="title">Run Status</div>
               	<div class="dataGrid">
                	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <th align="center" valign="top" > Run</th>
                        <th align="center" valign="top">Type</th>
                        <th align="center" valign="top">Detectors</th>
                        <th align="center" valign="top" width="50">State</th>
                        <th align="center" valign="top">Start Time</th>
                        <th align="center" valign="top">Stop Time</th>
                        <th align="center" valign="top"  width="80">Run Time</th>
                      </tr>
                    
                    <?php
		include("http://atlas.web.cern.ch/Atlas/Collaboration/php/runInfo.php");
		?>	
                     
                  </table>

              </div><!--dataGrid-->            	           
            
        <div class="clearfix"></div>
        </div><!--end run status-->

        
        	<div class="<?=$classlarge_colBox?>">
        	<!--<h3>lhc operation</h3>-->
			<h3><a href="#" rel="toggle[rabbit_lhcoperation]" data-openimage="images/minus_arrow.png" data-closedimage="images/plus_arrow.png" style="text-decoration:none; color:#FFFFFF">lhc operation<span style="margin-left:807px;"><img src="images/minus_arrow.png" border="0" style="padding-top:3px"/></span></a></h3>
			<?php if($_SESSION['valid_code']!="") {?>    
            <div class="subBox" id="rabbit_lhcoperation">
            	<div class="inSubBox" align="center">
				<img height="580" border="0" width="773" src="http://cs-ccr-www2.cern.ch/vistar_capture/lhc.png"/>
            	
                </div>
                </div>
				<?php } ?>   
        </div><!--end lhc operation-->
            
		
       		<div class="<?=$classlarge_colBox?>">
        	<!--<h3>atlantis event display </h3> -->
			
			<h3><a href="#" rel="toggle[rabbit_atlantis]" data-openimage="images/minus_arrow.png" data-closedimage="images/plus_arrow.png" style="text-decoration:none; color:#FFFFFF">atlantis event display<span style="margin-left:730px;"><img src="images/minus_arrow.png" border="0" style="padding-top:3px"/></span></a></h3>
			<?php if($_SESSION['valid_code']!="") {?>    
            <div class="subBox" id="rabbit_atlantis">     
			   
            	<div class="inSubBox">
				<a href="https://atlas-live.cern.ch/browser" target="_blank">
				<iframe src="https://atlas-live.cern.ch/ResizedAtlasLive.html"  height="610" border="0" width="800" /></iframe>
				</a> 
				</div>     

			               
            </div>
				<?php } ?>   
        </div><!--end event display-->
        
        <div class="clearfix"></div>          
        </div><!--end content-->
    </div><!--end mainWp-->
   <?php
include_once("includes/footer.php");
?>
