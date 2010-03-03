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
				<h3>Detector Operation</h3>
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
					<div style="padding-bottom: 12px;">
                	<div class="title"><h3>Run Status</h3>
					</div>
                	<div class="leftNav">
						<ul id="menu" class="slidingmenu1">
							<li><a href="#" id="1">Systems</a>
								<ul class="subLeftNav" id="menu_1">
									<li>
										<a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=systems/geninfo/id.html">Inner Detector</a>
									</li>
									<li>
										<a href="https://atlasop.cern.ch/atlas-point1/systems/geninfo/sys.php?subdet=LAR">LAr Calorimeter</a>
									</li>
									<li>
										<a href="https://atlasop.cern.ch/atlas-point1/systems/geninfo/sys.php?subdet=TIL">Tile Calorimeter</a>
								  </li>
								  <li>
										<a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=systems/geninfo/muon.html">Muon Spectrometer</a>
									</li>
									  <li>
										<a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=systems/geninfo/trigger.html">Trigger</a>
									</li>
								 <li><a href="https://atlasop.cern.ch/atlas-point1/wmi/current/Run%20Status_wmi/ATLAS.html">DAQ</a>
								 <li><a href="https://atlasop.cern.ch/atlas-point1/dcs/status_pages.html">DCS</a>
								 <li><a href="http://atlasdqm.web.cern.ch/atlasdqm/">Data Quality</a>
								 <li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=tier0/">Tier-0</a>
								</ul>
								
                                </li>
							<li><a  href="#" id="2">Services</a>
								
                            	<ul class="subLeftNav" id="menu_2">
									<li>
										<a class="active" href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=cooling/cooling.html" >Cooling</a>
									</li>
									<li>
										<a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=electrnet/">Electrical Network</a>
									</li>
									<li>
										<a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=gas/gas.html">Gas Systems</a>
									</li>
									<li>
										<a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=cryo/cryo.html">Cryogenics</a>
									</li>
								</ul>	
								
							</li>
							
							
							<li><a href="#" id="3" >Infrastructure</a>
								
								<ul class="subLeftNav" id="menu_3">
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=magnets/">Magnets</a></li>
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=countingrooms/">Counting Rooms, Cavern</a></li>
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=envir/">Environment</a></li>
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=safety/ss.php">Safety System</a></li>
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=sysadmin/host-status/index.php">Computers & Network</a></li>
									<li> <a href="https://atlas-service-dbmonitor.web.cern.ch/atlas-service-dbmonitor/shifter/database_dashboard.php">Database Servers</a></li>
									<li> <a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=radiation/">Radiation Monitors</a></li>
								</ul>	
							</li>
                			<li><a href="#" id="4" >LHC Machine</a>
								<ul class="subLeftNav" id="menu_4">
								
									<li><a href="http://op-webtools.web.cern.ch/op-webtools/vistar/vistars.php?usr=LHC1">LHC Page 1</a></li>
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=dcs/dcs/process.php?page=ATL_LHC&subd=IS">ATLAS Page 1</a></li>
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=http://atlas.web.cern.ch/Atlas/GROUPS/DATAPREPARATION/runs.html">Luminosity Performance</a></li>
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=lhc/backgrounds.html">Backgrounds</a></li>
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=dcs/dcs/process.php?page=LHC_INS::BPTXInfo&subd=IS">Beam Instrumentation</a></li>
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=dcs/dcs/process.php?page=ATL_EXT::Vacuum&subd=IS">Vacuum Beam Pipe</a></li>
									<li><a href="https://atlasop.cern.ch/atlas-point1/oper.php?subs=dcs/dcs/process.php?page=LHC_BIS">Beam Interlock System</a></li>
								</ul>
							</li>
								
							<li class="last-child"><a class="#" href="https://atlasop.cern.ch/atlas-point1/operation_old.php">Old Operation page</a></li>					
						</ul>
          
				  	</div>

                        <div class="clearfix"></div>
					</div>

					<div style="padding-bottom: 12px;">
                	<div class="middleHeadMid">
                    <h3>Work at Point 1</h3>

					<div class="leftNav">
							
						<ul id="menu" class="slidingmenu1">
							<li><a href="http://indico.cern.ch/categoryDisplay.py?categId=1407">Operation Meetings</a></li>
							<li><a href="#" id="5" >Operation Schedule</a>
							<ul class="subLeftNav" id="menu_5">
								<li><a href="https://atlasop.cern.ch/atlas-point1/twiki/bin/view/Main/RunningSchedules">Run Schedule</a></li>
								<li><a href="http://indico.cern.ch/categoryDisplay.py?categId=1419">Intervention Schedule</a></li>
								<li><a href="http://indico.cern.ch/categoryDisplay.py?categId=1428">Run Meetings</a></li>
								<li><a href="https://edms.cern.ch/cedar/plsql/navigation.tree?p_top_id=1069988858&p_top_type=P&p_open_id=1916187939&p_open_type=P">Operation Documents in EDMS</a></li>
							</ul>
							<li><a href="https://atlasop.cern.ch/atlas-point1/ATLAS_Logbook.htm">E-Logbook</a></li>
							<li><a href="#" id="6" >Shifts</a>
							<ul class="subLeftNav" id="menu_6">
								<li><a href="https://pptevm.cern.ch/mao/client/cern.ppt.mao.app.gwt.MaoClient/MaoClient.html#home">Shift Booking (OTP)</a></li>
								<li><a href="https://atlasop.cern.ch/atlas-point1/shift.html">Shift Booking Rules</a></li>
								<li><a href="http://pptevm-public.cern.ch/mao/public/PhoneList.html">Today's Shift Schedule</a></li>
							</ul>
							<li><a href="http://atlas-service-runinformation.web.cern.ch/atlas-service-runinformation/">Run Summaries</a></li>
							<li><a href="https://atlasop.cern.ch/atlas-point1/status/Phone.htm">On Call Phones</a></li>
							<li><a href="https://edms.cern.ch/document/817670">Piquet Services</a></li>
							<li><a href="https://edms.cern.ch/file/1020308/1/atc-e-mg-0012.pdf">ATLAS-LHC Meetings</a></li>
							<li><a href="http://atlas.web.cern.ch/Atlas/TCOORD/Activities/TcOffice/Scheduling/Installation/Point1_visits.html">Visits to Point 1</a></li>
							<li><a href="http://atlas.web.cern.ch/Atlas/TCOORD/Activities/TcOffice/Safety/Work.htm">Working at Point 1</a></li>
							<li><a href="http://atlas.web.cern.ch/Atlas/TCOORD/Activities/TcOffice/Safety/index.htm">Safety in ATLAS</a></li>
							<li><a href="#" id="7" >Documentation</a>
							<ul class="subLeftNav" id="menu_7">
								<li><a href="https://atlasop.cern.ch/atlas-point1/slimos/doc/default.htm">Slimos</a></li>
								<li><a href="https://atlasop.cern.ch/atlas-point1/twiki/bin/view/Main/LArOperationManualShifter">LAr</a></li>
								<li><a href="https://atlasop.cern.ch/atlas-point1/twiki/bin/view/Main/TileCalorimeterWhiteBoard">Tile</a></li>
							</ul>
							<li><a href="#" id="8" >Links</a>
							<ul class="subLeftNav" id="menu_8">
								<li><a href="https://atlasop.cern.ch/atlas-point1/ATLASview/ACR.htm">ATLAS Control Room</a></li>
								<li><a href="http://atlaseye-webpub.web.cern.ch/atlaseye-webpub/web-sites/pages/UX15_webcams.htm">ATLAS Cavern</a></li>
								<li><a href="http://atglance.home.cern.ch/atglance/cgi-bin/listInterfaces">Glance</a></li>
								<li><a href="broken link">SysAdmin FAQ</a></li>
								<li><a href="http://atlas-tdaq-sysadmin.web.cern.ch/atlas-tdaq-sysadmin/public/">SysAdmin</a></li>
								<li><a href="http://acr.web.cern.ch/acr/safe_keys.pdf">Emergency Access Keys</a></li>
							</ul>
						</ul>
					</div>	
					</div>	
					
                    <div class="clearfix"></div>			
				</div>
                </div><!--end left nav-->

                <div class="middleCol">
                	<div class="middleHeadMid">
                    <h3>Run Program</h3>
						<div class="subBox">
                        </div>
