$(document).ready(function () {
    $('#carouselFade').carousel({interval: 3000});
//  wow js animation
    wow = new WOW(
            {
                boxClass: 'wow', // default
                animateClass: 'animated', // default
                offset: 0, // default
                mobile: false, // default
                live: true        // default
            }
    );
    wow.init();
});
