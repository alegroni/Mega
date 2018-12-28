(function ($) {
    "use strict";
    // Navbar Scroll Toggle
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 20) {
            $("nav").addClass("bg-solid shadow-mega-neon");
        } else {
            $("nav").removeClass("bg-solid shadow-mega-neon");
        }
    }).scroll();
    // Nav Scroll Click
    if ($(".smoothscroll > li > a, .btn-getnow").length > 0) {
        $(".smoothscroll > li > a, .btn-getnow").on("click", function (e) {
            e.preventDefault();
            $("html, body").animate({scrollTop: $($(this).attr("href")).offset().top + "px"}, 1600, "swing");
        });
    }
    // Screenshot Carousel
    if ($("#screenshots").length > 0) {
        $("#screenshots").append("<div id='hide' class='screenshot-hidden'></div>");
    }
    var owlID = $("#owl-id");
    if (owlID.length > 0) {
        owlID.owlCarousel({
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [991, 2],
            itemsMobile: [640, 1]
        });
        owlID.magnificPopup({// Screenshot
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
            image: {
                tError: "<a href='%url%'>The image #%curr%</a> could not be loaded."
            }
        });
    }
    // Screenshot Filter
    if ($("#owl-id .screenshot").length > 0) {
        $("#owl-id .screenshot").clone().appendTo($("#hide"));
    }
    var ssOwlItemsA = document.querySelectorAll("#screenshots .container .owl-item > div");
    for (var i = 0; i < ssOwlItemsA.length; i++) {
        ssOwlItemsA[i].style.opacity = 1;
    }
    function showProjectsbyCat(cat) {
        var owl = $("#owl-id").data("owlCarousel");
        owl.addItem("<div/>", 0);
        var nb = owl.itemsAmount;
        var ssOwlItems = document.querySelectorAll("#screenshots .container .owl-item");
        for (var i = 0; i < ssOwlItems.length; i++) {
            ssOwlItems[i].style.opacity = 0;
        }
        setTimeout(function () {
            for (var i = 0; i < (nb - 1); i++) {
                owl.removeItem(1);
            }
            if (cat === "all") {
                $("#hide .screenshot").each(function () {
                    owl.addItem($(this).clone());
                });
                ssOwlItemsA = document.querySelectorAll("#screenshots .container .owl-item > div");
                for (var i = 0; i < ssOwlItemsA.length; i++) {
                    ssOwlItemsA[i].style.opacity = 1;
                }
            } else {
                $("#hide .screenshot." + cat).each(function () {
                    owl.addItem($(this).clone());
                });
                ssOwlItemsA = document.querySelectorAll("#screenshots .container .owl-item > div");
                for (var i = 0; i < ssOwlItemsA.length; i++) {
                    ssOwlItemsA[i].style.opacity = 1;
                }
            }
            setTimeout(function () {
                owl.removeItem(0);
            }, 350);
        }, 200);
    }
    if ($(".filter-btns a").length > 0) {
        $(".filter-btns a").on("click", function (e) {
            e.preventDefault();
            $(".filter-btns a").removeClass("active");
            $(this).addClass("active");
            var catbtn = $(this).attr("ID");
            showProjectsbyCat(catbtn);
        });
    }
    // video Popup
    if ($(".youtube-popup").length > 0)
    {
        $(".youtube-popup").magnificPopup({
            type: "iframe"
        });
    }
    // Testimonial
    if ($("#owl-testimonial").length > 0) {
        $("#owl-testimonial").owlCarousel({
            items: 2,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [991, 1],
            itemsMobile: [785, 1],
            autoPlay: true,
            slideSpeed: 250
        });
    }


    //Pre-Loader
    $(window).load(function ()
    {
        if ($(".loading").length > 0) {
            $(".loading").delay(125).fadeOut(500);
        }
        if ($("header#home .display-none").length > 0) {
            $("header#home .display-none").removeClass("display-none");
        }
    });
    //Scrollup Bottom
    $(window).scroll(function ()
    {
        if ($(this).scrollTop() > 100) {
            $(".scrollup").fadeIn();
        } else {
            $(".scrollup").fadeOut();
        }
    });
    if ($(".scrollup").length > 0) {
        $(".scrollup").on("click", function ()
        {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    }

    if($("#P1").length>0){
      $("#P1").YTPlayer();
    }

})(jQuery);
