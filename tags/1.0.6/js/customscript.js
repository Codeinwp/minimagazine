jQuery(document).ready(function () { 
	jQuery('ul.sub-menu').parent().css('padding-bottom','0');
	jQuery('ul.sub-menu').parent().css('border-bottom','none');
	
	if(jQuery('#headerOuter').hasClass('tmp')) {
		jQuery('#headerOuter .postDetails h1').css('color','#5d5d5d');
	}
});