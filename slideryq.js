$(document).ready(function(){
	function slideryq(){
	$("#img5").fadeOut(2000,function(){
	  $("#img4").fadeOut(2000,function(){
		$("#img3").fadeOut(2000,function(){
			$("#img2").fadeOut(2000,function(){
				$("#img1").fadeOut(2000,function(){
					$("#img1").fadeIn(2000,function(){
						$("#img2").fadeIn(2000,function(){
							$("#img3").fadeIn(2000,function(){
								$("#img4").fadeIn(2000,function(){
									$("#img5").fadeIn(2000,function(){
									});
									});
									});
									});
									});
									});
									});
									});
									});
									});
	}
	setInterval(slideryq,1000);
	
});