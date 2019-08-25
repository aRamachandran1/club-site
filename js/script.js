$(function (){

	$("#navbar-Toggle").blur(function(event){
		var screenWidth = window.innerWidth;
		if(screenWidth < 768) {
			$("#navbarSupportedContent").collapse('hide');
		}
	})
});