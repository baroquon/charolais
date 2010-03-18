jQuery(function(){
	jQuery(".photo_thumb_bg").hover(function() {
		jQuery(this).children(".featured-info").animate({opacity: "show"}, "slow");
	}, function() {
		jQuery(this).children(".featured-info").animate({opacity: "hide"}, "fast");
	});
});
