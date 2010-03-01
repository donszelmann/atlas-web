<?php 
include_once("includes/applicationtop.php");
include_once("includes/header.php");

?>
<script type="text/javascript">

animatedcollapse.addDiv('jason', 'fade=1,height=80px')
animatedcollapse.addDiv('kelly', 'fade=1,height=100px')
animatedcollapse.addDiv('michael', 'fade=1,height=120px')

animatedcollapse.addDiv('cat', 'fade=0,speed=400,group=pets')
animatedcollapse.addDiv('dog', 'fade=0,speed=400,group=pets,persist=1,hide=1')

//Atlas Results
/*animatedcollapse.addDiv('rabbit', 'fade=1,speed=400,group=pets,hide=0')*/

//Services & Tools
animatedcollapse.addDiv('rabbit_service', 'fade=1,speed=400,group=pets,hide=1')

//Detector Activites
animatedcollapse.addDiv('rabbit_detector', 'fade=1,speed=400,group=pets,hide=1')

//Meetings
animatedcollapse.addDiv('rabbit_meeting', 'fade=1,speed=400,group=pets,hide=1')


animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()

</script>
<script language="javascript">
<!--
	function goto_login(){
		document.location = '<?=Baseurl?>login/login.php';
	}
-->
</script>
    <div id="mainWp">
    	<div id="content" class="container">       
        	<div class="topHeadMeeting">
              <?php 
			
			  include_once("meeting.php");
			  ?>          
			</div><!--end topHead-->
            
            <div class="activities">
            	<ul class="actList">
                	<li><a class="kwick one" href="https://atlasop.cern.ch/atlas-point1/operation.php"><img src="<?=Baseurl?>images/detector_operation.jpg" alt="#"/></a></li>
                    
                    <li><a class="kwick three" href="https://twiki.cern.ch/twiki/bin/view/Atlas/AtlasTrigger"><img src="<?=Baseurl?>images/trigger.jpg" alt="#" /></a></li><li><a class="kwick two" href="https://twiki.cern.ch/twiki/bin/view/Atlas/AtlasComputing"><img src="<?=Baseurl?>images/computing_software.jpg" alt="#"/></a></li>
                    <li><a class="kwick four" href="https://twiki.cern.ch/twiki/bin/view/Atlas/DataPreparation"><img src="<?=Baseurl?>images/data_preparation.jpg" alt="#"/></a></li>
                    <li class="last-child"><a class="kwick five" href="https://twiki.cern.ch/twiki/bin/view/AtlasProtected/AtlasPhysics"><img src="<?=Baseurl?>images/physics.jpg" alt="#" /></a></li>
                 </ul>
                	
                </ul>
            </div><!--end activities-->
            
            <div class="btContent">
            	<div class="leftCol">
                	<div class="title"><h3>Run Status</h3>
					</div>
                	<div class="leftNav">
						<ul id="menu" class="slidingmenu1">
							<li><a href="#" id="1">Systems</a>
								<ul class="subLeftNavGeneral" id="menu_1">
									<li>
										<a href="http://atlas.web.cern.ch/Atlas/Management/AM.html">Inner Detector</a>
									</li>
									<li>
										<a href="http://atlas.web.cern.ch/Atlas/Management/Organization.pdf">LAr Calorimeter</a>
									</li>
									<li>
										<a href="http://atlas.web.cern.ch/Atlas/Management/Institutions.html">Tile Calorimeter</a>
								  </li>
								  <li>
										<a href="http://atlas.web.cern.ch/Atlas/private/ATLAS_CB/CB_Issues.html">Muon Spectrometer</a>
									</li>
									  <li>
										<a href="http://atlas.web.cern.ch/Atlas/Management/EB.html">Trigger</a>
									</li>
								 <li><a href="<?=Baseurl?>login/login.php">Trigger</a>
								 <li><a href="<?=Baseurl?>login/login.php">DAQ</a>
								 <li><a href="<?=Baseurl?>login/login.php">DCS</a>
								 <li><a href="<?=Baseurl?>login/login.php">Tier-0</a>
								</ul>
								
                                </li>
							<li><a  href="#" id="2">Services</a>
								
                            	<ul class="subLeftNav" id="menu_2">
									<li>
										<a class="active" href="http://atlassec.web.cern.ch/atlassec/Secretariat.htm" >Cooling</a>
									</li>
									<li>
										<a href="http://atlassec.web.cern.ch/atlassec/Registration.htm">Electrical Network</a>
									</li>
									<li>
										<a href="https://twiki.cern.ch/twiki/bin/view/Main/NewMemberChecklist">Gas Systems</a>
									</li>
									<li>
										<a href="https://twiki.cern.ch/twiki/bin/view/Main/NewMemberChecklist">Cryogenics</a>
									</li>
								</ul>	
								
							</li>
							<li><a href="#" id="3" >Infrastructure</a>
								
								<ul class="subLeftNav" id="menu_3">
									<li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/AccessProtectedInformation">Magnets</a></li>
									<li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/MailingLists">Counting Rooms, Cavern</a></li>
									<li><a href="http://cdsweb.cern.ch/collection/ATLAS?ln=en">Environment</a></li>
									<li><a href="https://edms.cern.ch/nav/ATLAS">Safety System</a></li>
									<li><a href="http://atlas.web.cern.ch/Atlas/internal/tdr.html">Computer & Networks</a></li>
									<li> <a href="http://atlas.web.cern.ch/Atlas/documentation/thesis/thesis.html">Database Servers</a></li>
									<li> <a href="https://twiki.cern.ch/twiki/bin/view/Atlas/ComputingTutorials">Radiation Monitors</a></li>
								</ul>	
							</li>
								
							<li class="last-child"><a class="#" href="http://atlas.web.cern.ch/Atlas/index_old.html">Old Operation page</a></li>
							
						</ul>
                       
				  	</div>
                </div><!--end left nav-->
                <?php
				 if($_SESSION['valid_code']=="") {
				 $class="middleHead_notlogin";
				 }
				 else if($_SESSION['valid_code']!="") 
				 {
				  $class="middleHead";
				 }
				?>
                <div class="middleCol">
                	<div class="<?=$class?>">
                    <h3 <?php if($_SESSION['valid_code']=="") {?> onclick="javascript:goto_login();" <?php }?>>General news</h3>
						<?php if($_SESSION['valid_code']!="") {?>
                        <div class="subBox">
                        	<ul class="list2">
							<?php
								include_once("generalnewsreadxml.php");
								?>
								<h6 style="padding:2px 0px 2px 0px; text-decoration:none; font-size:11px; text-align:right; width:294px; "><a href="http://cdsweb.cern.ch/search?cc=ATLAS%20Live%20General%20News" target="_blank" style="color:#357CC3;">All General News</a></h6>
                            
                            </ul>
                        </div>
						<?php
						}
						?>
                        <div class="clearfix"></div>
                    </div><!--end gereral news-->
                    
					<div class="middleHeadMid">
                    	<h3>atlas results</h3>
                        <div class="subBox" style="display:block;">
                        	<ul class="list1"><li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/AtlasResults">Public Results</a></li>
							<li><a href="http://atlas.web.cern.ch/Atlas/public/EVTDISPLAY/events.html">ATLAS Event Displays</a></li>
							<li><a href="http://atlas-speakers-committee.web.cern.ch/atlas-speakers-committee/">Conferences & Talks</a></li>
							<li><a href="https://atglance.web.cern.ch/atglance/analysis/">ATLAS Analysis Follow-up <?php if($_SESSION['valid_code']=="" || $_SESSION['ATLAS-MEMBER']=="0") {?><img src="<?=Baseurl?>images/lock.png" /><?php } ?></a></li></ul>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end atlas public results-->                
                    
                    
              	<div class="clearfix"></div>
                </div><!--end middleCol-->
                
                <div class="rightCol">
				<div class="middleHeadDetector">
				<!--
 					 <h3>Detector Activities</h3>
				-->
					 <h3><a href="#" rel="toggle[rabbit_detector]" data-openimage="images/minus_arrow.png" data-closedimage="images/plus_arrow.png" style="text-decoration:none; color:#FFFFFF">Detector Activities<span style="margin-left:95px;"><img src="images/minus_arrow.png" border="0" style="padding-top:3px"/></span></a></h3>
					 
                		<div class="subBox" id="rabbit_detector">
						<ul id="menu">
									<li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/InnerDetector">Inner Detector</a></li>
                                    <li><a href="http://atlas.web.cern.ch/Atlas/GROUPS/LIQARGON/Organization/index.html">Liquid Argon Calorimeter </a></li>
                                    <li><a href="http://atlas.web.cern.ch/Atlas/SUB_DETECTORS/TILE/">Tile Calorimeter</a></li>
                                    <li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/MuonSpectrometer">Muon Spectrometer</a></li>
                                    <li><a href="http://atlas-magnet.web.cern.ch/atlas-magnet/">Magnets</a></li>
                                    <li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/TriggerDAQ">Trigger/DAQ</a></li>
                                    <li><a href="http://atlas.web.cern.ch/Atlas/GROUPS/Shielding/" >Shieldings & Radiation</a></li>
									<li><a href="http://atlas.web.cern.ch/Atlas/GROUPS/FRONTEND/index.html" >Electronics</a></li>
									<li><a href="http://atlas-project-lumi-fphys.web.cern.ch/atlas-project-lumi-fphys/">Luminosity
								    &amp; Forward Detectors</a></li>
									<li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/MagneticField">Magnetic Field</a></li>
									<li class="last-child"><a href="http://atlas.web.cern.ch/Atlas/GROUPS/UPGRADES/">High Luminosity Upgrades</a></li>
						</ul>                     
						</div>
						<div class="clearfix"></div>
               		</div> <!--end projects--> 
                	<div class="searchBox">
                    	<h3>search & phones</h3>
                        <div class="search">
                        	<form method="get" action="https://cern.ch/search" class="searchFrm" name="searchFrm">
                            	<p><input  name="qt" type="text" value="Search" onblur="if(this.value=='')this.value='Search'"  onfocus="this.value=''" alt="Search"/>
                           	   <input name="" type="button" class="btnSearch" onclick="javascript:document.searchFrm.submit();"/></p>
