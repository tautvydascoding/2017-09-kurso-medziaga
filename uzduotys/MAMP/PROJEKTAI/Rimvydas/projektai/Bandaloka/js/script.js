// NAVBAR SHOW HIDE

$(document).ready(function () {

    'use strict';

    $(window).scroll(function () {

        'use strict';
        if ($(window).scrollTop() < 80) {


            $('.navbar').css({

                'margin-top': '-100px',
                'opacity': '0'

            });

            $('.navbar-default').css({

                'background-color': 'rgba(59, 59, 59, 0)'

            });
        } else {
            $('.navbar').css({

                'margin-top': '0px',
                'opacity': '1'

            });

            $('.navbar-default').css({

                'background-color': 'rgba(59, 59, 59, 0.7)',
                'border-color': '#444'

            });


            $('.navbar-brand').css({
                'height': '35px',
                'paddign-top': '0px'
            });

            $('.navbar-nav > li > a').css({
                'padding-top': '15px',

            });
        }
    });
});







//SLider
$('.bxslider').bxSlider({
  minSlides: 4,
  maxSlides: 4,
  slideWidth: 170,
  slideMargin: 10,
  ticker: true,
  speed: 6000
});




// ADD SMOOTH SCROLLING
$(document).ready(function () {
     $('a[href^="#"]').on('click', function (e) {
         e.preventDefault();

         var target = this.hash,
             $target = $(target);

         $('html, body').stop().animate({
             'scrollTop': $target.offset().top
         }, 900, 'swing', function () {
             window.location.hash = target;
         });
     });
 });

/* active menu item on click */


$(document).ready(function () {

    'use strict';

    $('.navbar-nav li a').click(function () {
        'use strict';


        $('.navbar-nav li a').parent().removeClass('active');
        $(this).parent().addClass("active");

    });

});

// Highlight menu item on scroll

$(document).ready(function () {

    'use strict';
    $(window).scroll(function () {

        $("section").each(function () {
            'use strict';
            var bb = $(this).attr("id");
            var hei = $(this).outerHeight();
            var grttop = $(this).offset().top - 70;
            
            if ($(window).scrollTop() > grttop && $(window).scrollTop() < grttop + hei) {
                
            $(".navbar-nav li a[href='#"  + bb +"']").parent().addClass("active");
            }else {
                 $(".navbar-nav li a[href='#"  + bb +"']").parent().removeClass("active");
            }
        });

    });

});

// HEADER WORD FADE IN 

    $(".logo").fadeIn("200",function(){
        $(".bio").addClass("wow, fadeIn")
    });

 $(".bio").fadeIn("",function(){
        
    });


