/* -----------------------------------------------------------

[ Custom Settings ]

01. ScrollIt
02. Preloader
03. Navbar scrolling background
04. Close navbar-collapse when a clicked
05. Sections background image from data background 
06. Slider-Fade owlCarousel
07. Services owlCarousel
08. Services 2 owlCarousel
09. Team owlCarousel
10. Testimonials owlCarousel
11. Clients owlCarousel
12  Blog owlCarousel
13. MagnificPopup (Image, Youtube, Vimeo & Custom PopUp)
14. Accordion
15. Isotope Active Masonry Gallery
16. Animations
17. YouTubePopUp
18. Select2
19. Datepicker
20. Scroll back to top
21. Contact Form

----------------------------------------------------------- */

$(function () {
    
    "use strict";
    var wind = $(window);
    // ScrollIt
    $.scrollIt({
        upKey: 38, // key code to navigate to the next section
        downKey: 40, // key code to navigate to the previous section
        easing: 'swing', // the easing function for animation
        scrollTime: 600, // how long (in ms) the animation takes
        activeClass: 'active', // class given to the active nav element
        onPageChange: null, // function(pageIndex) that is called when page is changed
        topOffset: -70 // offste (in px) for fixed top navigation
    });
    
    // Preloader
    $("#preloader").fadeOut(500);
    $(".preloader-bg").delay(500).fadeOut(500);
    var wind = $(window);
    
    // Navbar scrolling background
    wind.on("scroll", function () {
        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar"),
            logo = $(".navbar .logo> img");
        if (bodyScroll > 100) {
            navbar.addClass("nav-scroll");
            logo.attr('src', 'img/logo-dark.png');
        } else {
            navbar.removeClass("nav-scroll");
            logo.attr('src', 'img/logo-light.png');
        }
    });
    
    // Close navbar-collapse when a clicked
    $(".navbar-nav .dropdown-item a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });
    
    // Close mobile menu "on click"
    $(function(){ 
         var navMain = $(".scroll-init");
         navMain.on("click", "a", null, function () {
             navMain.collapse('hide');
         });
     });
    
    // Sections background image from data background
    var pageSection = $(".bg-img, section");
    pageSection.each(function (indx) {
        if ($(this).attr("data-background")) {
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });
    
    // Slider-Fade owlCarousel
    var owl = $('.header .owl-carousel');
    $('.slider-fade .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        nav: false,
        navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>']
    });
    owl.on('changed.owl.carousel', function (event) {
        var item = event.item.index - 2; // Position of the current item
        $('h6').removeClass('animated fadeInUp');
        $('h1').removeClass('animated fadeInUp');
        $('p').removeClass('animated fadeInUp');
        $('.button-1').removeClass('animated fadeInUp');
        $('.button-2').removeClass('animated fadeInUp');
        $('.button-3').removeClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h6').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.button-1').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.button-2').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.button-3').addClass('animated fadeInUp');
    });
    
    // Services 1 owlCarousel
    $('.services1 .owl-carousel').owlCarousel({
        loop: true
        , margin: 15
        , mouseDrag: true
        , autoplay: false
        , autoplayTimeout: 5000
        , dots: false
        , nav: false
        , navText: ["<span class='lnr ti-angle-left'></span>","<span class='lnr ti-angle-right'></span>"]
        , autoplayHoverPause:true
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            , }
            , 600: {
                items: 2
            }
            , 1000: {
                items: 3
            }
        }
    });
    
    // Services 2 owlCarousel
    $('.services2 .owl-carousel').owlCarousel({
        loop: true
        , margin: 15
        , mouseDrag: true
        , autoplay: false
        , autoplayTimeout: 5000
        , dots: true
        , nav: false
        , navText: ["<span class='lnr ti-angle-left'></span>","<span class='lnr ti-angle-right'></span>"]
        , autoplayHoverPause:true
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            , }
            , 600: {
                items: 1
            }
            , 1000: {
                items: 1
            }
        }
    });
    
    // Team owlCarousel
    $('.team .owl-carousel').owlCarousel({
        loop: true
        , margin: 15
        , mouseDrag: true
        , autoplay: false
        , autoplayTimeout: 5000
        , dots: false
        , nav: false
        , navText: ["<span class='lnr ti-angle-left'></span>","<span class='lnr ti-angle-right'></span>"]
        , autoplayHoverPause:true
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1
            , }
            , 600: {
                items: 2
            }
            , 1000: {
                items: 3
            }
        }
    });

    // Testimonials owlCarousel
    $('.testimonials .owl-carousel').owlCarousel({
        loop:true,
        margin: 30,
        mouseDrag:true,
        autoplay:false,
        autoplayTimeout: 5000,
        dots: false,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>","<span class='lnr ti-angle-right'></span>"],
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    
    // Clients owlCarousel
    $('.clients .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        mouseDrag: true,
        autoplay: true,
        autoplayTimeout: 5000,
        dots: false,
        nav: false,
        navText: ["<span class='lnr ti-angle-left'></span>","<span class='lnr ti-angle-right'></span>"],
        responsiveClass: true,
        responsive: {
            0: {
                margin: 10,
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });
    
    // Blog owlCarousel 
    $('.blog1 .owl-carousel').owlCarousel({
        loop: true
        , margin: 15
        , mouseDrag: true
        , autoplay: false
        , dots: true
        , nav: false
        , navText: ["<span class='lnr ti-angle-left'></span>","<span class='lnr ti-angle-right'></span>"]
        , autoplayHoverPause:true
        , responsiveClass: true
        , responsive: {
            0: {
                items: 1,
                dots: true
            , }
            , 600: {
                items: 2,
                dots: true
            }
            , 1000: {
                items: 3
            }
        }
    });
    
    // MagnificPopup
    $(".img-zoom").magnificPopup({
        type: "image",
        closeOnContentClick: !0,
        mainClass: "mfp-fade",
        gallery: {
            enabled: !0,
            navigateByImgClick: !0,
            preload: [0, 1]
        }
    })
    $('.magnific-youtube, .magnific-vimeo, .magnific-custom').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 300,
        preloader: false,
        fixedContentPos: false
    });
    
    // Accordion
    if ($(".accordion-box").length) {
        $(".accordion-box").on("click", ".acc-btn", function () {
          var outerBox = $(this).parents(".accordion-box");
          var target = $(this).parents(".accordion");

          if ($(this).next(".acc-content").is(":visible")) {
            //return false;
            $(this).removeClass("active");
            $(this).next(".acc-content").slideUp(300);
            $(outerBox).children(".accordion").removeClass("active-block");
          } else {
            $(outerBox).find(".accordion .acc-btn").removeClass("active");
            $(this).addClass("active");
            $(outerBox).children(".accordion").removeClass("active-block");
            $(outerBox).find(".accordion").children(".acc-content").slideUp(300);
            target.addClass("active-block");
            $(this).next(".acc-content").slideDown(300);
          }
        });
      }
    
    // Isotope Active Masonry Gallery
    $('.gallery-items').imagesLoaded(function () {
        // Add isotope on click filter function
        $('.gallery-filter li').on('click', function () {
            $(".gallery-filter li").removeClass("active");
            $(this).addClass("active");
            var selector = $(this).attr('data-filter');
            $(".gallery-items").isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });
            return false;
        });
        $(".gallery-items").isotope({
            itemSelector: '.single-item',
            layoutMode: 'masonry',
        });
    });
    
    // Animations
    var contentWayPoint = function () {
        var i = 0;
        $('.animate-box').waypoint(function (direction) {
            if (direction === 'down' && !$(this.element).hasClass('animated')) {
                i++;
                $(this.element).addClass('item-animate');
                setTimeout(function () {
                    $('body .animate-box.item-animate').each(function (k) {
                        var el = $(this);
                        setTimeout(function () {
                            var effect = el.data('animate-effect');
                            if (effect === 'fadeIn') {
                                el.addClass('fadeIn animated');
                            } else if (effect === 'fadeInLeft') {
                                el.addClass('fadeInLeft animated');
                            } else if (effect === 'fadeInRight') {
                                el.addClass('fadeInRight animated');
                            } else {
                                el.addClass('fadeInUp animated');
                            }
                            el.removeClass('item-animate');
                        }, k * 200, 'easeInOutExpo');
                    });
                }, 100);
            }
        }, {
            offset: '85%'
        });
    };
    $(function () {
        contentWayPoint();
    });
    
    // YouTubePopUp
    $("a.vid").YouTubePopUp();
    
    // Select2
    $('.select2').select2({
        minimumResultsForSearch: Infinity,
    });
    
    // Datepicker
    $(".datepicker").datepicker({
        orientation: "top"
    });
    
    // Scroll back to top
    var progressPath = document.querySelector('.progress-wrap path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    $(window).scroll(updateProgress);
    var offset = 150;
    var duration = 550;
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
        } else {
            jQuery('.progress-wrap').removeClass('active-progress');
        }
    });
    jQuery('.progress-wrap').on('click', function (event) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: 0
        }, duration);
        return false;
    }) 
    
    // Reveal Effect
    var scroll = window.requestAnimationFrame
    ||
    // IE Fallback
    function (callback) {
      window.setTimeout(callback, 3000)
    };
    var elementsToShow = document.querySelectorAll('.reveal-effect');
    function loop() {
    Array.prototype.forEach.call(elementsToShow, function (element) {
      if (isElementInViewport(element)) {
        element.classList.add('animated');
      }
    });
    scroll(loop);
   }
    // Call the loop for the first time
    loop();
    // Helper function from: http://stackoverflow.com/a/7557433/274826
    function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
      el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
      (rect.top <= 0
        && rect.bottom >= 0)
      || (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight)
        && rect.top <= (window.innerHeight || document.documentElement.clientHeight))
      || (rect.top >= 0
        && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
  }
    // Magnet Cursor
    function magnetize(el, e) {
    var mX = e.pageX,
      mY = e.pageY;
    const item = $(el);
    const customDist = item.data('dist') * 20 || 80;
    const centerX = item.offset().left + (item.width() / 2);
    const centerY = item.offset().top + (item.height() / 2);
    var deltaX = Math.floor((centerX - mX)) * -0.35;
    var deltaY = Math.floor((centerY - mY)) * -0.35;
    var distance = calculateDistance(item, mX, mY);
    if (distance < customDist) {
      TweenMax.to(item, 0.5, {
        y: deltaY,
        x: deltaX,
        scale: 1
      });
      item.addClass('magnet');
    } else {
      TweenMax.to(item, 0.6, {
        y: 0,
        x: 0,
        scale: 1
      });
      item.removeClass('magnet');
    }
  }
    function calculateDistance(elem, mouseX, mouseY) {
    return Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left + (elem.width() / 2)), 2) + Math.pow(mouseY - (elem.offset().top + (elem.height() / 2)), 2)));
    }
    function lerp(a, b, n) {
    return (1 - n) * a + n * b
    }
  
    // Mouse Cursor
    class Cursor {
    constructor() {
      this.bind()
      //seleziono la classe del cursore
      this.cursor = document.querySelector('.js-cursor')
      this.mouseCurrent = {
        x: 0,
        y: 0
      }
      this.mouseLast = {
        x: this.mouseCurrent.x,
        y: this.mouseCurrent.y
      }
      this.rAF = undefined
    }

    bind() {
      ['getMousePosition', 'run'].forEach((fn) => this[fn] = this[fn].bind(this))
    }

    getMousePosition(e) {
      this.mouseCurrent = {
        x: e.clientX,
        y: e.clientY
      }
    }

    run() {
      this.mouseLast.x = lerp(this.mouseLast.x, this.mouseCurrent.x, 0.2)
      this.mouseLast.y = lerp(this.mouseLast.y, this.mouseCurrent.y, 0.2)

      this.mouseLast.x = Math.floor(this.mouseLast.x * 100) / 100
      this.mouseLast.y = Math.floor(this.mouseLast.y * 100) / 100

      this.cursor.style.transform = `translate3d(${this.mouseLast.x}px, ${this.mouseLast.y}px, 0)`

      this.rAF = requestAnimationFrame(this.run)
    }

    requestAnimationFrame() {
      this.rAF = requestAnimationFrame(this.run)
    }

    addEvents() {
      window.addEventListener('mousemove', this.getMousePosition, false)
    }

    on() {
      this.addEvents()

      this.requestAnimationFrame()
    }

    init() {
      this.on()
    }
  }
    if ($('.js-cursor').length > 0) {
    const cursor = new Cursor()
    cursor.init();
  // Cursor Conditions
    $('.team .owl-theme .item, .blog1 .owl-theme .item, .services1 .owl-theme .item, .services2 .owl-theme .item, .testimonials .item-box, .gallery-item .item').hover(function () {
      $('.cursor').toggleClass('drag');
    });
      
    // Cursor Class Settings
//    $('a').hover(function () {
//    $('.cursor').toggleClass('light');
//    });
        
  }
    
    // Contact Form
    var form = $('.contact__form'),
    message = $('.contact__msg'),
    form_data;
    // success function
    function done_func(response) {
        message.fadeIn().removeClass('alert-danger').addClass('alert-success');
        message.text(response);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);
        form.find('input:not([type="submit"]), textarea').val('');
    }
    // fail function
    function fail_func(data) {
        message.fadeIn().removeClass('alert-success').addClass('alert-success');
        message.text(data.responseText);
        setTimeout(function () {
            message.fadeOut();
        }, 2000);
    }
    form.submit(function (e) {
        e.preventDefault();
        form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form_data
        }).done(done_func).fail(fail_func);
    }); 
    
});
