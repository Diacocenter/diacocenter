@extends("layout.layout")

@section('content')
    <div class="container mx-auto bg-white">
        <div class="">
            <div class="flex flex-row mt-20 gap-10">
                <div
                    class="relative flex flex-col bg-white shadow text-center text-black tracking-wider p-5 form-items p-8 h-full w-full lg:w-1/2">
                    <h1 class="text-h2 mb-5">Choose Role</h1>
                    <p class="text-body2">Your Registration Process Has Just Completed Successfully.</p>
                    <form class="text-black mt-5" action="{{ route('roles') }}" method="POST">
                        @csrf
                        <div class="flex flex-wrap md:flex-nowrap md:gap-12">
                            <div class="basis-full md:basis-1/2 mt-5">
                                <div class="form-check rounded-xl shadow p-0 h-full">
                                    <input type="radio" class="btn-check hidden peer" name="role" id="technology-provider"
                                           autocomplete="off"
                                           value="provider">
                                    <label
                                        class="flex flex-col w-full h-full peer-checked:bg-accent peer-checked:border-accent btn btn-outline border-lightGray rounded-xl h-full pb-2 text-gray-400 checked:text-black checked:bg-primary p-2 hover:border-accent hover:bg-white hover:text-black"
                                        for="technology-provider">
                                        <p class="text-h6">Provider</p>
                                        <p class="text-subtitle text-start tracking-wide">I’m a technology provider who
                                            can create
                                            innovative and efficient technology solutions for the projects.</p>
                                    </label>

                                </div>
                            </div>
                            <div class="basis-full md:basis-1/2 mt-5">
                                <div class="form-check rounded-xl shadow p-0 h-full">
                                    <input type="radio" class="btn-check hidden peer" name="role" id="technology-seeker"
                                           autocomplete="off"
                                           value="seeker">
                                    <label
                                        class="flex flex-col w-full h-full peer-checked:bg-accent peer-checked:border-accent btn btn-outline border-lightGray rounded-xl h-full pb-2 text-gray-400 checked:text-black checked:bg-primary p-2 hover:border-accent hover:bg-white hover:text-black"
                                        for="technology-seeker">
                                        <p class="text-h6">Seeker</p>
                                        <p class="text-subtitle text-start tracking-wide">I’m a technology seeker who
                                            researches to
                                            upgrade
                                            and improve the efficiency of my projects.</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit"
                                    class="btn btn-primary text-black hover:text-white text-caption w-full py-3 mt-20 rounded-xl">
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
    </div>

    {{--    <div class="container">--}}
    {{--        <div--}}
    {{--            class="col-24 col-md-12 position-relative d-flex flex-column  justify-content-center bg-white shadow text-center text-black letter-space-2px p-5 form-items p-8 h-100 ">--}}
    {{--            <h1 class="text-h2 mb-5 text-center">Choose Role</h1>--}}
    {{--            <p class="fw-normal text-body2">Your Registration Process Has Just Completed Successfully.--}}
    {{--            </p>--}}
    {{--            <form class="row g-3 text-black mt-5 g-5" method="POST">--}}
    {{--                <div class="col-24 col-lg-12  mt-5">--}}
    {{--                    <div class="form-check shadow p-0">--}}
    {{--                        <input type="radio" class="btn-check" name="role" id="success-outlined"--}}
    {{--                               autocomplete="off"--}}
    {{--                               value="technology_provider"--}}
    {{--                               checked>--}}
    {{--                        <label class="btn btn-outline rounded-0 h-100" for="success-outlined">--}}
    {{--                            <h5 class="text-h6">Provide</h5>--}}
    {{--                            <p class="text-subtitle text-start lh-base pt-2 letter-space-1px">I’m a technology provider--}}
    {{--                                who--}}
    {{--                                can create innovative and--}}
    {{--                                efficient technology solutions for the--}}
    {{--                                projects.</p>--}}
    {{--                        </label>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-24 col-lg-12  mt-5">--}}
    {{--                    <div class="form-check shadow p-0">--}}
    {{--                        <input type="radio" class="btn-check" name="role" id="danger-outlined"--}}
    {{--                               autocomplete="off" value="technology_seeker">--}}
    {{--                        <label class="btn btn-outline rounded-0 h-100 pb-2" for="danger-outlined">--}}
    {{--                            <h5 class="text-h6">Seeker</h5>--}}
    {{--                            <p class="text-subtitle text-start lh-base pt-2 letter-space-1px">I’m a technology seeker--}}
    {{--                                who--}}
    {{--                                research to upgrade and improve--}}
    {{--                                the efficiency of my projects.</p>--}}
    {{--                        </label>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-24">--}}
    {{--                    <button type="submit" class="btn bg-primary text-black w-100 rounded-0 mt-5">--}}
    {{--                        confirm--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--                <div class="col-24 m-0 Montserrat">--}}
    {{--                    <button type="submit" class="btn bg-primary text-black w-100  rounded-0 mt-2">--}}
    {{--                        cancel--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--            </form>--}}
    {{--        </div>--}}
    {{--    </div>--}}

@endsection


@section('image')
    <img class="w-0 w-md-100" src="{{ asset('/storage/auth/ball.png') }}">
@endsection
