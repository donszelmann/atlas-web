<?php 
include_once("includes/applicationtop.php");
include_once("includes/header.php");
?>

    <div id="mainWp">
    	<div id="content" class="container">       
        	<div class="topHead">
              <?php 
			  include_once("meeting.php");
			  ?>          
			</div><!--end topHead-->
            
            <div class="activities">
            	<ul class="actList">
                	<li><a class="kwick one" href="http://pcatdwww.cern.ch/atlas-point1/operation.php"><img src="<?=Baseurl?>images/detector_operation.jpg" alt="#"/></a></li>
                    <li><a class="kwick two" href="https://twiki.cern.ch/twiki/bin/view/Atlas/AtlasTrigger"><img src="<?=Baseurl?>images/computing_software.jpg" alt="#"/></a></li>
                    <li><a class="kwick three" href="https://twiki.cern.ch/twiki/bin/view/Atlas/AtlasComputing"><img src="<?=Baseurl?>images/trigger.jpg" alt="#" /></a></li>
                    <li><a class="kwick four" href="https://twiki.cern.ch/twiki/bin/view/Atlas/DataPreparation"><img src="<?=Baseurl?>images/data_preparation.jpg" alt="#"/></a></li>
                    <li class="last-child"><a class="kwick five" href="https://twiki.cern.ch/twiki/bin/view/AtlasProtected/AtlasPhysics"><img src="<?=Baseurl?>images/physics.jpg" alt="#" /></a></li>
                 </ul>
                	
                </ul>
            </div><!--end activities-->
            
            <div class="btContent">
            	<div class="leftCol">
                	<div class="title"><h3>General</h3></div>
                	<div class="leftNav">
						<ul id="menu" class="slidingmenu1">
							<li><a href="#" id="1">ATLAS Organization</a>
								<ul class="subLeftNav">
										<li>
										<a href="http://atlas.web.cern.ch/Atlas/Management/Organization.pdf">Organigram</a>
									</li>
									<li>
										<a href="http://atlas.web.cern.ch/Atlas/Management/AM.html">Management</a>
									</li>
									<li>
									  <a href="http://atlas.web.cern.ch/Atlas/Management/EB.html">Executive Board</a>
									</li>
									<li>
										<a href="http://atlas.web.cern.ch/Atlas/private/ATLAS_CB/CB_Issues.html">Collaboration Board</a>
									</li>
								  <li>
										<a href="http://atlas.web.cern.ch/Atlas/Management/Institutions.html">Institutions</a>
								  </li>
                                    <li>
										<a href="https://twiki.cern.ch/twiki/bin/view/AtlasProtected/PubComHome">Publications Committee </a>
									</li>
                                    <li>
										<a href="https://twiki.cern.ch/twiki/bin/view/AtlasProtected/AuthorShipCommittee">Authorship Committee </a>
									</li>
                                    <li>
										<a href="http://atlas.web.cern.ch/Atlas/private/ATLAS_CB/Text.html#Speakers_Committee">Speakers Committee </a>
									</li>
                                    <li>
										<a href="https://twiki.cern.ch/twiki/bin/view/Atlas/AtlasPolicyDocuments">Policy Documents</a>
									</li>
									<li>
										<a href="https://atglance.web.cern.ch/atglance/appointment/">ATLAS Appointments DB</a>
									</li>
								</ul>
							</li>
							<li><a  href="#" id="2">General Information <?php if($_SESSION['valid_code']=="" || $_SESSION['ATLAS-MEMBER']=="0") {?><img src="<?=Baseurl?>images/lock.png" /><?php } ?></a>
							<?php if($_SESSION['valid_code']!="" || $_SESSION['ATLAS-MEMBER']!="1") {?>
                            	<ul class="subLeftNav">
									<li>
										<a class="active" href="http://atlassec.web.cern.ch/atlassec/Secretariat.htm" >Secretariat</a>
									</li>
									<li>
										<a href="http://atlassec.web.cern.ch/atlassec/Registration.htm">Registration & Access</a>
									</li>
									<li>
										<a href="https://twiki.cern.ch/twiki/bin/view/AtlasProtected/AuthorShipCommittee#Rules_for_qualifying_as_an_ATLAS">Authorship Qualification</a>
									</li>
									<li>
										<a href="http://ph-dep-usersoffice.web.cern.ch/ph-dep-UsersOffice/CheckIn/Visas/Welcome.html">Visa Requirements for Visitors</a>
									</li>
									<li>
										<a href="http://atlassec.web.cern.ch/atlassec/Housing.htm">Housing & Useful links</a>
									</li>
								  <li>
										<a href="http://atlassec.web.cern.ch/atlassec/Forms.htm">Forms & Services</a>
								  </li>
                                    <li>
										<a href="http://atlas.web.cern.ch/Atlas/TCOORD/Activities/TcOffice/Scheduling/Installation/Point1_visits.html">Visits to point 1</a>
									</li>
									 <li>
										<a href="http://atlas.web.cern.ch/Atlas/GROUPS/GENERAL/JOBS/jobs.html">Safety</a>
									</li>
									 <li>
										<a href="http://atlas.web.cern.ch/Atlas/GROUPS/GENERAL/JOBS/jobs.html">Jobs vacancies</a>
									</li>
								</ul>
								<?php 
								}
								?>
							</li>
							<li><a href="#" id="3">Documentation & Links</a>
								<ul class="subLeftNav">
									<li><a href="https://twiki.cern.ch/twiki/bin/view/AtlasProtected/AuthorShipCommittee#Lists_for_the_M_and_O_and_operat">M&O share list</a></li>
									<li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/MailingLists">Mailing List</a></li>
									<li><a href="http://cdsweb.cern.ch/collection/ATLAS?ln=en">Notes (CDS)</a></li>
									<li><a href="<?=Baseurl?>internal/tdr.html">Proposal & TDR</a></li>
									<li> <a href="<?=Baseurl?>documentation/thesis/thesis.html">Theses</a></li>
									<li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/AtlasWomenPage">Women Group</a></li>
								  	<li><a href="https://twiki.cern.ch/twiki/bin/view/AtlasProtected/AtlasJuniors">Juniors Seminars</a> </li>
                                    <li><a href="http://arxiv.org/">arXiv</a></li>
                                    <li><a href="http://www.slac.stanford.edu/spires/">SLAC Spires</a></li>
                                    <li><a href="http://pdg.lbl.gov/">Review of Particle Physics</a></li>
                                    <li><a href="http://physics.nist.gov/cuu/Constants/">Fundamental Physical Constants</a></li>
									<li><a href="http://www.yourdictionary.com/" class="last-child">Dictionary</a></li>
								</ul>
							</li>
							<li class="last-child"><a class="#" href="http://atlas-service-enews.web.cern.ch/atlas-service-enews/index.html">ATLAS e-News</a></li>
						</ul>
                       
				  	</div>
                </div><!--end left nav-->
                
                <div class="middleCol">
                	<div class="middleHead">
                    	<h3>General news</h3>
                        <div class="subBox">
                        	<ul class="list1">
                            	<li><a href="#">ATLAS Week ongoing in Barcelona</a></li>
                                <li><a href="#">Last monthly meeting of DG with experiments took place on Oct 2nd - summary available here</a></li>
                                <li><a href="#">Public reading of SUSY discovery paper <br /> tomorrow at 14:00 in Room 40-SS-D01</a></li>
                                <li><a href="#">Main conclusions from the last EB</a></li>
                                <li class="last-child"><a href="#">LHC: no beam in the next two days (MD)</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end gereral news-->
                    
                    <div class="middleHead">
                    	<h3>atlas public results</h3>
                        <div class="subBox">
                        	<ul class="list1"><li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/AtlasResults">ATLAS Public Results</a></li></ul>
                        </div>
                        <div class="clearfix"></div>
                    </div><!--end atlas public results-->
                    
                    <div class="projects">
                		<div class="title"><h3>Projects</h3></div>
                		<div class="leftNav">
						<ul id="menu" class="slidingmenu">
							<li><a href="#">System</a>
								<ul class="subLeftNav">
									<li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/InnerDetector">Inner Detector</a></li>
                                    <li><a href="http://atlas.web.cern.ch/Atlas/GROUPS/LIQARGON/Organization/index.html">Liquid Argon Calorimeter </a></li>
                                    <li><a href="http://atlas.web.cern.ch/Atlas/SUB_DETECTORS/TILE/">Tile Calorimeter</a></li>
                                    <li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/MuonSpectrometer">Muon Spectrometer</a></li>
                                    <li><a href="http://atlas-magnet.web.cern.ch/atlas-magnet/">Magnets</a></li>
                                    <li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/TriggerDAQ">Trigger/DAQ</a></li>
                                    <li><a href="http://atlas.web.cern.ch/Atlas/GROUPS/Shielding/" class="last-child">Shieldings & Radiation</a></li>
								</ul>
							</li>
                             
							<li class="last-child"><a href="#" >Working groups</a>
							<ul class="subLeftNav">
									<li><a href="http://atlas-project-lumi-fphys.web.cern.ch/atlas-project-lumi-fphys/">Luminosity
								    &amp; Forward Physics</a></li>
                                    <li><a href="http://atlas.web.cern.ch/Atlas/GROUPS/UPGRADES/">High Luminosity Upgrades</a></li>
                                    <li><a href="https://twiki.cern.ch/twiki/bin/view/Atlas/MagneticField">Magnetic Field</a></li>
                                    <li><a href="http://atlas.ch//index.html">Education / Outreach</a></li>
                                    
								</ul>
								</li>
						</ul>                       
				  		</div>
               		</div> <!--end projects-->                 
                    
                    
              	<div class="clearfix"></div>
                </div><!--end middleCol-->
                
                <div class="rightCol">
                	<div class="searchBox">
                    	<h3>search & phones</h3>
                        <div class="search">
                        	<form method="get" action="http://cern.ch/search" class="searchFrm" name="searchFrm">
                            	<p><input  name="qt" type="text" value="Search" onblur="if(this.value=='')this.value='Search'"  onfocus="this.value=''" alt="Search"/>
                           	   <input name="" type="button" class="btnSearch" onclick="javascript:document.searchFrm.submit();"/></p>
