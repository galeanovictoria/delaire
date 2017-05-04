// Menu bar background change on scroll

$(document).scroll(function () {
    if ($(window).scrollTop() > 50) {

        $("#menu").addClass("menuClass");

    } else if ($(window).scrollTop() < 50) {

        $("#menu").removeClass("menuClass");
    }
});

// Hamburger menu

$('#for-slicknav').slicknav({
    label: '',
    closeOnClick: false,
});

// Hero statement animation
$(function () {

    $('.tlt').textillate({
        minDisplayTime: 1000,
        callback: function () {
            $('.tlt').textillate('out');
        }

    });
});

// Logo animation after hero statement
$('.tlt').on('outAnimationEnd.tlt', function () {
    $('#logo').removeClass('hidden');
});


// Parallax on Hero background image
$('.parallax-window').parallax({
    imageSrc: '../assets/deskhero.jpg',
    position: 'left',
});

// Smooth scroll on Menu links
smoothScroll.init({
    speed: 800, // Integer. How fast to complete the scroll in milliseconds
    easing: 'easeInOutQuad', // Easing pattern to use
});
