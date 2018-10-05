// Hello.
//
// This is The Scripts used for ___________ Theme
//
//

function main() {

(function () {
   'use strict';

    /*====================================
    Main Navigation Stick to Top when Scroll
    ======================================*/


  // $("li.dropdown").hover(function(){
  //
  //   console.log("calling custom menu");
  //   $(this).closest("a")
  //     .addClass('active')
  //   .end()
  //   .find('[data-toggle="tab"]')
  //     .attr('aria-expanded', true)
  //  });


    function sticky_relocate() {
	    var window_top = $(window).scrollTop();
	    var div_top = $('#sticky-anchor').offset().top;
	    if (window_top > div_top) {
	        $('#main-menu').addClass('stick');
					$('.second-class').show();

	    } else {
	        $('#main-menu').removeClass('stick');
				$('.second-class').hide();

	    }
	}

	$(function () {
	    $(window).scroll(sticky_relocate);
	    sticky_relocate();
	});


	/*====================================
	//Portfolio Carousel
	======================================*/
	var owl = $("#portfolio-items");
	  owl.owlCarousel({

	      itemsCustom : [
	        [0, 1],
	        [450, 1],
	        [660, 2],
	        [700, 3],
	        [1200, 3],
	        [1600, 3]
	      ],
	      navigation : true,
	      navigationText: ["<i class='fa fa-chevron-circle-left'></i>","<i class='fa fa-chevron-circle-right'></i>"],
	      pagination: false,
	  });

	/* ==============================================
  	Testimonial Slider
  	=============================================== */
	 $("#testimonial").owlCarousel({

	        navigation : false, // Show next and prev buttons
	        slideSpeed : 300,
	        paginationSpeed : 400,
	        singleItem:true,
	        autoHeight : true

	    });

      /*custom menu function*/



  	/*====================================
    Portfolio Isotope Filter
    ======================================*/
        var $container = $('#itemsWork');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
								//items: 3,
                queue: false
            }
        });
        $('.cat a').click(function() {
            $('.cat .active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,

                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
        $container.imagesLoaded()
		  .progress( function() {
		    // trigger reLayout everytime an image loads
		    $container.isotope('reLayout');
		  });


    /*====================================
    Nivo Lightbox
    ======================================*/
    // Agency Portfolio Popup
    $('#popup a').nivoLightbox({
            effect: 'slideDown',
            keyboardNav: true,
        });

 	/*====================================
   	Accordion Active Calling
    ======================================*/
    // When we click on the Panel heading
	$("#accordion3>.panel-default > .panel-heading").click(function(){
	  // If this isn't already active
	  if (!$(this).hasClass("active")) {
	    // Remove the class from anything that is active
	    $("#accordion3>.panel-default > .panel-heading.active").removeClass("active");
	    // And make this active
	    $(this).addClass("active");
	  }
	});

	// When we click on the Panel heading
	$("#accordion4>.panel-default > .panel-heading").click(function(){
	  // If this isn't already active
	  if (!$(this).hasClass("active")) {
	    // Remove the class from anything that is active
	    $("#accordion4>.panel-default > .panel-heading.active").removeClass("active");
	    // And make this active
	    $(this).addClass("active");
	  }
	});

}());


	if($("#main-menu").hasClass("stick")){

	}


}
main();


  
