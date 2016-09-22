	
	<?php 

	?>
 </div>
</main>
	<footer class='bg-inverse'>
		<div class="container" style="padding-top:1rem;padding-bottom:.5rem;color:rgb(24-,24-,24-);">
			<div class="row">
				<div class="col-xs-12">
					<p>
					<small>
						Built on <a href="http://v4-alpha.getbootstrap.com/" target="_blank">Bootstrap 4</a> &amp; <a href="http://www.wordpress.org" target="_blank">Wordpress</a> designed by <a href="http://twitter.com/whitworthw" target="_blank">@whitworthw</a>. The homepage photos are provided royalty free from the talented photographers over at <a href="http://www.unsplash.com" target="_blank">Unsplash.</a>
					</small>
					</p>
				</div>
			</div>
		</div>
		
	</footer>

    <?php 
    // Include Footer Menu
    if (is_singular('projects')) {
      get_template_part('modules/nav', 'footer');
     }
    ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js">
</script>
    <?php wp_footer(); ?>
<script>
if ('addEventListener' in document) {
    document.addEventListener('DOMContentLoaded', function() {
        FastClick.attach(document.body);
    }, false);
}
    var headerHeight = jQuery("header").height();
    <?php if (!is_home()) {
    	echo "jQuery('main').css('margin-top', headerHeight + 'px');";

    } ?>
    jQuery('.modal-contact a').attr("data-target", "#contactModal").attr( "data-toggle", "modal" );


	// Remove .active if you click anywhere on the doc.
	jQuery(document).on('click', function(event) {
	  if (!jQuery(event.target).closest('.nav__item').length) {
	      jQuery(".nav__item").removeClass('active');      
	  }
	});

	// Open/Close Nav Menu
	jQuery(".nav__navicon").on('click', function() {
	  jQuery(this).toggleClass('open');
	  jQuery('.nav__mobile').toggleClass('open');
	});

	// Remove/Toggle .active on click.
	jQuery(".nav__drop").on('click', function() {
	  jQuery(this).toggleClass('active').siblings().removeClass('active');
	});
	jQuery('#sub-navbar').scrollToFixed();




var lastId,
	cur_title = '<span class="hidden-sm-up"><?php echo the_title();?></span>',
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
				jQuery('.project__label-meta').html(cur_title);
     } 

});




  var toggles = document.querySelectorAll(".c-hamburger");

  for (var i = toggles.length - 1; i >= 0; i--) {
    var toggle = toggles[i];
    toggleHandler(toggle);
  };

  function toggleHandler(toggle) {
    toggle.addEventListener( "click", function(e) {
      e.preventDefault();
      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
    });
  }
jQuery(document).ready(function($){
  // browser window scroll (in pixels) after which the "back to top" link is shown
  var offset = 300,
    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
    offset_opacity = 1200,
    //duration of the top scrolling animation (in ms)
    scroll_top_duration = 700,
    //grab the "back to top" link
    $back_to_top = $('#sub-navbar-bottom');
    //grab the "back to top" link
    $to_top = $('.cd-top');

  //hide or show the "back to top" link
  $(window).scroll(function(){
    ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
    if( $(this).scrollTop() > offset_opacity ) { 
      $back_to_top.addClass('cd-fade-out');
    }
  });

  //smooth scroll to top
  $to_top.on('click', function(event){
    event.preventDefault();
    $('body,html').animate({
      scrollTop: 0 ,
      }, scroll_top_duration
    );
  });
});
</script>


  </body>
</html>