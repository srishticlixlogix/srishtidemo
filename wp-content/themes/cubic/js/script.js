

/*Shanik Sengupta*/




  /*Smooth scroll to id*/

    $('a[href^="#"]').click(function() {

      $('html,body').animate({ scrollTop: $(this.hash).offset().top-170}, 1000);

      return false;

      e.preventDefault();

      });


  /*Smooth scroll to id*/


 

 /*onload
*/

 $( window ).load(function() {

/*onload
*/



/*Add class to section when scroll reaches specific section*/
 	
    $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    $('.page_navigator').toggleClass('stick',
     //add 'ok' class when div position match or exceeds else remove the 'ok' class.
      scroll >= $('#smart-navigator').offset().top
        );
    });
    //trigger the scroll
    $(window).scroll();//ensure if you're in current position when page is refreshed 



/*Add class to section when scroll reaches specific section*/





/*Mobile menu
*/


$(".mobile_hambergure").click(function () {
    $(".header").toggleClass("active");       
});

/*Mobile menu
*/




/*onload
*/

});

/*onload
*/






/*Home Page Cslider*/


	 $('.owl-carousel-banner').owlCarousel({
	    loop:true,
	    nav:true,
	    autoplay: true,
	    dots: true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})



	var owl = $('.owl-carousel-banner');
	owl.owlCarousel();



	// Go to the next item
	$('.customNextBtn-banner').click(function() {
	    owl.trigger('next.owl.carousel');
	})



	// Go to the previous item
	$('.customPrevBtn-banner').click(function() {
	    // With optional speed parameter
	    // Parameters has to be in square bracket '[]'
	    owl.trigger('prev.owl.carousel', [300]);
	})


/*Home Page Cslider*/




/*Load Function*/

$(function(){

    size_li = $("#myList a").size();
    x=9;
    $('#myList a:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+9 <= size_li) ? x+9 : size_li;
        $('#myList a:lt('+x+')').show();

        if ( size_li == x) {
    		$("#loadMore").hide();
    	}

    	if ( x > 9) {
    		$("#showLess").show();
    	}






    });
    $('#showLess').click(function () {
        x=(x-10<0) ? 9 : x-9;
        $('#myList a').not(':lt('+x+')').hide();


        if ( size_li > x) {
    		$("#loadMore").show();
    	}

    	
    	if ( x == 9) {
    		$("#showLess").hide();
    	}
        

    });

    if ( x == 9) {
    		$("#showLess").hide();
    	}











 });

/*Load Function*/







