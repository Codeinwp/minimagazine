jQuery(window).load(function() {
	// Slider jQuery Cycle Script
	jQuery("#slideshow").cycle({
		fx:    'fade',
		sync:   0, 
    	delay: -2000,
    	pause: 1,
    	next: ".sliderNav .next",
    	prev: ".sliderNav .prev"
	});
});
jQuery(function() {

	// TipTip Tooltip Script
	jQuery(".soc-icon").tipTip({
		delay: 200,
		maxWidth: "auto"
	});

	// Tabbed Container Magic
	jQuery('.tabbedContainer #tabs li a:not(:first)').addClass('inactive'); 
	jQuery('.tabbedContainer .tabContent:not(:first)').hide(); 
	jQuery('.tabbedContainer #tabs li a').click(function(){
	    var t = jQuery(this).attr('href');
	    if(jQuery(this).hasClass('inactive')){ //this is the start of our condition 
		    jQuery('.tabbedContainer #tabs li a').addClass('inactive');		 
		    jQuery(this).removeClass('inactive');
		    jQuery('.tabContent').hide();
		    jQuery(t).fadeIn('slow');	
		}
	    return false;

	});
});