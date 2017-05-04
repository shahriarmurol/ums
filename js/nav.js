$(document).ready(function(){
	$("#navicon").on("click", function(){
		$("nav ul").toggle();
	});

	$(".menu li").on("click", function(){
		$(".sub-menu").toggle();
	});
});