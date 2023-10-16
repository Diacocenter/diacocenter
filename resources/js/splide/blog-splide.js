import Splide from "@splidejs/splide";

window.addEventListener('load', function () {

    var splide = new Splide('.blog-splide', {
        type: 'loop',
        perPage: 3,
        arrows: false,
        gap: "1em",
        breakpoints: {
            780: {
                perPage: 2,
            },
            450: {
                perPage: 1,
            }
        },
    });
    splide.mount();

});
