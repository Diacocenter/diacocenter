@extends("auth.template-auth")

@section('content-object')
    {{--    <div class="position-relative d-flex flex-column justify-content-center bg-white shadow container text-center text-black letter-space-2px p-8 form-items p-10 h-100">--}}
    {{--        <h1 class="fs-19 mb-5 text-center">Forget Password</h1>--}}
    {{--        <p class="my-5 Montserrat">Enter your Email address. We will send you the recovery link to reset your password.</p>--}}
    {{--        @if (session('status'))--}}
    {{--            <div class="mb-4 font-medium text-sm text-green-600">--}}
    {{--                {{ session('status') }}--}}
    {{--            </div>--}}
    {{--        @endif--}}
    {{--        <form action="{{route("password.email")}}" method="POST">--}}
    {{--            @csrf--}}
    {{--            <div class="mb-3">--}}
    {{--                <input type="email" class="form-control rounded-0 border-dark " id="exampleInputEmail1" aria-describedby="emailHelp"--}}
    {{--                       placeholder="Email" name="email">--}}
    {{--            </div>--}}
    {{--            <button type="submit" class="btn bg-light-blue text-white w-100 rounded-0 mt-5 fs-10">Send Recovery</button>--}}
    {{--        </form>--}}
    {{--    </div>--}}
    <div class="relative flex flex-col justify-center bg-white shadow container text-center text-black tracking-wider p-8 form-items p-10 h-full">
        <h1 class="text-h2 mb-5">Recovery Code</h1>
        <p class="my-5 text-body2 font-serif">Enter recovery code that we sent you on your email.</p>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form  method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-input rounded-none border border-gray-700 py-2 px-3 w-full"
                       id="exampleInputEmail1"
                       placeholder="Enter code" name="code">
            </div>
            <button type="submit"
                    class="btn btn-primary text-black hover:text-white w-full mt-5 text-xs md:text-sm py-2 rounded-none">
                Send Recovery
            </button>
        </form>
    </div>

@endsection


@section('image')
    <picture>
        <source srcset="{{asset("storage/login/forget-pass.png")}}">
        <img class="w-100" src="{{asset("storage/login/forget-pass.webp")}}">
    </picture>
@endsection
