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
//---------------for lastest_news-------------------------		
	$(".lastest_news h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBoxp:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".lastest_news h3").removeClass("active");
	});
//---------------for webcast-------------------------		
	$(".webcast h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBoxp:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".webcast h3").removeClass("active");
	});

//---------------for event display-------------------------		
	$(".large_colBox h3").click(function(){
		$(this).next("#mycustomscroll2").slideToggle("slow")
		.siblings("#mycustomscroll2p:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".large_colBox h3").removeClass("active");
	});
	
//---------------for largeGeneralNews1-------------------------		
	$(".largeGeneralNews1 h3, .largeGeneralNews2 h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBox:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".largeGeneralNews1 h3, .largeGeneralNews2 h3").removeClass("active");
	});
	$(".largeGeneralNews1 h3, .largeGeneralNews2 h3").toggleClass("active");
	$(".largeGeneralNews1 h3, .largeGeneralNews2 h3").click(function(){
		$(this).next(".subBoxOpen").slideToggle("slow")
		.siblings(".subBoxOpen:visible").slideUp("slow");
		$(this).toggleClass("inactive");
		$(this).siblings(".largeGeneralNews1 h3, .largeGeneralNews2 h3").removeClass("active");
	});	
//---------------for .genNewBox1, .genNewBox2-------------------------		
	$(".genNewBox1 h3").click(function(){
		$(this).next(".subBox").slideToggle("slow")
		.siblings(".subBox:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings(".genNewBox1 h3").removeClass("active");
	});
	$(".genNewBox1 h3").toggleClass("active");
	$(".genNewBox1 h3").click(function(){
		$(this).next(".subBoxOpen").slideToggle("slow")
		.siblings(".subBoxOpen:visible").slideUp("slow");
		$(this).toggleClass("inactive");
		$(this).siblings(".genNewBox1 h3").removeClass("active");
	});	

});