
@section('content')
    <div class="container mx-auto flex flex-row justify-between gap-10 my-20">
    <div
        class=" relative bg-white shadow container text-center text-black tracking-widest p-8 form-items h-full w-full lg:w-1/2 ">
        {{--<div class="register-item animate__animated {{ session()->get('register') ? 'block' : 'hidden' }}">--}}
        <h1 class="text-center mb-5 text-h3 md:text-h2 text-darkSteelGray">Welcome To Diaco Center</h1>
        <a href="{{route('third-party.auth.redirect')}}"
           class="btn bg-white flex items-center border-2 border-darkSteelGray text-lightSteelBlue rounded-xl h-auto p-1 capitalize w-full justify-center text-h6 md:text-h5 tracking-wider">
            <img class="mr-2" src="{{ asset("/storage/website/login/google.png") }}" alt="Google Logo">
            Continue With Google
        </a>
        <div class="flex items-center m-auto my-5 w-full md:w-1/2">
            <hr class="flex-grow border-t-2 border-darkSteelGray">
            <span class="px-5 bg-white text-h5">Or</span>
            <hr class="flex-grow border-t-2 border-darkSteelGray">
        </div>
        <div>
            <form action="{{ route('register') }}" method="POST" class="text-black">
{{--                <div class="w-100 bg-red-600">--}}
{{--                    @if ($errors->any())--}}
{{--                        @foreach ($errors() as $error)--}}
{{--                            <div>{{$error}}</div>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                </div>--}}
                @csrf
                <div class="flex-row flex flex-wrap md:flex-nowrap gap-3">
                    <div class="basis-full md:basis-1/2 mt-5">
                        <input type="text" name="first_name" value="{{old("first_name")}}"
                               class="@error("first_name") border-red-500 @enderror border-2 border-darkSteelGray rounded-xl p-2 w-full text-h6 hover:border-darkSteelGray"
                               placeholder="First name" aria-label="First name">
                        @error("first_name")
                            <div class="text-red-600 text-xs flex justify-content-end italic mt-1 ml-1">Enter at least 3 characters</div>
                        @enderror
                    </div>
                    <div class="basis-full md:basis-1/2 mt-5">
                        <input type="text" name="last_name" value="{{old("last_name")}}"
                               class="@error("last_name") border-red-500 @enderror border-2 border-darkSteelGray rounded-xl p-2 w-full  text-h6"
                               placeholder="Last name" aria-label="Last name">
                        @error("last_name")
                        <div class="text-red-600 text-xs flex justify-content-end italic mt-1 ml-1">Enter at least 3 characters</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-5 w-full">
                    <input name="email" type="email" value="{{old("email")}}"
                           class="@error("email") border-red-500 @enderror border-2 border-darkSteelGray rounded-xl p-2 w-full text-h6"
                           id="email"
                           placeholder="Email">
                    @error("email")
                        <div class="text-red-600 text-xs flex justify-content-end italic mt-1 ml-1">{{$message}}</div>
                    @enderror
                </div>
                <div class="mt-5">
                    <input name="password" type="password"
                           class="@error("password") border-red-500 @enderror border-2 border-darkSteelGray rounded-xl p-2 w-full  text-h6"
                           placeholder="Password">
                    @error("password")
                    {{$message}}
                    <div class="flex flex-col">
                        <div class="text-red-600 text-xs flex justify-content-end italic mt-1 ml-1">
                            Your Password Must Includes :
                        </div>
                        <div class="text-red-600 text-xs flex justify-content-end italic mt-1 ml-2">
                            <ul class="letter-space-0 mx-4 list">
                                <li>Upper Case</li>
                                <li>Numbers</li>
                                <li>Special Characters( @ # ! ? etc)</li>
                                <li>Min:8 Characters</li>
                            </ul>
                        </div>
                    </div>
                    @enderror
                </div>
                <div class="mt-5">
                    <input name="password_confirmation" type="password"
                           class="border-2 border-darkSteelGray rounded-xl p-2 w-full  text-h6"
                           placeholder="Confirm Password">
                </div>
                <div class="">
                    <button type="submit"
                            class="btn btn-primary hover:text-white text-darkSteelGray text-xl w-full p-2 rounded-xl text-caption mt-5">
                        Register
                    </button>
                </div>
            </form>
            <div class="text-center text-h6 mt-5 flex items-center justify-center">
                Already have an account?
                <a id="login" class="btn text-primary bg-white border-0 hover:bg-white text-h6 " href="{{route("login")}}">Log in</a>
            </div>
        </div>
        {{--</div>--}}
    </div>
        <div class="relative flex flex-col hidden lg:block">
            <img src="{{ asset('storage/website/img.svg') }}">
        </div>
</div>
@endsection
