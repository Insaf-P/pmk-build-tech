$(function () {
    var pageSection = $(".bg-img, section");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });


    var didScroll;
		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('.navbar').outerHeight();
		$(window).scroll(function(event){
		    didScroll = true;
		});

		setInterval(function() {
		    if (didScroll) {
		        hasScrolled();
		        didScroll = false;
		    }
		}, 250);

		function hasScrolled() {
		    var st = $(this).scrollTop();
		    
		    // Make sure they scroll more than delta
		    if(Math.abs(lastScrollTop - st) <= delta)
		        return;
		    
		    // If they scrolled down and are past the navbar, add class .nav-up.
		    // This is necessary so you never see what is "behind" the navbar.
		    if (st > lastScrollTop && st > navbarHeight){
		        // Scroll Down
		        $('.navbar').css('top','-80px');
		    } else {
		        // Scroll Up
		        if(st + $(window).height() < $(document).height()) {
		            $('.navbar').css('top','0');
		        }
		    }
		    
		    lastScrollTop = st;
		}


    function showIt() {
      const toBeShown = document.querySelectorAll(".booger"); // consider adding :not(.scrolled) to selector to reduce the number of iterations if you don't want to support scrolling up
    
      // consider taking this outside of the loop and resetting it on window resize to optimize the loop
      const halfScreen = window.innerHeight / 900;
    
      toBeShown.forEach((item, i) => {
        const scrolled = window.scrollY + window.innerHeight; // - (item.offsetHeight/2);
    
        if (item.offsetTop - window.scrollY < halfScreen) {
          item.classList.add('scrolled');
        } else {
          item.classList.remove('scrolled');
        }
      });
    
    }
    
    window.addEventListener('scroll', showIt);


    
    $('.counter').counterUp({
        delay: 10,
        time: 2000
      });
      $('.counter').addClass('animated fadeInDownBig');
      $('h3').addClass('animated fadeIn');

      $(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 8,
        loop: true,
        margin: 20,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 0,
        autoplaySpeed: 3000,
        autoplayHoverPause: false

    });


  
  

});


$(function() {
  $('.scroll-down').click (function() {
    $('html, body').animate({scrollTop: $('section.scroll-to').offset().top }, 'slow');
    return false;
  });
});



  $(function(){
      $(".grid").masonry({ itemSelector: ".grid-item" });
      
      $(".filtering").on("click", "span", function () {
          var a = $(".gallery").isotope({});
          var e = $(this).attr("data-filter");
          a.isotope({ filter: e });
      });
      $(".filtering").on("click", "span", function () {
          $(this).addClass("active").siblings().removeClass("active");
      });
  }) 


// client-logo
$('.brand-carousel').owlCarousel({
    loop:true,
    margin:80,
    autoplay:true,
    infinite: true,
    autoplayTimeout:2000,
    speed: 2000,
    fade: true,
    autoplayHoverPause: false,
    responsive:{
      0:{
        items:3
      },
      600:{
        items:3
      },
      1000:{
        items:6
      }
    }
  })
  
  // services
$('.services-carousel').owlCarousel({
  margin:10,
  autoplay:false,
  autoplayTimeout:2000,
  speed: 2000,
  dots:true,
  stagePadding: 10,
  // center:true,
  fade: true,
  autoplayHoverPause: false,
  responsive:{
    0:{
      stagePadding: 30,
      items:1
    },
    600:{
      stagePadding: 80,
      items:1
    },
    1024:{
      stagePadding: 60,
      items:2
      
    },
    1440:{
      stagePadding: 120,
      items:2
      
    }
  }
}) 

  // project-slide
  $('.project-slide').owlCarousel({
    margin:20,
    autoplay:false,
    autoplayTimeout:2000,
    speed: 2000,
    dots:true,
    // center:true,
    fade: true,
    autoplayHoverPause: false,
    responsive:{
      0:{
        items:2
      },
      600:{
        items:2
      },
      1000:{
        stagePadding: 120,
        items:2
        
      }
    }
  }) 

  // testimonials
  $('.testimonials').owlCarousel({
    margin:10,
    autoplay:false,
    loop:true,
    autoHeight: true,
    autoplayTimeout:2000,
    speed: 2000,
    dots:true,
    nav:true,
    navText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
    fade: true,
    autoplayHoverPause: false,
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





      

  
  $(document).ready(function() {
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
  
        fixedContentPos: false
    });
  });


});






// Slider 
$(document).ready(function () {
    var owl = $('.header .owl-carousel');
    // Slider owlCarousel
    $('.slider .owl-carousel').owlCarousel({
        items: 1
        , loop: true
        , dots: true
        , margin: 0
        , autoplay: true
        , smartSpeed: 500
        , animateOut: 'fadeOut'
        
         
    });
    // Slider owlCarousel
    $('.slider-fade .owl-carousel').owlCarousel({
        items: 1
        , loop: true
        , dots: true    
        , nav: true
        ,navText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"]
        , margin: 0
        , autoplay: false
        , smartSpeed: 500
        ,autoplayTimeout:5000
        , animateOut: 'fadeOut'
        ,touchDrag: false
        ,mouseDrag: false
    });
    owl.on('changed.owl.carousel', function (event) {
        var item = event.item.index - 2; // Position of the current item
        $('.image-logo').removeClass('animated fadeInDown');
        $('h4').removeClass('animated fadeInUp');
        $('h1').removeClass('animated fadeInUp');
        $('p').removeClass('animated fadeInUp');
        $('.btn').removeClass('animated zoomIn');
        $('.owl-item').not('.cloned').eq(item).find('.image-logo').addClass('animated fadeInDown');
        $('.owl-item').not('.cloned').eq(item).find('h4').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.btn').addClass('animated zoomIn');
    });

    
});

new WOW().init();

$('.reset').click(function(){
  new WOW().init();
})