</form>
							   <form method="get" action="http://consult.cern.ch/xwho" class="searchFrm1" name="searchFrm1">
                                <p><input name="-notag" type="text" value="Name"  onblur="if(this.value=='')this.value='Name'"  onfocus="this.value=''" alt="Name"/>
                               <input name="" type="button" class="btnCall" onclick="javascript:document.searchFrm1.submit();"/></p>
                              </form>
                        </div>
                    </div><!--end searchBox-->
                    
                    <div class="middleHead">
                    	<h3>services & tools</h3>
                        <div class="subBox">
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
                                 <li>
								<a href="http://atglance.web.cern.ch/atglance/cgi-bin/glanceAplic">Glance</a>
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
								<a href="http://atlas-authdb.web.cern.ch/atlas-authdb/autoout/atlas_webdir.html">Atlas Directory</a>
							</li>
							<li>
								<a href="https://twiki.cern.ch/twiki/bin/view/Atlas/CollabTools">Collaborative Tools</a>
							</li>
							<li class="last-child">
								<a href="http://esmane.physics.lsa.umich.edu/wlap-cwis/SPT--BrowseResources.php?ParentId=185">Web Tutorials</a>
							</li>
                            	
                            </ul>
                            <ul class="rightList">
                            	<li>
								<a href="http://esmane.physics.lsa.umich.edu/wlap-cwis/SPT--BrowseResources.php?ParentId=184">Web plenary Meetings</a>
							</li>
							<li>
								<a href="#">Speakers Toolkit</a>
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