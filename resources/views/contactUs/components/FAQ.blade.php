<div class="container mx-auto my-20">
    <div class="lg:mx-30">
        <div class="text-center">
            <p class="text-h4 md:text-h3 my-16">
                How Can We Help You?
            </p>
        </div>
        <div>
            <div class="form-control">
                <div class="input-group">
                    <input type="text" placeholder="Search Help Articles" class="input input-bordered w-full"
                           style="border-radius: 0px" />
                    <button class="btn btn-primary text-white hover:text-black  btn-square" style="border-radius: 0px">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-5 mt-5">
            <div class="col-span-3 md:col-span-1 text-center flex flex-col">
                <p class="text-h4 mb-3">General</p>
                <a class="text-primary text-h6" href="{{ route("faq") }}">How to Create Account?</a>
                <a class="text-primary text-h6" href="{{ route("faq") }}">How to make an FAQ page</a>
                <a class="text-primary text-h6" href="{{ route("faq") }}">How to Create Account?</a>
            </div>
            <div class="col-span-3 md:col-span-1 text-center flex flex-col">
                <p class="text-h4 mb-3">The Providers</p>
                <a class="text-primary text-h6" href="{{ route("faq") }}">How to answer your FAQs </a>
                <a class="text-primary text-h6" href="{{ route("faq") }}">How to Create Account?</a>
                <a class="text-primary text-h6" href="{{ route("faq") }}">How to Create Account?</a>
            </div>
            <div class="col-span-3 md:col-span-1 text-center flex flex-col">
                <p class="text-h4 mb-3">The Seekers</p>
                <a class="text-primary text-h6" href="{{ route("faq") }}">Why should you an FAQ page?</a>
                <a class="text-primary text-h6" href="{{ route("faq") }}">How to Create Account?</a>
                <a class="text-primary text-h6" href="{{ route("faq") }}">How to Create Account?</a>
            </div>
        </div>
    </div>
</div>








{{-- <div class="mt-10">
    <p class="text-base">
        How can we Help You?
    </p>
    <form action="">
        <div class="mb-3 flex mt-5">
            <input type="search" class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow" id="floatingInput" placeholder="Search help articles">
        </div>
    </form>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-5">
        <div class="col">
            <p class="text-sm my-5">General</p>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="/faq">How do I care for XYZ fabric?</a>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">What is Amazon Pay?</a>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">Do you do back orders?</a>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">What is a Zappos Verified Purchase review?</a>
        </div>
        <div class="col">
            <p class="text-sm my-5">The Providers</p>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">Do you have a catalog?</a>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">How do I know my shoe size?</a>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">How do I care for XYZ fabric?</a>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">I want to return my purchase! What do I do?</a>
        </div>
        <div class="col">
            <p class="text-sm my-5">The Seekers</p>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">How do I care for XYZ fabric?</a>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">Can I cancel my PayPal order?</a>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">Do you do back orders?</a>
            <a class="text-xs text-blue-500 no-underline uppercase tracking-wide" href="#">What is a Zappos Verified Purchase review?</a>
        </div>
    </div>
</div> --}}
