import './bootstrap';

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    effect: 'slider',
    speed: 500,
    autoplay: true,
    slidesPerView: 1,
    centeredSlides: true,

    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

});


