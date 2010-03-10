// Constants
var TASK_IDS= [529162, 95, 125, 127, 129, 130, 529008, 529009, 133, 134, 242, 264, 529150, 332, 358, 10213, 30809, 39067, 529128, 65775, 348276, 348287, 529196, 529202, 529053];

var TASK_NAMES = new Object();
TASK_NAMES["529162"] = "Tier-0";
TASK_NAMES["95"] = "DataQual";
TASK_NAMES["125"] = "Shift Leader";
TASK_NAMES["127"] = "SLIMOS";
TASK_NAMES["129"] = "DAQ/HLT";
TASK_NAMES["130"] = "Level-1";
TASK_NAMES["529008"] = "LAr exp";
TASK_NAMES["529009"] = "LAr";
TASK_NAMES["133"] = "Tile";
TASK_NAMES["134"] = "Mu-MDT";
TASK_NAMES["242"] = "Pixel";
TASK_NAMES["264"] = "SCT";
TASK_NAMES["529150"] = "TRT";
TASK_NAMES["332"] = "Mu-RPC";
TASK_NAMES["358"] = "Mu-TGC";
TASK_NAMES["10213"] = "RunCtrl";
TASK_NAMES["30809"] = "OPM (165422)";
TASK_NAMES["39067"] = "DCS";
TASK_NAMES["529128"] = "Trigger";
TASK_NAMES["65775"] = "Beam/Lumi";
TASK_NAMES["348276"] = "RPE (161870)";
TASK_NAMES["348287"] = "RPA";
TASK_NAMES["529196"] = "ATLAS patrol-patrollers";
TASK_NAMES["529202"] = "ATLAS patrol-patrol leader";
TASK_NAMES["529053"] = "ADC";

var PHONE_LIST_SEQUENCE = new Object();
PHONE_LIST_SEQUENCE["PREVIOUS"] = "Previous shift";
PHONE_LIST_SEQUENCE["CURRENT"] = "Current shift";
PHONE_LIST_SEQUENCE["NEXT"] = "Next shift";

var DEFAULT_PHOTO_SRC = "images/res-allocation-unknown.png";
var SHIFT_LIST_MAX_CHAR = 110;
var PERSON_DETAILS_WINDOW_WIDTH = 500;
var PERSON_DETAILS_WINDOW_HEIGHT = 700;

// JSON objects received from the server, using the following format:
/*
 {
  "taskId": { "sequence":{ "time": [ {"firstName": "aFirstName", "lastName": "aLastName", "email": "test@test.com"} ] } }
 }
 */
 // For instance:
 /*
 {
  "133": {
    "PREVIOUS":{
        "7-15":[
          {"firstName": "aFirstName", "lastName": "aLastName", "email": "test@test.com"}
	  , {"firstName": "aFirstName", "lastName": "aLastName", "email": "test@test.com"}
        ]
	, "9-16":[
	  {"firstName": "aFirstName", "lastName": "aLastName", "email": "test@test.com"}
	  , {"firstName": "aFirstName", "lastName": "aLastName", "email": "test@test.com"}
	]
     }
     
     , "CURRENT":{
        "15-23":[
          {"firstName": "aFirstName", "lastName": "aLastName", "email": "test@test.com"}
	  , {"firstName": "aFirstName", "lastName": "aLastName", "email": "test@test.com"}
        ]
     }
     
     , "NEXT":{
        "23-7":[
          {"firstName": "aFirstName", "lastName": "aLastName", "email": "test@test.com"}
        ]
     }
   }
 } 
 */
var shiftList = null;

// Phone list templates
var shiftListReqTempl 		= new Template('<div class="team">#{teams}</div>');
var shiftWithTooltipTempl 	= new Template('<div class="#{cssClass}">#{sequence} #{hours}: <br/><a href="" class="tooltip" onclick="displayTeamDetailsInNewWindow(#{teamId});return false;">#{persons}<span>#{tooltipText}</span></a></div>');
var shiftTempl 				= new Template('<div class="#{cssClass}">#{sequence} #{hours}: <br/><a href="" onclick="displayTeamDetailsInNewWindow(#{teamId});return false;">#{persons}</a></div>');
var shiftTooltipTempl 		= new Template('<div class="#{cssClass}">#{sequence} #{hours}: <br/>#{persons}</div>');

// Person details templates
var windowTempl 			= new Template('<html><head><title>#{title}</title><link rel="stylesheet" href="PhoneList.css"></head><body><h2 class="teamDetailsHeader">#{heading}</h2>#{body}</body></html>');
var teamDetailsTempl 		= new Template('<div class="teamDetailsPanel">#{teamDetails}</div>');
var personTempl 			= new Template('<div class="person"><img class="personPhoto" border="0" src="#{pictureUrl}" onerror="this.src=\'#{defaultPictureUrl}\'"/><div class="personDetails">#{personDetails}</div></div>');
var personDetailTempl 		= new Template('<div class="personAttribute">#{value}</div>');

