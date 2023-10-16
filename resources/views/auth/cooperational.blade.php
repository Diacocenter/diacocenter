@extends("layout.layout")

@section('content')
    <div class="container mx-auto bg-white">
        <div class="flex flex-row mt-20 gap-10 justify-between">
    <div class="relative flex flex-col justify-center bg-white shadow text-center text-black tracking-wider p-5 form-items p-8 h-full w-full lg:w-1/2">
        <h1 class="text-h2 mb-5">Who Are You</h1>
        <p class="text-body2"> Chooser Your Role As An Individual Or Behalf Of A Company
        </p>
        <form class="text-black mt-5" action="{{ route("cooperational-store") }}" method="POST">
            @csrf
            <div class="flex flex-wrap md:flex-nowrap md:gap-8 xl:gap-12">
                <div class="basis-full lg:basis-1/2 mt-5">
                    <div class="form-check shadow p-0 h-full">
                        <input type="radio" class="btn-check hidden peer" name="is_cooperational" id="technology-provider"
                               autocomplete="off"
                               value={{boolval("true")}}>
                        <label class="flex flex-col w-full h-full peer-checked:bg-accent peer-checked:border-accent btn btn-outline border-lightGray rounded-none h-full p-2 hover:border-accent hover:bg-white hover:text-black"
                               for="technology-provider">
                            <p class="text-h4">A Company</p>
                            <p class="text-body2  tracking-wide"> I open this account on behalf of a company.
                            </p>
                        </label>

                    </div>
                </div>
                <div class="basis-full lg:basis-1/2 mt-5">
                    <div class="form-check shadow p-0 h-full">
                        <input type="radio" class="btn-check hidden peer" name="is_cooperational" id="technology-seeker"
                               autocomplete="off"
                               value={{boolval("false")}}>
                        <label class="flex flex-col w-full h-full peer-checked:bg-accent peer-checked:border-accent btn btn-outline border-lightGray rounded-none h-full pb-2 checked:bg-primary p-2 hover:border-accent hover:bg-white hover:text-black "
                               for="technology-seeker">
                            <p class="text-h4">A Person</p>
                            <p class="text-body2  tracking-wide">I open this account on my behalf.</p>
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary hover:text-white  text-caption text-black w-full mt-20 rounded-none">
                    Next
                </button>
            </div>
        </form>
    </div>
        <div class="relative flex flex-col hidden lg:block">
        <img src="{{ asset('storage/website/img.svg') }}">
    </div>
    </div>
    </div>
@endsection


@section('image')
    <div class="p-0">
        <picture>
            <source srcset="http://diacocenter.test/storage/login/verify.png">
            <img class="w-100" src="http://diacocenter.test/storage/login/verify.webp">
        </picture>
    </div>
@endsection
