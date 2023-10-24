
@extends("auth.template-auth")

@section('content-object')
    <div class="relative flex flex-col justify-center bg-white shadow container text-center text-black tracking-wider p-8 form-items p-10 h-full">
        <h1 class="text-6xl mb-5 text-center text-darkSteelGray">Congratulations </h1>
        <p class="my-5 text-SantaGrey">marshian03@gmail.com</p>
        <p class="text-body2 text-lightSteelBlue">Your Email has just been verified.
            <br>
            Now, you can enjoy.</p>
        <button class="btn btn-primary w-full rounded-lg mt-5 text-DarkSlateGrey">Go To Dashboard </button>
    </div>
@endsection


@section('image')
    <picture>
        <source srcset="{{asset("storage/website/login/congratulations-verify.png")}}">
        <img class="w-100 rounded-r-lg" src="{{asset("storage/website/login/congratulations-verify.webp")}}">
    </picture>
@endsection
