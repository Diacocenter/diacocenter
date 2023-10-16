function onscroll() {
    var theta = document.documentElement.scrollTop / 100 % Math.PI;
    document.getElementById('diaco-circle').style.transform = 'rotate(' + theta + 'rad)';
}

window.addEventListener("load", function () {
        if(document.getElementById("our-story-content")) {
            window.addEventListener('scroll', function () {
                let scroll_height = document.getElementById("our-story-content").scrollHeight;
                let html = document.getElementById("year");
                onscroll();

                if ($(this).scrollTop() < 10) {
                    html.innerHTML = '2012';
                } else if (10 < $(this).scrollTop() < 500) {
                    html.innerHTML = Math.ceil((($(window).scrollTop() / scroll_height) * (2023 - 2012)) + 2012);
                } else if ($(this).scrollTop() > 500) {
                    html.innerHTML = '2023';
                }
            });
        }
});
