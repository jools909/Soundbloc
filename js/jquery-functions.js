$( document ).ready(function() {

  	$(".open-button").click(function(){
  		$(".open-button").css("display", "none");
		$(".close-button").css("display", "block");
  	});

  	$(".close-button").click(function(){
  		$(".open-button").css("display", "block");
		$(".close-button").css("display", "none");
  	});
});