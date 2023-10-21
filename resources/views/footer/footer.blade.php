
<footer class="mt-10">
    <div class="bg-accent px-5 pt-14 ">
        <div class="container">
            <div class="grid grid-col-1 xl:justify-items-start xl:grid-cols-6 justify-items-center gap-y-10 xl:gap-y-0">
                <div>
                    <h6 class="text-lg font-semibold">Home Pages</h6>
                    <ul class="mt-4 flex flex-col space-y-2 font-medium text-center xl:text-start">
                        <li><a href="{{ route("blog-news") }}">News & Blogs</a></li>
                        <li><a href="{{ route("services") }}">Services</a></li>
                        <li><a href="{{ route("our-story") }}">Our Story</a></li>
                        <li><a href="{{ route("contact-us.index") }}">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="text-center xl:text-start text-lg font-semibold">Legal</h6>
                    <ul class="text-center xl:text-start mt-4 flex flex-col space-y-1 font-medium">
                        <li>Privacy & Terms</li>
                    </ul>
                </div>
                <div class="text-center xl:text-start md:col-span-3">
                    <h6 class="text-lg font-semibold">
                        Subscribe to our newsletter
                    </h6>
                    @if(Session::get('successful'))
                        <div class="text-green-600 text-xl">{{Session::get('successful')}}</div>
                    @else
                        <p class="mt-3 font-medium"> The latest news, articles, and resources, sent to your inbox weekly</p>
                    @endif
                    <form action="{{ route("newsletter.store") }}" method="POST" class="flex space-x-1 w-full flex-wrap xl:flex-nowrap space-y-3 xl:space-y-0 mt-5 justify-center xl:justify-start">
                        @csrf
                        <input type="email" placeholder="Enter your email" name="newsletter_email" value="{{ old("newsletter_email") }}"
                               class="input w-80 py-2 px-2 bg-[#CEEAFF] border-2 border-black rounded-md placeholder-black">
                        <input type="text" name="name" class="hidden" />
                        <button type="submit" class="btn text-black px-6 py-1 rounded-md text-sm"
                                style="background: var(--Liner, linear-gradient(90deg, #7ABBFF 0%, #3E6EA0 100%))">
                            Subscribe
                        </button>
                    </form>
                    @error("newsletter_email")
                    <p class="text-red-600 block">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="xl:justify-self-end self-center order-first sm:order-none">
                    <image src="{{ asset('/storage/website/footer/logo.svg') }}" alt="logo"></image>
                    <image class="mt-3" src="{{ asset('/storage/website/footer/diaco-text.svg') }}"
                           alt="logo-text"></image>
                </div>
            </div>
            <div class="border-t-2 border-black w-full lg:mt-15 mt-10 py-8 flex flex-col md:flex-row items-center gap-5 sm:justify-between flex-wrap-reverse justify-center">
                <p class="text-xs mt-8 lg:mt-0">© 2020 Dlex, Inc. All rights reserved</p>
                <div class="flex space-x-10 justify-center ">
                    <image src="{{ asset('/storage/website/footer/insta.svg') }}" alt="git"></image>
                    <image src="{{ asset('/storage/website/footer/facebook.svg') }}" alt="git"></image>
                    <image src="{{ asset('/storage/website/footer/twitter.svg') }}" alt="git"></image>
                </div>
            </div>
        </div>
</footer>
