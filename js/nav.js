jQuery('#sub-navbar').scrollToFixed();
var lastId,
	topMenu = jQuery("#sub-navbar"),
	topMenuHeight = topMenu.outerHeight()+15,
	divs = jQuery('.single-portfolio__image');
	first_div = jQuery('.single-portfolio__image').get(0).id;
	first_divId = '#' +first_div;
    // Anchors corresponding to menu items
    scrollItems = divs.map(function(){
      var item = jQuery(this);
      if (item.length) { 
      	return item; }
    });
    
// Bind to scroll
jQuery(window).scroll(function(){
   // Get container scroll position
   var fromTop = jQuery(this).scrollTop()+topMenuHeight;

   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if (jQuery(this).offset().top < fromTop) {
     	var label = jQuery(this).find('.project-label').text();
     	jQuery('.project__label-meta').replaceWith(
     		'<span class="nav-link project__label-meta">' + label + '</span>'
     	);
     } 

   });
     if (jQuery(first_divId).offset().top > fromTop) {
				jQuery('.project__label-meta').empty();
     } 
});