<iframe src="https://atlasop.cern.ch/atlas-point1/wmi/current/Run Status_wmi/AtlasRunCom.html" width="100%" 
height="500"></iframe>
					    <div class="clearfix"></div>
                    </div><!--end run program-->
                               
              	<div class="clearfix"></div>
                </div><!--end middleCol-->
                
                <div class="rightCol">
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
						
						<h3>services & tools</h3>
						
                        	<div class="serviceList">
                            <h5>services</h5>
                            <ul class="leftList">
                            	<li><a href="http://edh.cern.ch/">EDH</a></li>
                                <li><a href="http://cds.cern.ch/">CDS</a></li>
                               	<li>
								<a href="http://indico.cern.ch/">Indico</a>
							</li>
                                 <li>
								<a href="https://edms.cern.ch/cedar/plsql/edmsatlas.home">EDMS</a>
							</li>
                                 <li class="last-child">
								<a href="http://atglance.web.cern.ch/atglance/ATLASTCnDB/">Glance</a>
							</li>
                            </ul>
                            <ul class="rightList">
                            <li>
								<a href="http://www.cern.ch/dmu-atlas">CATIA</a>
							</li>
                            <li>
								<a href="http://atlas.web.cern.ch/Atlas/TCOORD/Activities/Installation/Database/rack.htm">Rack</a>
							</li>
                            <li>
								<a href="https://atlasop.cern.ch/atlas-point1/ATLAS_TWiki.html">Twiki</a>
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

                        <div class="clearfix"></div>
                    </div><!--end services and tools-->

				</div><!-- end right column-->
                                
                <div class="clearfix"></div>                
            </div><!--end content-->
         <div class="clearfix"></div>            
        </div><!--end content-->
    </div><!--end mainWp-->



<?php
include_once("includes/footer.php");
?>