/*
Gets the shift lists from the server 
*/
function init(){
	var reply = function(data){
		if (data != null && typeof data == 'object'){
			shiftList = data;
			getPhoneListDetails();
		}
		else{
			alert("Error: Could not get the shift lists from the server");
		}
	 }
	 maoPublicService.getShiftListsPerTask(TASK_IDS,  {
	  callback:reply,
	  errorHandler:function(errorString, exception)
	     { alert("Error while querying shift lists : "+errorString+" (exception was "+exception.message+")") }
	  });	
}

/* 
Extracts information from the JSON object returned from the server and inserts it 
into html templates
*/
function getPhoneListDetails(){
	for(taskId in shiftList){
		var shifts = "";
		var tooltipText = "";		
		for(var sequence in shiftList[taskId]){	
			// Get tooltip text (the previous and next shifts)
			for(var time in shiftList[taskId][sequence]){
				if(sequence == "PREVIOUS" || sequence == "NEXT"){
					var cssClass = sequence.toLowerCase() + "ShifterTeam";
					// The names of all allocated persons for this shift as a string
					var persons = getShifterTeamString(shiftList[taskId][sequence][time]);
					// Truncate the string
					persons = persons.truncate(SHIFT_LIST_MAX_CHAR - sequence.length + 2);
					// The parameters given to displayTeamDetailsInNewWindow(...) when clicking on a list of allocated persons
					var teamId = "'" + taskId + "', '" + sequence + "', '" + time + "'";
					
					tooltipText += shiftTooltipTempl.evaluate({cssClass: cssClass, sequence: PHONE_LIST_SEQUENCE[sequence], hours: "(" + time + ")", persons: persons});	
				}
			}
		}
		// Get the current shifts
		for(var sequence in shiftList[taskId]){		
			for(var time in shiftList[taskId][sequence]){
				if(sequence == "CURRENT"){
					var cssClass = sequence.toLowerCase() + "ShifterTeam";
					// The names of all allocated persons for this shift as a string
					var persons = getShifterTeamString(shiftList[taskId][sequence][time]);
					// Truncate the string
					persons = persons.truncate(SHIFT_LIST_MAX_CHAR - sequence.length + 2);
					// The parameters given to displayTeamDetailsInNewWindow(...) when clicking on a list of allocated persons
					var teamId = "'" + taskId + "', '" + sequence + "', '" + time + "'";
					
					if(tooltipText != ""){
						shifts += shiftWithTooltipTempl.evaluate({cssClass: cssClass, sequence: "", hours: time, teamId: teamId, persons: persons, tooltipText: tooltipText});
					}
					else{
						shifts += shiftTempl.evaluate({cssClass: cssClass, sequence: "", hours: time, teamId: teamId, persons: persons});
					}
				}
			}
		}
		var content = shiftListReqTempl.evaluate({teams: shifts});
		$("task_" + taskId).update(content);
	}
}

/*
Gets the persons belonging to the shifter teams specified by the 
parameters and displays them in a new window
*/
function displayTeamDetailsInNewWindow(taskId, sequence, time){	
	var team = shiftList[taskId][sequence][time];
	
	teamDetails = "";
	
	// Fill templates with details for each person in the team
	team.each(function(person, index){
		var personDetails = "";
		personDetails += personDetailTempl.evaluate({value: person.firstName + " " + person.lastName});
		personDetails += personDetailTempl.evaluate({value: person.email});
		
		var pictureUrl;
		if("pictureUrl" in person){
			pictureUrl = person.pictureUrl;
		}
		else{
			pictureUrl = DEFAULT_PHOTO_SRC;	
		}
		teamDetails += personTempl.evaluate({pictureUrl: pictureUrl, defaultPictureUrl: DEFAULT_PHOTO_SRC, personDetails: personDetails});
	});
	var element = teamDetailsTempl.evaluate({teamDetails: teamDetails});
	var title = TASK_NAMES[taskId] + " - " + PHONE_LIST_SEQUENCE[sequence];
	var heading = title;
	var winContent = windowTempl.evaluate({title: title, heading: heading, body: element});
	openPersonDetailsWindow(winContent);
}

/*
Open a new window containing information about persons allocated to a specific shift
*/
function openPersonDetailsWindow(content){
	windowRef = window.open("", "shifterTeamDetails", "scrollbars,width=" + PERSON_DETAILS_WINDOW_WIDTH + ",height=" + PERSON_DETAILS_WINDOW_HEIGHT);
	windowRef.document.open();
	windowRef.document.write(content);
	windowRef.document.close();
}

/*
Returns a string containing the names of the persons belonging to a shifter team.
*/
function getShifterTeamString(shifterTeamArray){
	var shifterTeamString = "";
	shifterTeamArray.each(function(person, index){
		if(index > 0){
			shifterTeamString += ",<br/>" + person.firstName + " " + person.lastName;
		}
		else{
			shifterTeamString += person.firstName + " " + person.lastName;			
		}
	});
	return shifterTeamString;
}