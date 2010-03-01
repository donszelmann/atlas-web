
 function gethidehr()
 {
document.getElementById('hrfr').style.display = 'none';

 document.getElementById('hrsc').style.display='none';
document.getElementById('catfr').style.display = 'block';

 document.getElementById('catsc').style.display='block';	

 //alert("hello");
 }
  function gethidecat()
 {
document.getElementById('catfr').style.display = 'none';

 document.getElementById('catsc').style.display='none';
document.getElementById('hrfr').style.display = 'block';

 document.getElementById('hrsc').style.display='block';	

 }
 function GetDay(intDay){
    var DayArray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", 
                         "Thursday", "Friday", "Saturday")
    return DayArray[intDay]
    }

  function GetMonth(intMonth){
    var MonthArray = new Array("January", "February", "March",
                               "April", "May", "June",
                               "July", "August", "September",
                               "October", "November", "December") 
    return MonthArray[intMonth] 	  	 
    }
  function getDateStrWithDOW(){
    var today = new Date()
    var year = today.getYear()
    if(year<1000) year+=1900
    var todayStr = GetDay(today.getDay()) + ", "
    todayStr += GetMonth(today.getMonth()) + " " + today.getDate()
    todayStr += ", " + year
	document.getElementById('date').innerHTML=todayStr;
    //return todayStr
    }
function getopenloginpage()
{
	window.location="https://espace.cern.ch/atlas-collaborative-tools/atlas-live-video/default.aspx";
	}
	