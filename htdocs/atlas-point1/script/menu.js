
function initMenu() {
			
  $('.slidingmenu ul').hide();
  $('.slidingmenu1 ul').hide();
  $('.subLeftNav div').hide();
 /* $('.slidingmenu ul:first').show();
  $('.slidingmenu1 ul:first').show();
  $('#menu ul:first').show();*/
  $('.slidingmenu li a').click(
    function() {
		
      var checkElement = $(this).next();
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
		   $('.slidingmenu ul').hide();
        return false;
        }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('.slidingmenu ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
        }
      }
    );
  
 /* $('#menu ul:first').show();*/

  $('.subLeftNav li a').click(
		function(){
			//alert("mu**");			
			//document.getElementById("usefull_links_nav").style.display='block';
			
			var checkElement = $(this).next();
			
			var val_usefull_links = $(this).attr('id');
			
			if((checkElement.is('div')) && (checkElement.is(':visible'))) {
				 $('.subLeftNav div').hide();
				 //alert("closed");
				  var usefull_links_var = "closed";
				  setCookie('username_links',"hee",365);
				  return false;
			}else{
				//alert("open");	
				var usefull_links_var = "open";
				setCookie('username_links',usefull_links_var,365);
			}
						
			if((checkElement.is('div')) && (!checkElement.is(':visible'))) {
				$('.subLeftNav div:visible').slideUp('normal');
				checkElement.slideDown('normal');
		
			}
		}
	);

 
   /* Edited by Rudra - Jan 26 2010*/
  $('.slidingmenu1 li a').click(
    function() {
	  
      var checkElement = $(this).next();
	  
	  
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
		   $('.slidingmenu1 ul').hide();
       		return false;
        }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('.slidingmenu1 ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
		
		var val = $(this).attr('id');
		
	  
	   //alert(checkElement.is(':visible') + "--" + val);
	   setCookie('username',val,365);
		
		if(parseInt(val) == 1){
			$('.slidingmenu1 ul').hide();
			document.getElementById("menu_1").style.display='block';
			document.getElementById("menu_2").style.display='none';
			document.getElementById("menu_3").style.display='none';
		}
		if(parseInt(val) == 2){
			document.getElementById("menu_1").style.display='none';
			document.getElementById("menu_2").style.display='block';
			document.getElementById("menu_3").style.display='none';
		}
		if(parseInt(val) == 3){
			document.getElementById("menu_1").style.display='none';
			document.getElementById("menu_2").style.display='none';
			document.getElementById("menu_3").style.display='block';
		}
        return false;
        }
      }
    );
  
  }


$(document).ready(function() {						   
  initMenu(); 
  
  /* Edited by Rudra - Jan 26 2010*/
  username=getCookie('username');
  
  username_links=getCookie('username_links');
  //alert(username_links);
  
   if (username_links!=null && username_links!=""){
	   val = username_links;
		if(val == "open"){	
	  		document.getElementById("usefull_links_nav").style.display='block';
		}
		
   }
  
	   
  if (username!=null && username!=""){
	   alert(username);
	   var checkElement = $(this).next();
	   val = username;
	
	  	if(parseInt(val) == 1){
			document.getElementById("menu_1").style.display='block';
			document.getElementById("menu_2").style.display='none';
			document.getElementById("menu_3").style.display='none';
		}
		if(parseInt(val) == 2){
			document.getElementById("menu_1").style.display='none';
			document.getElementById("menu_2").style.display='block';
			document.getElementById("menu_3").style.display='none';
		}
		if(parseInt(val) == 3){
			document.getElementById("menu_1").style.display='none';
			document.getElementById("menu_2").style.display='none';
			document.getElementById("menu_3").style.display='block';
		}
  }else{
	  
	   //alert("cookie not saved");
  }
	  
		
});

/* Edited by Rudra - Jan 26 2010*/
function getCookie(c_name){
	if (document.cookie.length>0)
	  {
	  c_start=document.cookie.indexOf(c_name + "=");
	  if (c_start!=-1)
		{
		c_start=c_start + c_name.length+1;
		c_end=document.cookie.indexOf(";",c_start);
		if (c_end==-1) c_end=document.cookie.length;
		return unescape(document.cookie.substring(c_start,c_end));
		}
	  }
	return "";
}

function setCookie(c_name,value,expiredays){
	var exdate=new Date();
	exdate.setDate(exdate.getDate()+expiredays);
	document.cookie=c_name+ "=" +escape(value)+
	((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
}
