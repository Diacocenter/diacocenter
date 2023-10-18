@extends("layout.layout")

@section('content')
    <div class="container mx-auto bg-white">
        <div class="flex flex-row my-20 justify-between">
    <div class="relative flex flex-col justify-center bg-white shadow container text-center text-black tracking-wider p-8 form-items p-10 h-auto w-full lg:w-1/2">
        <h1 class="text-h2 mb-5 text-darkSteelGray">Set new password</h1>
        <p class="my-5 text-body2 text-lightSteelBlue">Enter your new password.</p>
        @foreach ($errors->all() as $error)
            <div class="text-red-600">{{ $error }}</div>
        @endforeach
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
{{--            <input type="hidden" name="email" value="{{ $request->email }}">--}}
{{--            <input type="hidden" name="token" value="{{ $request->token }}">--}}
            <div class="mb-3">
                <input class="form-input  border border-gray-700 rounded-lg w-full py-2 px-3" type="password" name="password" aria-label="Password" placeholder="Password">
                @error('password')
                <div class="text-red-600 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input class="form-input border border-gray-700 rounded-lg w-full py-2 px-3" type="password" name="password_confirmation" aria-label="Password Confirmation" placeholder="Password Confirmation">
                @error('password_confirmation')
                <div class="text-red-600 mt-1">{{ $message }}</div>
                @enderror
            </div>
            <a href="{{ route('password.confirmation') }}">
                <button type="submit" class="btn btn-primary text-darkSteelGray text-xl hover:text-white text-caption w-full mt-5 py-2 rounded-lg">Reset Password</button>
            </a>
        </form>
    </div>
            <div class="relative flex flex-col hidden lg:block">
                <img src="{{ asset('storage/website/img.svg') }}">
            </div>
        </div>
    </div>

    {{--    <div class="position-relative d-flex flex-column justify-content-center bg-white shadow container text-center text-black letter-space-2px p-8 form-items p-10 h-100">--}}
{{--        <h1 class="fs-19 mb-5 text-center">Set new password</h1>--}}
{{--        <p class="my-5 Montserrat">Enter your new password.</p>--}}
{{--        @foreach ($errors->all() as $error)--}}
{{--            {{ $error }}<br/>--}}
{{--        @endforeach--}}
{{--        <form action="{{route("password.update")}}" method="POST">--}}
{{--            @csrf--}}
{{--            <input type="hidden" name="email" value="{{ $request->email }}">--}}
{{--            <input type="hidden" name="token" value="{{ $request->token }}">--}}
{{--            <div class="mb-3">--}}
{{--                <input class="form-control ms-2" type="password" name="password" aria-label="Username" placeholder="password">--}}
{{--                @error('password')--}}
{{--                <div class="alert alert-danger mb-0 p-1 w-100 mt-2 ps-2 py-1">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--                <input class="form-control ms-2" type="password" name="password_confirmation" aria-label="Username" placeholder="password confirm">--}}
{{--                @error('password_confirmation')--}}
{{--                <div class="alert alert-danger mb-0 p-1 w-100 mt-2 ps-2 py-1">{{ $message }}</div>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <a href="{{route('login')}}">--}}
{{--                <button type="submit" class="btn bg-light-blue text-white w-100 rounded-0 mt-5 fs-10">Reset Password--}}
{{--                </button>--}}
{{--            </a>--}}
{{--        </form>--}}
{{--    </div>--}}
@endsection


@section('image')
    <picture>
        <source srcset="{{asset("storage/login/set-new-pass.png")}}">
        <img class="w-100" src="{{asset("storage/login/set-new-pass.webp")}}">
    </picture>
@endsection
