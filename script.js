// APPARITION NAVBAR//
$(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 60) {
            $("header").addClass("active");
        } else {
            $("header").removeClass("active");
        }
    });
});

//CHANGEMENT COULEUR DU LOGO LORS DU SCROLL//
$(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 60) {
            $("header #logo").addClass("active");
        } else {
            $("header #logo").removeClass("active");
        }
    });
});

//CHANGEMENT COULEUR RUBRIQUE LORS DU SCROLL//
$(function () {
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 60) {
            $("header ul li a").addClass("active");
        } else {
            $("header ul li a").removeClass("active");
        }
    });
});