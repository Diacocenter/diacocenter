{{--<!-- Navigation Bar -->--}}
{{--<nav>--}}
{{--    <div class="container mx-auto flex justify-between items-center mt-5">--}}
{{--        <!-- Brand/logo -->--}}
{{--        <a href="#">--}}
{{--            <picture class="block md:hidden">--}}
{{--                <source srcset="{{asset("/storage/navbar/logo.png")}}">--}}
{{--                <img src="{{"/storage/navbar/logo.webp"}}" alt="Logo">--}}
{{--            </picture>--}}
{{--        </a>--}}

{{--        <!-- Hamburger Menu (Mobile) -->--}}
{{--        <div class="block sm:hidden">--}}
{{--            <button id="mobile-menu-button" class="text-black focus:outline-none">--}}
{{--                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                          d="M4 6h16M4 12h16M4 18h16"></path>--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </div>--}}

{{--        <!-- Navigation Links (Desktop) -->--}}
{{--        <div class="hidden sm:block w-full">--}}
{{--            <ul class="border-b border-gray-700 w-full flex justify-between py-2">--}}
{{--                <li>--}}
{{--                    <a href="{{ route("homepage") }}" class="text-secondary text-h6 block--}}
{{--                                    @if(route("homepage")) active @endif">--}}
{{--                        Home Page--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    @auth()--}}
{{--                        @php $seekerRole = auth()->user()->roles()->get()->filter(function ($model) {--}}
{{--                            return $model->name === "seeker";--}}
{{--                            });--}}
{{--                        @endphp--}}
{{--                        @if($seekerRole)--}}
{{--                                                        <a  href="{{ route(asset('technology-seeker-panel/new-project')) }}" class="text-secondary text-h6 block">--}}
{{--                                                            Start a Project--}}
{{--                                                        </a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </li>--}}
{{--                <li class=" mx-10 md:mx-20 hidden md:block">--}}
{{--                    <a href="{{ route("homepage") }}" class=" text-secondary text-h6">--}}
{{--                        <picture>--}}
{{--                            <source class="w-full" srcset="{{asset("/storage/navbar/logo.png")}}">--}}
{{--                            <img class="w-full" src="{{"/storage/navbar/logo.webp"}}" alt="Logo">--}}
{{--                        </picture>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @auth--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('login') }}" class=" text-secondary text-h6 ">--}}
{{--                            Panel--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @else--}}
{{--                    <li>--}}
{{--                        <a href="{{ route('register') }}" class=" text-secondary text-h6">--}}
{{--                            Register--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endauth--}}
{{--                <li>--}}
{{--                    @auth--}}
{{--                        <form class="flex items-center" action="{{ route('logout') }}" method="POST">--}}
{{--                            @csrf--}}

{{--                            <input type="submit" class=" text-secondary text-h6" value="Log out">--}}
{{--                        </form>--}}
{{--                    @else--}}
{{--                        <a href="{{ route("login") }}" class=" text-secondary text-h6">--}}
{{--                            Log in--}}
{{--                        </a>--}}
{{--                    @endauth--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <ul class="flex justify-around py-2 border-b border-black">--}}
{{--                <li class="block">--}}
{{--                    <a href="{{route("blog-news")}}" class=" text-secondary text-h6">Blogs & News</a>--}}
{{--                </li>--}}
{{--                <li class="block">--}}
{{--                    <a href="{{route("discover")}}" class=" text-secondary text-h6">Discover</a>--}}
{{--                </li>--}}
{{--                <li class="block">--}}
{{--                    <a href="{{ route("our-story") }}" class=" text-secondary text-h6">Our Story</a>--}}
{{--                </li>--}}
{{--                <li class="block">--}}
{{--                    <a href="{{ route("contact-us.index") }}" class=" text-secondary text-h6">Contact us</a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--<!-- Mobile Menu (Hidden by default) -->--}}
{{--<div id="mobile-menu" class="hidden sm:hidden bg-white p-4">--}}
{{--    <ul class="space-y-4 items-center">--}}
{{--        <li>--}}
{{--            <a href="{{ route("homepage") }}" class="text-secondary text-h6 block--}}
{{--                                    @if(route("homepage")) active @endif">--}}
{{--                Home Page--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            @auth()--}}
{{--                <a href="#" class="text-secondary text-h6 block">--}}
{{--                    Start a Project--}}
{{--                </a>--}}
{{--            @endauth--}}
{{--        </li>--}}
{{--        <li class=" mx-10 md:mx-20 hidden md:block">--}}
{{--            <a href="{{ route("homepage") }}" class=" text-secondary text-h6">--}}
{{--                <picture>--}}
{{--                    <source class="w-full" srcset="{{asset("/storage/navbar/logo.png")}}">--}}
{{--                    <img class="w-full" src="{{"/storage/navbar/logo.webp"}}" alt="Logo">--}}
{{--                </picture>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        @auth--}}
{{--            <li>--}}
{{--                <a href="{{ route('login') }}" class=" text-secondary text-h6 ">--}}
{{--                    Panel--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @else--}}
{{--            <li>--}}
{{--                <a href="{{ route('register') }}" class=" text-secondary text-h6">--}}
{{--                    Register--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        @endauth--}}
{{--        <li>--}}
{{--            @auth--}}
{{--                <form class="flex items-center" action="{{ route('logout') }}" method="POST">--}}
{{--                    @csrf--}}

{{--                    <input type="submit" class=" text-secondary text-h6" value="Log out">--}}
{{--                </form>--}}
{{--            @else--}}
{{--                <a href="{{ route("login") }}" class=" text-secondary text-h6">--}}
{{--                    Log in--}}
{{--                </a>--}}
{{--            @endauth--}}
{{--        </li>--}}
{{--        <li class="block">--}}
{{--            <a href="{{route("blog-news")}}" class=" text-secondary text-h6">Blog & News</a>--}}
{{--        </li>--}}
{{--        <li class="block">--}}
{{--            <a href="{{route("discover")}}" class=" text-secondary text-h6">Discover</a>--}}
{{--        </li>--}}
{{--        <li class="block">--}}
{{--            <a href="{{ route("our-story") }}" class=" text-secondary text-h6">Our Story</a>--}}
{{--        </li>--}}
{{--        <li class="block">--}}
{{--            <a href="{{ route("contact-us.index") }}" class=" text-secondary text-h6">Contact us</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}

{{--<script>--}}
{{--    // Toggle mobile menu--}}
{{--    const mobileMenuButton = document.getElementById('mobile-menu-button');--}}
{{--    const mobileMenu = document.getElementById('mobile-menu');--}}

{{--    mobileMenuButton.addEventListener('click', () => {--}}
{{--        mobileMenu.classList.toggle('hidden');--}}
{{--    });--}}
{{--</script>--}}


<nav class="sticky z-50">
    <div class="navbar bg-white mb-5"
        style="border-radius: 0px 0px 16px 16px;background: rgba(255, 255, 255, 0.50);box-shadow: 0px -2px 10px 0px rgba(0, 125, 255, 0.20) inset;backdrop-filter: blur(7.5px);">
        <div class="container justify-between">
            <div class="w-32 self-center hidden lg:block">
                <a class="flex" href="{{ route("homepage") }}">
                    <picture class="m-2">
                        <source srcset="{{ asset('/storage/website/navbar/logo-new.svg') }}">
                        <img src="{{ '/storage/website/navbar/logo-new.webp' }}" alt="Logo">
                    </picture>
                </a>
            </div>
            <div class="navbar-start lg:hidden ">
                <div class="dropdown dropdown-end static z-50">
                    <label tabindex="0" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16"/>
                        </svg>
                    </label>
                    <ul tabindex="0"
                        class="menu text-lg menu-sm dropdown dropdown-content mt-3 p-2 w-full bg-white z-50" style="border-radius: 0px 0px 16px 16px;background: rgba(255, 255, 255, 1);box-shadow: 0px -2px 10px 0px rgba(0, 125, 255, 0.20) inset;backdrop-filter: blur(7.5px);">
                        <li><a class="text-lg" href="{{route("homepage")}}">Home</a></li>
                        <li><a class="text-lg" href="{{route("our-story")}}">Our Story</a></li>
                        <li><a class="text-lg" href="{{route("services")}}">Services</a></li>
                        <li><a class="text-lg" href="{{route("blog-news")}}">Blog & News</a></li>
                        <li><a class="text-lg" href="{{route("contact-us.index")}}">Contact Us</a></li>
                        @auth
                            <a href="{{route("login")}}"
                                class="btn btn-blueBayoux border-2 border-blueBayoux m-2 text-blueBayoux bg-inherit hover:btn-success mx-5">Panel</a>
                            <form action="{{route("logout")}}" method="POST" class=" mx-5">
                                @csrf
                                <a class="btn btn-blueBayoux border-2 border-blueBayoux text-blueBayoux bg-inherit hover:btn-success w-full">Logout</a>
                            </form>
                        @else
                            <a href="{{route("login")}}"
                                class="btn btn-blueBayoux border-2 border-blueBayoux m-2 text-blueBayoux bg-inherit hover:btn-success px-5  text-h6">Sign
                                                                                                                                                     In</a>
                            <a href="{{route("register")}}"
                                class="btn btn-blueBayoux border-2 border-blueBayoux m-2 text-blueBayoux bg-inherit hover:btn-success px-5 text-h6">Sign
                                                                                                                                                    Up</a>
                        @endauth
                    </ul>
                </div>
                <a href="{{ route("homepage") }}">
                    <picture class="hidden lg:block m-2">
                        <source srcset="{{ asset('/storage/website/navbar/logo-new.svg') }}">
                        <img src="{{ '/storage/website/navbar/logo-new.webp' }}" alt="Logo">
                    </picture>
                </a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1 text-blueBayoux font-semibold text-lg">
                    <li class="font-semibold"><a href="{{route("homepage")}}">Home</a></li>
                    <li class="font-semibold"><a href="{{route("our-story")}}">Our Story</a></li>
                    <li class="font-semibold"><a href="{{route("services")}}">Services</a></li>
                    <li class="font-semibold"><a href="{{route("blog-news")}}">Blog & News</a></li>
                    <li class="font-semibold"><a href="{{route("contact-us.index")}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="navbar-end xl:w-auto hidden lg:flex">
                @auth
                    <a href="{{route("login")}}"
                        class="btn btn-blueBayoux border-2 border-blueBayoux m-2 text-blueBayoux bg-inherit hover:btn-success px-5">Panel</a>
                    <form action="{{route("logout")}}" method="POST">
                        @csrf
                        <button class="btn btn-blueBayoux border-2 border-blueBayoux m-2 text-blueBayoux bg-inherit hover:btn-success px-5">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{route("login")}}"
                        class="btn btn-blueBayoux border-2 border-blueBayoux m-2 text-blueBayoux bg-inherit hover:btn-success px-5">Sign
                                                                                                                                    In</a>
                    @if (Route::has('register'))
                        <a href="{{route("register")}}"
                            class="btn btn-blueBayoux border-2 border-blueBayoux m-2 text-blueBayoux bg-inherit hover:btn-success px-5">Sign
                                                                                                                                        Up</a>
                    @endif
                @endauth
            </div>
            <a class="navbar-end flex lg:hidden mr-2" href="{{ route("homepage") }}">
                <picture class="">
                    <source srcset="{{ asset('/storage/website/navbar/logo-new.svg') }}">
                    <img src="{{ '/storage/website/navbar/logo-new.webp' }}" alt="Logo">
                </picture>
            </a>
        </div>
    </div>
</nav>
