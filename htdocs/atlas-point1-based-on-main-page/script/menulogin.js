function initMenu() {

  $('.slidingmenu ul').hide();
  $('.slidingmenu1 ul').hide();
  $('.slidingmenu ul:first').show();
  $('.slidingmenu1 ul:first').show();
 /* $('#menu ul:first').show();*/
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
        return false;
        }
      }
    );
  }


 
 

$(document).ready(function() {
						   
						   initMenu();
									
									
									   });