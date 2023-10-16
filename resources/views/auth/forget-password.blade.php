@extends("layout.layout")

@section('content')
    <div class="container mx-auto bg-white flex flex-row my-20 gap-10 justify-between">
        <div
                class="flex flex-col justify-between bg-white shadow container text-center text-black tracking-widest p-8 form-items h-full  w-full lg:w-1/2">
            <h1 class="text-h2 mb-5">Forget Password</h1>
            <p class="my-5 text-body2 font-serif">Enter your Email address. We will send you the recovery link to
                reset your
                password.</p>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="email" class="form-input rounded-none border border-gray-700 py-2 px-3 w-full"
                           id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Email" name="email">
                    @if($errors)
                        @error('email')
                        <div class="w-100 w-lg-85 mx-auto alert alert-danger mb-0 p-1 w-100 mb-1 ps-2 py-1">{{ $message }}</div>
                        @enderror
                    @else
                        <div class="w-100 w-lg-85 mx-auto alert alert-success mb-0 p-1 w-100 mb-1 ps-2 py-1">We've
                            just sent an email you reset your password. Please check your email inbox.
                        </div>
                    @endif
                </div>
                <button type="submit"
                        class="btn btn-primary text-black hover:text-white w-full mt-5 text-xs md:text-sm py-2 rounded-none">
                    Send Recovery
                </button>
            </form>
        </div>
        <div class="relative flex flex-col hidden lg:block">
            <img src="{{ asset('storage/website/img.svg') }}">
        </div>
    </div>

@endsection


@section('image')
    <picture>
        <source srcset="{{asset("storage/login/forget-pass.png")}}">
        <img class="w-100" src="{{asset("storage/login/forget-pass.webp")}}">
    </picture>
@endsection
