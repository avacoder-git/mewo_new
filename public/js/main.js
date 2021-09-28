$( document ).ready(function(){
    $('.lang-bg').click(function(){
        $('.lang-menu').css('opacity', 1);
    });

    $('.region').click(function (){
        $('.region-menu').toggleClass('region-index');
        $('.down').toggleClass('down-animate');

    });
    $('.region-item').click(function (){
        $('.down').toggleClass('down-animate');
        // if($('.region-menu').hasClass('region-index')){
            $('.region-menu').toggleClass('region-index');
        // }
    });
    $('.region2').click(function (){
        $('.down').toggleClass('down-animate');
        $('.region-menu2').toggleClass('region-index');


    });
    $('.region-item2').click(function (){
        // $('.region-menu2').toggleClass('region-index');
        $('.down').toggleClass('down-animate');
        // if($('.region-menu2').hasClass('region-index')){
            $('.region-menu2').toggleClass('region-index');
        // }

    });
    $('.more-btn').click(function (){
        $('.more-telegram').toggleClass('more-telegram-animate');
        $('.more-whatsapp').toggleClass('more-whatsapp-animate');
        $('.more-phone').toggleClass('more-phone-animate');
        $('.more-instagram').toggleClass('more-instagram-animate');
    });

    $('.owl-carousel1').owlCarousel({
            startPosition: 0,
            margin: 0,
            autoplay: true,
            nav: true,
            pagination :true,
            autoplayTimeout:1500,
            responsiveClass:true,
        navText:["<img src=\"images/left.svg\" alt=\"\" href=\"#myCarousel\">","<img src=\"images/left.svg\" href=\"#myCarousel\" style=\"transform: rotate(180deg)\"  alt=\"\">"],

        responsive:{
                0:{

                    items:1.5
                },
                480:{

                    items:1.5
                },
                568:{

                    items:1.5
                },
                667:{

                    items:3
                },
                768:{

                    items:3
                },
                1024:{
                    items:3
                }
            }
        });

    $('.desease').css('height', $('.img-overlay-inner').height());
});

$(function(){
    $('.slide1').owlCarousel({

        navText:["<img src=\"images/left.svg\" alt=\"\" href=\"#myCarousel\">","<img src=\"images/left.svg\" href=\"#myCarousel\" style=\"transform: rotate(180deg)\"  alt=\"\">"],


        responsive:{
            0:{

                items:1.5
            },
            480:{

                items:1.5
            },
            568:{

                items:1.5
            },
            667:{

                items:2.5
            },
            768:{

                items:2.5
            },
            1024:{
                items:2.5
            }

        },

        margin:30,
        nav:true,
        dots:false,
        onInitialized:counter,
        onTranslated:counter
    });
    function counter(event) {
        var items = event.item.count;
        var item = event.item.index + 2.5;
        var sldWidth = 100;
        var sldPercent = sldWidth * item / items;
        $('.slideState span').css("width", sldPercent + "%");
    }
    $('.slide2').owlCarousel({

        navText:["<img src=\"images/left.svg\" alt=\"\" href=\"#myCarousel\">","<img src=\"images/left.svg\" href=\"#myCarousel\" style=\"transform: rotate(180deg)\"  alt=\"\">"],


        responsive:{
            0:{

                items:1
            },
            480:{

                items:1
            },
            568:{

                items:1
            },
            667:{

                items:1.5
            },
            768:{

                items:1.5
            },
            1024:{
                items:1.5
            }

        },

        margin:30,
        nav:true,
        dots:false,
        onInitialized:counter2,
        onTranslated:counter2
    });
    function counter2(event) {
        var items = event.item.count;
        var item = event.item.index + 1.5;
        var sldWidth = 100;
        var sldPercent = sldWidth * item / items;
        $('.slideState span').css("width", sldPercent + "%");
    }
    $('.slide3').owlCarousel({

        navText:["<img src=\"images/left.svg\" alt=\"\" href=\"#myCarousel\">","<img src=\"images/left.svg\" href=\"#myCarousel\" style=\"transform: rotate(180deg)\"  alt=\"\">"],


        responsive:{
            0:{

                items:2
            },
            480:{

                items:2
            },
            568:{

                items:4.5
            },
            667:{

                items:4.5
            },
            768:{

                items:4.5
            },
            1024:{
                items:4.5
            }

        },

        margin:30,
        nav:true,
        dots:false,
        onInitialized:counter3,
        onTranslated:counter3
    });
    function counter3(event) {
        var items = event.item.count;
        var item = event.item.index + 4.5;
        var sldWidth = 100;
        var sldPercent = sldWidth * item / items;
        $('.slideState span').css("width", sldPercent + "%");
    }
});

$(function() {


    var elements;
    var windowHeight;

    function init() {
        elements = $('.col-lg-3');
        windowHeight = window.innerHeight;

    }

    // alert("come");
    function checkPosition() {
        for (var i = 0; i < elements.length; i++) {
            var element = elements[i];
            var positionFromTop = elements[i].getBoundingClientRect().top;

            if (positionFromTop - windowHeight <= -300) {
                element.classList.add('card-animation');
            }
        }
    }

    window.addEventListener('scroll', checkPosition);
    window.addEventListener('resize', init);    init();
    checkPosition();

});
