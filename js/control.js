
	
	$(function() {
	$(window).scroll(function(){
		var scrolltop=$(this).scrollTop();		
		if(scrolltop>=40){	/*导航条出现时间*/	
			$("#elevator_item").show();
		}else{
			$("#elevator_item").hide();
		}
	});		
	$("#elevator").click(function(){
		$("html,body").animate({scrollTop: 43}, 900);	/*向上滚动和滚动速度*/
	});	
	$(".qr").hover(function(){
		$(".qr-popup").show();
	},function(){
		$(".qr-popup").hide();
	});	

	$(".qr").click(
		function (){
			top.window.location ='view/login.php';/*登录页*/
		}
	);
	

	
});