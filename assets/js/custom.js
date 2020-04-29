jQuery(document).ready(function ($) {
    
    //Set the carousel options
    $('#quote-carousel').carousel({
        pause: true,
        interval: 4000,
    });
    // fancybox
    $(".fancybox").fancybox();
    //isotope
    if ($('.isotopeWrapper').length) {
        var $container = $('.isotopeWrapper');
        var $resize = $('.isotopeWrapper').attr('id');
        // initialize isotope
        $container.isotope({
            itemSelector: '.isotopeItem',
            resizable: false, // disable normal resizing
            masonry: {
                columnWidth: $container.width() / $resize
            }
        });
        $("a[href='#top']").click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
        $('.navbar-inverse').on('click', 'li a', function () {
            $('.navbar-inverse .in').addClass('collapse').removeClass('in').css('height', '1px');
        });
        $('#filter a').click(function () {
            $('#filter a').removeClass('current');
            $(this).addClass('current');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 1000,
                    easing: 'easeOutQuart',
                    queue: false
                }
            });
            return false;
        });
        $(window).smartresize(function () {
            $container.isotope({
                // update columnWidth to a percentage of container width
                masonry: {
                    columnWidth: $container.width() / $resize
                }
            });
        });
    }

    // make class active
        $(window).load(function () {
        var url = window.location.href;
       // var fname = url.slice(url.lastIndexOf("/") + 1, url.lastIndexOf(".php"));
         var fname = url.slice(url.lastIndexOf("/") + 1);
        var act_elem;
        fname = fname == "" ? "index" : fname;
        //fname = fname == "about-sfm" || fname == "about-manish-ramuka" ? "about" : fname;
        //fname = fname == "notes" || fname == "video-lectures" ? "our-content" : fname;
        console.log(url, fname);
        $("#li_" + fname).addClass("active");
        if (fname == 'landing') {
             $('button#toggle-form').click();
$('input#username').focus();
        }
    });

        // Dropdown on hover
      $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
      }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
      });

      // fancybox
      $(".fancybox").fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic',
      openSpeed : '1000ms',   
      padding : 0
      // openMethod  : 'zoomIn'
     
  });
// $(window).scroll(function() {
// if ($(this).scrollTop() > 1){  
//     $('#head').addClass("sticky");
//   }
//   else{
//     $('#head').removeClass("sticky");
//   }
// });
     jQuery('.owl-carousel').owlCarousel({
        navText: [" ", " "],
      navClass: ['owl-prev', 'owl-next'],
        loop:true,
        margin:10,
        nav:true,
        autoplay: true,
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
});