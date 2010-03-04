$(document).ready(function(){
	
	//$(".lastest_news h3").eq(0).addClass("active");
	//$(".subBox").eq(0).show();
//---------------for tophead-------------------------
	$(".topHead h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBox:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".topHead h3").removeClass("active");
	});
	
//---------------for middleHead-------------------------
	$(".middleHead h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBoxp:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".middleHead h3").removeClass("active");
	});
	
	//---------------for middleHeadMid Rudra edited this LINE-------------------------
	/*
	$(".middleHeadMid h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBoxp:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".middleHeadMid h3").removeClass("active");

	});
	*/
	//---------------for Services & Tools Rudra edited this LINE-------------------------
	/*
	$(".middleHeadServices h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBoxp:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".middleHeadServices h3").removeClass("active");

	});
	*/
	
	//---------------for Detector Activities Rudra edited this LINE-------------------------
	/*
	$(".middleHeadDetector h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBoxp:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".middleHeadDetector h3").removeClass("active");

	});
	*/
	
//---------------for lastest_news-------------------------
/*
	$(".lastest_news h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBoxp:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".lastest_news h3").removeClass("active");
	});
	*/
//---------------for webcast-------------------------	
/*
	$(".webcast h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBoxp:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".webcast h3").removeClass("active");
	});
	*/

//---------------for event display-------------------------		
	$(".large_colBox h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBoxp:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".large_colBox h3").removeClass("active");
	});

});