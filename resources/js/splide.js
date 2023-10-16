import Splide from "@splidejs/splide";

export default function splide(querySelector, option) {
    new Splide(querySelector, option).mount();
};