</form>
							   <form method="post" action="http://consult.cern.ch/xwho" class="searchFrm1" name="searchFrm1">
                                <p><input name="-notag" type="text" value="Name"  onblur="if(this.value=='')this.value='Name'"  onfocus="this.value=''" alt="Name"/>
                               <input name="" type="button" class="btnCall" onclick="javascript:document.searchFrm1.submit();"/></p>
                              </form>
                        </div>
                    </div><!--end searchBox-->
                    
                    <div class="middleHeadServices">
                    	<!--<h3>services & tools</h3>-->
						
						<h3><a href="#" rel="toggle[rabbit_service]" data-openimage="images/minus_arrow.png" data-closedimage="images/plus_arrow.png" style="text-decoration:none; color:#FFFFFF">services & tools<span style="margin-left:120px;"><img src="images/minus_arrow.png" border="0" style="padding-top:3px"/></span></a></h3>
						
                        <div class="subBox" id="rabbit_service">
                        	<div class="serviceList">
                            <h5>services</h5>
                            <ul class="leftList">
                            	<li><a href="http://edh.cern.ch/">EDH</a></li>
                                <li><a href="http://cds.cern.ch/">CDS</a></li>
                               	<li>
								<a href="http://indico.cern.ch/">Indico</a>
							</li>
                                 <li>
								<a href="http://edms.cern.ch/">EDMS</a>
							</li>
                                 <li class="last-child">
								<a href="http://atglance.web.cern.ch/atglance/ATLASTCnDB/">Glance</a>
							</li>
                            </ul>
                            <ul class="rightList">
                            	<li>
								<a href="http://evo.caltech.edu/evoGate/">EVO</a>
							</li>
                            <li>
								<a href="https://groups.cern.ch/Pages/atlas.aspx">eGroups</a>
							</li>
                            <li>
								<a href="https://hypernews.cern.ch/HyperNews/Atlas/login.pl">HyperNews</a>
							</li>
                            <li>
								<a href="https://twiki.cern.ch/twiki/bin/view/Atlas/WebHome">Twiki</a>
							</li>
                            </ul>
                           </div>
                           <div class="clearfix"></div>
                           <div class="toolList">
                           	<h5>Tools</h5>
                            <ul class="leftList">
								<li>
								<a 
href="http://atlas-authdb.web.cern.ch/atlas-authdb/autoout/atlas_webdir.html">ATLAS Directory</a>
							</li>
							
							<li class="last-child">
								<a href="https://espace.cern.ch/atlas-collaborative-tools/default.aspx">Collaborative Tools</a>
							</li>
                            	
                            </ul>
                            <ul class="rightList">
							<li>
								<a href="http://graybook.cern.ch/ExperimentSearch.html">LHC Member Search</a>
							</li>                            
                            </ul>
                           </div> 
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end gereral news-->
                </div><!--end rightCol-->
                
                <div class="clearfix"></div>                
            </div><!--end content-->
         <div class="clearfix"></div>            
        </div><!--end content-->
    </div><!--end mainWp-->



<?php
include_once("includes/footer.php");
?>
