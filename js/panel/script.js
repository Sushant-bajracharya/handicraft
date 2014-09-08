$(function(){
	
	
	// iframe height -------------------------------
	$(window).resize(function(){
		$("#iframe").height( $(window).height() - 50 );
	}).resize();
	
	
	// select --------------------------------------
	$(".select_box").hover(function(){
		$(this).addClass("active");
		$(this).children("ul").css("display","block");
	}, function(){
		$(this).removeClass("active");
		$(this).children("ul").css("display","none");
	});
	
	
	/* theme change -------------------------------
	$(".select_box ul li a").click(function(e){
		e.preventDefault();
		
		var name = $(this).children('span').text();
		$('title').text(name + ' | Muffin group');
		
		var full_name = $(this).attr('rel');
		$('.title').text(full_name);
		
		var url_buy = $(this).attr('href');
		$('.btn_buy').attr('href',url_buy);
		
		var theme = $(this).children('span').attr('rel');
		var url_demo = 'http://themes.muffingroup.com/' + theme;
		$('.btn_close').attr('href',url_demo);
		$("#iframe").attr('src',url_demo);
	});*/
	
	
	$(".select_box ul li:last-child").addClass('last');
	
	
});