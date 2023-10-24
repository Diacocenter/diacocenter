@extends("layout.layout")

@section('content')
    <div class="container mx-auto bg-white">
        <div class="flex flex-row mt-20 overflow-hidden justify-center shadow rounded-lg">
            <div class="relative flex flex-col justify-center bg-white text-center text-black tracking-wider p-5 form-items p-8 h-full w-full lg:w-1/2">
                <h1 class="text-h2 mb-5 text-darkSteelGray">Who Are You</h1>
                <p class="text-body2"> Chooser Your Role As An Individual Or Behalf Of A Company
                </p>
                <form class="text-black mt-5" action="{{ route("cooperational-store") }}" method="POST">
                    @csrf
                    <div class="flex flex-wrap md:flex-nowrap md:gap-8 xl:gap-12">
                        <div class="basis-full lg:basis-1/2 mt-5">
                            <div class="form-check p-0 h-full border border-elementalGrey rounded-lg">
                                <input type="radio" class="btn-check hidden peer" name="is_cooperational" id="technology-provider"
                                    autocomplete="off"
                                    value={{boolval("true")}}>
                                <label class="text-elementalGrey flex flex-col w-full h-full peer-checked:bg-accent peer-checked:border-accent border-lightGray rounded h-full p-2 hover:text-black"
                                    for="technology-provider">
                                    <p class="text-h4">A Company</p>
                                    <p class="text-body2  tracking-wide"> I open this account on behalf of a company.
                                    </p>
                                </label>

                            </div>
                        </div>
                        <div class="basis-full lg:basis-1/2 mt-5">
                            <div class="form-check border border-elementalGrey p-0 h-full rounded-lg">
                                <input type="radio" class="btn-check hidden peer" name="is_cooperational" id="technology-seeker"
                                    autocomplete="off"
                                    value={{boolval("false")}}>
                                <label class="text-elementalGrey flex flex-col w-full h-full peer-checked:bg-accent peer-checked:border-accent rounded h-full pb-2 checked:bg-primary p-2 hover:text-black "
                                    for="technology-seeker">
                                    <p class="text-h4">A Person</p>
                                    <p class="text-body2  tracking-wide">I open this account on my behalf.</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary hover:text-white rounded-lg text-caption text-black w-full mt-20">
                            Next
                        </button>
                    </div>
                </form>
            </div>
            <div class="relative flex flex-1 flex-col hidden lg:block">
                <img class="w-full h-full" src="{{ asset('storage/website/login/login-background.png') }}">
            </div>
        </div>
    </div>
@endsection


@section('image')
    <div class="p-0">
        <picture>
            <source srcset="http://diacocenter.test/storage/website/login/verify.png">
            <img class="w-100" src="http://diacocenter.test/storage/website/login/verify.webp">
        </picture>
    </div>
@endsection
