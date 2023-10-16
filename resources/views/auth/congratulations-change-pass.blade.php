@extends("layout.layout")

@section('content')
    <div class="relative flex flex-col justify-center bg-white shadow container text-center text-black tracking-wider p-8 form-items p-10 h-full">
        <h1 class="text-h2 mb-5">Congratulations</h1>
        <p class="my-5 text-body2">marshian03@gmail.com</p>
        <p class="text-body2">Your password has been changed.</p>
        <button class="btn-primary text-black hover:text-white py-2 rounded-xl mt-5">Login</button>
    </div>
@endsection


@section('image')
    <picture>
        <source srcset="{{asset("storage/login/congratulations-pass.png")}}">
        <img class="w-100" src="{{asset("storage/login/congratulations-pass.webp")}}">
    </picture>
@endsection
