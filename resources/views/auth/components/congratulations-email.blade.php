@extends("auth.template-auth")

@section('content-object')
    <div class="position-relative d-flex flex-column justify-content-center bg-white shadow container text-center text-black letter-space-2px p-8 form-items p-10 h-100">
        <h1 class="fs-19 mb-5 text-center">Congratulations </h1>
        <p class="my-5">marshian03@gmail.com</p>
        <p class="Montserrat">Your Email has just been verified.
            <br>
            Now, you can enjoy.</p>
        <button class="btn btn-primary text-white w-100 rounded-0 mt-5 fs-10">Go To Dashboard </button>
        <p>
            Or wait for 5 seconds...
        </p>
    </div>
@endsection


@section('image')
    <picture>
        <source srcset="{{asset("storage/login/congratulations-verify.png")}}">
        <img class="w-100" src="{{asset("storage/login/congratulations-verify.webp")}}">
    </picture>
@endsection