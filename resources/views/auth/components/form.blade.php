
@section('content')
    <div class="container mx-auto bg-white">
        <div class="flex flex-row my-20 gap-10 justify-between">
            <div
                class="container relative bg-white shadow container text-center text-black tracking-widest p-8 form-items h-full w-full lg:w-1/2">
                <div class="login-item animate__animated {{ session()->get('register') ? 'hidden' : 'block' }}">
                    <h1 class="text-center mb-5 text-h3 md:text-h2">Welcome Back</h1>
                    <a href="{{route('third-party.auth.redirect')}}"
                       class="btn bg-white flex items-center border border-black p-1 rounded-xl w-full h-auto justify-center text-h6 md:text-h5 tracking-wider hover:bg-white">
                        <img class="mr-2" src="{{ asset("/storage/login/google.png") }}" alt="Google Logo">
                        Continue With Google
                    </a>
                    <div class="flex items-center m-auto my-5 w-full md:w-1/2">
                        <hr class="flex-grow border-t-2 border-black">
                        <span class="px-5 bg-white text-h5">Or</span>
                        <hr class="flex-grow border-t-2 border-black">
                    </div>
                    <div>
                        <form action="{{ route("login") }}" method="POST" class="grid ">
                            @csrf
                            <input name="email" type="text"
                                   class="@error('email') border-red-500 @enderror border border-black rounded-xl p-2 w-full text-h6"
                                   placeholder="User Name">
                            <input name="password" type="password"
                                   class="@error('email') border-red-500 @enderror border border-black rounded-xl p-2 w-full  text-h6 mt-4"
                                   placeholder="Password">
                            @error("email")
                            <div class="text-red-600 text-xs flex justify-center italic mt-3">{{$message}}</div>
                            @enderror
                            <div class="flex items-center justify-center mt-2">
                                <input class="border border-black rounded border-2" type="checkbox" id="gridCheck"
                                       name="remember_me">
                                <label class="ml-2 my-5 text-body1 md:text-h6 text-center" for="gridCheck">Remember Me</label>
                            </div>
                            <button type="submit"
                                    class="btn btn-primary hover:text-white w-full p-2 rounded-xl text-caption capitalize">
                                Log In
                            </button>
                        </form>
                        <div class="text-center text-body1 md:text-h6 mt-5">
                            Don't have an account?
                            <a id="register" class="btn text-primary text-body1 md:text-h6 bg-white border-0 hover:bg-white" href="{{route("register")}}">Register
                                now</a>
                        </div>
                        <p class="text-body1 md:text-h6 mt-2">
                            Did you <a class="text-primary no-underline" href="{{ route('password.request') }}">forget
                                your
                                password</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative flex flex-col hidden lg:block">
                <img src="{{ asset('storage/website/img.svg') }}">
            </div>
        </div>
    </div>
@endsection

    @section('image')
        <picture>
            <source srcset="{{asset("storage/login/verify.png")}}">
            <img class="w-full h-full" src="{{asset("storage/login/verify.webp")}}">
        </picture>
    @endsection
