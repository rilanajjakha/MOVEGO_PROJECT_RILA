(function ($) {
    "use strict";

    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });

    // Menambahkan event listener untuk semua tombol dengan class "booking-button"
    $(".booking-button").on("click", function(event) {
        event.preventDefault();
        var message = $(this).attr("data-message");
        alert(message);
    });

})(jQuery);
