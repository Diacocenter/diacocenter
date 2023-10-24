@extends("auth.template-auth")

@section('content-object')
    <div class="relative flex flex-col justify-center bg-white shadow container text-center text-black tracking-wider p-8 form-items p-10 h-full">
        <h1 class="text-6xl mb-5 text-center text-darkSteelGray">Congratulations </h1>
        <p class="my-5 text-SantaGrey">marshian03@gmail.com</p>
        <p class="text-body2 text-lightSteelBlue">Your password has been changed.</p>
        <button class="btn btn-primary w-full rounded-lg mt-5 text-DarkSlateGrey">Login</button>
    </div>
@endsection


@section('image')
    <picture>
        <source srcset="{{asset("storage/website/login/congratulations-pass.png")}}">
        <img class="w-100 rounded-r-lg" src="{{asset("storage/website/login/congratulations-pass.webp")}}">
    </picture>
@endsection
