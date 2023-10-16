document.addEventListener("DOMContentLoaded", function () {
    $("#register").click(function () {
        $(".form-items .login-item").removeClass("animate__fadeInUp d-block").addClass("animate__fadeOutDown");
        $(".form-items .register-item").removeClass("animate__fadeOutDown d-none").addClass("animate__fadeInUp");
    });

    $("#login").click(function () {
        $(".form-items .login-item").removeClass("animate__fadeOutDown d-none").addClass("animate__fadeInUp d-block");
        $(".form-items .register-item").removeClass("animate__fadeInUp").toggleClass("animate__fadeOutDown ");
    });
});
