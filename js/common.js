jQuery(document).ready(function() {

	jQuery("body").niceScroll({
		horizrailenabled : false,
		"verge" : "500"
	});


});	

function show(){
	jQuery('#loadMore').hide();
	jQuery('.more').css("display","block");
	}

jQuery(window).on('load', function() {

	jQuery(".loader_inner").fadeOut();
	jQuery(".loader").delay(400).fadeOut("slow");

});
        

