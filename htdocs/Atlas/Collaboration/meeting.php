<!--<h3>Meetings</h3>-->
<h3><a href="#" rel="toggle[rabbit_meeting]" data-openimage="images/minus_arrow.png" data-closedimage="images/plus_arrow.png" style="text-decoration:none; color:#FFFFFF">Meetings<span style="margin-left:858px;"><img src="images/minus_arrow.png" border="0" style="padding-top:3px"/></span></a></h3>
                 <div class="subBox" id="rabbit_meeting">
                    <ul class="subMenu">
					  <li>
						<a href="http://indico.cern.ch/categoryDisplay.py?categId=1l2">Indico categories</a>
						
				  </li>
				   <li><em></em>
						<a href="http://atlas.web.cern.ch/Atlas/cgi-bin/SCRIPTS/tomorrow-atlas-meetings">Tomorrow meetings</a>						
				  </li>
				  <li><em></em>
						<a href="http://indico.cern.ch/categoryDisplay.py?categId=3l13">Collaboration weeks</a>						
				  </li>
				  	<li><em></em>
						<a href="http://atlas.web.cern.ch/Atlas/GROUPS/GENERAL/JOBS/forthcoming_mtg.html">Forthcoming meetings</a>		
				  </li>
				  <li><em></em>
						<a href="http://atlas-speakers-committee.web.cern.ch/atlas-speakers-committee/private/FutureConferences.html">Future conferences</a>
						
				  </li>
				   <li><em></em>
						<a href="http://indico.cern.ch/tools/export.py?fid=3l158&date=today&days=7&of=html">National/Institute meetings</a>
						
				  </li>	
				  
				
					
                       
                    </ul><!--end submenu-->
                    <div class="greyBox">
                   	  <div id="cathr">
                      <h4><?php
						echo date("l, F j, Y");
					?></h4>
                      <p> <span id="hrid"><a href="javascript:void();" onclick="javascript:gethidecat();">Hour</a></span><span id="catid"><a href="javascript:void();" onclick="javascript:gethidehr();">Category</a></span> </p>
                      </div>
<SCRIPT Language="JavaScript">
//getDateStrWithDOW();


</SCRIPT> 


                        <div class="firstCol" id="catfr" style="display:none;">
						<?php
						$file = file_get_contents('https://atlas.web.cern.ch/Atlas/Collaboration/event.html');
						$file =explode("</script></div>",$file);
						$file=ereg_replace('</div>', " ", $file['1']);

						echo $file;

						?>
                        	
                        </div>
                        
                        
						
						        <div class="firstCol1" id="hrfr"  >
                        	
							<?php
						$file1 = file_get_contents('https://atlas.web.cern.ch/Atlas/Collaboration/event2.html');
						$file1 =explode("</script></div>",$file1);
						$file1=ereg_replace('</div>', " ", $file1['1']);

						echo $file1;

						?>
                            	

	
                               	 
                        </div>
                        
                        
                         <div class="clearfix"></div>
                    </div><!--end grey box-->
                </div><!--end subBox-->  