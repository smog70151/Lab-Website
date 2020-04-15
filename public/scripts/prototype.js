$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() >= $(window).height() - 15 ) {
            $('.navbar').addClass('active');
						$('.navbar-toggler').removeClass('navbar-dark');
						$('.navbar-toggler').addClass('navbar-light');
        } else {
            $('.navbar').removeClass('active');
						$('.navbar-toggler').removeClass('navbar-light');
						$('.navbar-toggler').addClass('navbar-dark');
        }
    });
});
