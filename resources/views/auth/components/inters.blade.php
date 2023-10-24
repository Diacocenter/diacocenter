@extends("auth.template-auth")

@section('content')
    <div class="container">
        <div class="flex justify-center align-center pt-10">
            <div class="relative flex flex-1 w-32 flex-col flex-nowrap justify-center bg-white shadow rounded-lg text-center text-black tracking-wider p-5 form-items p-8 h-full">
                <h1 class="text-h2 mb-5 text-darkSteelGray">Select Interests </h1>
                <p class="text-body2 text-lightSteelBlue"> Select Your Interests. Don’t Worry, You Can Change It Later If You Want.
                </p>
                <form class="text-black mt-10" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 gap-10">
                        <div class="aspect-square">
                            <div class="card rounded-lg h-full form-check shadow ">
                                <input type="checkbox" class="btn-check hidden peer" name="oil" id="oil"
                                    autocomplete="off"
                                    value="technology_provider"
                                >
                                <label class="btn bg-white outline-offset-1 outline-lightGray peer-checked:bg-accent peer-checked:outline-accent hover:outline-accent hover:bg-white rounded-lg h-full flex flex-col flex-nowrap flex flex-col flex-nowrap"
                                    for="oil">
                                    <img class="w-2/3" src="{{ asset('/storage/website/login/inters/oil.png') }}">
                                    <p class="text-h6 text-blueBlack font-normal text-center pt-1">
                                        Oil & Gas
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="aspect-square">
                            <div class="card rounded-lg h-full form-check shadow ">
                                <input type="checkbox" class="btn-check hidden peer" name="it" id="it"
                                    autocomplete="off"
                                    value="technology_provider"
                                >
                                <label class="btn bg-white outline-offset-1 outline-lightGray peer-checked:bg-accent peer-checked:outline-accent hover:outline-accent hover:bg-white rounded-lg h-full flex flex-col flex-nowrap "
                                    for="it">
                                    <img class="w-2/3" src="{{ asset('/storage/website/login/inters/it.png') }}">
                                    <p class="text-h6 text-blueBlack font-normal text-center pt-1">
                                        IT
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="aspect-square">
                            <div class="card rounded-lg h-full form-check shadow ">
                                <input type="checkbox" class="btn-check hidden peer" name="ai" id="ai"
                                    autocomplete="off"
                                    value="technology_provider"
                                >
                                <label class="btn bg-white outline-offset-1 outline-lightGray peer-checked:bg-accent peer-checked:outline-accent hover:outline-accent hover:bg-white rounded-lg h-full flex flex-col flex-nowrap"
                                    for="ai">
                                    <img class="w-2/3" src="{{ asset('/storage/website/login/inters/ai.png') }}">
                                    <p class="text-h6 text-blueBlack font-normal text-center pt-1">
                                        AI
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="aspect-square">
                            <div class="card rounded-lg h-full form-check shadow ">
                                <input type="checkbox" class="btn-check hidden peer" name="chemistry" id="chemistry"
                                    autocomplete="off"
                                    value="technology_provider"
                                >
                                <label class="btn bg-white outline-offset-1 outline-lightGray peer-checked:bg-accent peer-checked:outline-accent hover:outline-accent hover:bg-white rounded-lg h-full flex flex-col flex-nowrap"
                                    for="chemistry">
                                    <img class="w-2/3" src="{{ asset('/storage/website/login/inters/chemistry.png') }}">
                                    <p class="text-h6 text-blueBlack font-normal text-center pt-1">
                                        Chemistry
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="aspect-square">
                            <div class="card rounded-lg h-full form-check shadow ">
                                <input type="checkbox" class="btn-check hidden peer" name="civil" id="civil"
                                    autocomplete="off"
                                    value="technology_provider"
                                >
                                <label class="btn bg-white outline-offset-1 outline-lightGray peer-checked:bg-accent peer-checked:outline-accent hover:outline-accent hover:bg-white rounded-lg h-full flex flex-col flex-nowrap"
                                    for="civil">
                                    <img class="w-2/3" src="{{ asset('/storage/website/login/inters/civil.png') }}">
                                    <p class="text-h6 text-blueBlack font-normal text-center pt-1">
                                        Civil
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="aspect-square">
                            <div class="card rounded-lg h-full form-check shadow ">
                                <input type="checkbox" class="btn-check hidden peer" name="material" id="material"
                                    autocomplete="off"
                                    value="technology_provider"
                                >
                                <label class="btn bg-white outline-offset-1 outline-lightGray peer-checked:bg-accent peer-checked:outline-accent hover:outline-accent hover:bg-white rounded-lg h-full flex flex-col flex-nowrap"
                                    for="material">
                                    <img class="w-2/3" src="{{ asset('/storage/website/login/inters/material.png') }}">
                                    <p class="text-h6 text-blueBlack font-normal text-center pt-1">
                                        Material
                                        Engineering
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="aspect-square">
                            <div class="card rounded-lg  border-5 border-gray  h-full form-check shadow ">
                                <input type="checkbox" class="btn-check hidden peer" name="electronics" id="electronics"
                                    autocomplete="off"
                                    value="technology_provider"
                                >
                                <label class="btn bg-white outline-offset-1 outline-lightGray peer-checked:bg-accent peer-checked:outline-accent hover:outline-accent hover:bg-white rounded-lg h-full flex flex-col flex-nowrap"
                                    for="electronics">
                                    <img class="w-2/3" src="{{ asset('/storage/website/login/inters/elc.png') }}">
                                    <p class="text-h6 text-blueBlack font-normal text-center pt-1">
                                        Electronics
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="aspect-square">
                            <div class="card rounded-lg h-full form-check shadow ">
                                <input type="checkbox" class="btn-check hidden peer" name="polymer" id="polymer"
                                    autocomplete="off"
                                    value="technology_provider"
                                >
                                <label class="btn bg-white outline-offset-1 outline-lightGray peer-checked:bg-accent peer-checked:outline-accent hover:outline-accent hover:bg-white rounded-lg h-full flex flex-col flex-nowrap"
                                    for="polymer">
                                    <img class="w-2/3" src="{{ asset('/storage/website/login/inters/polymer.png') }}">
                                    <p class="text-h6 text-blueBlack font-normal text-center pt-1">
                                        Polymer
                                    </p>
                                </label>
                            </div>
                        </div>
                        <div class="aspect-square">
                            <div class="card rounded-lg h-full form-check shadow ">
                                <input type="checkbox" class="btn-check hidden peer" name="blockchain" id="blockchain"
                                    autocomplete="off"
                                    value="technology_provider"
                                >
                                <label class="btn bg-white outline-offset-1 outline-lightGray peer-checked:bg-accent peer-checked:outline-accent hover:outline-accent hover:bg-white rounded-lg h-full flex flex-col flex-nowrap"
                                    for="chemistry">
                                    <img class="w-2/3" src="{{ asset('/storage/website/login/inters/blockchain.png') }}">
                                    <p class="text-h6 text-blueBlack font-normal text-center pt-1">
                                        Blockchain
                                    </p>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-24">
                        <button type="submit" class="btn btn-primary text-white w-full rounded-lg mt-8 text-h6">
                            Done
                        </button>
                    </div>
                </form>

                {{--        <form class="text-black" method="POST">--}}
                {{--            <div class="row row-cols-1 row-cols-md-3">--}}
                {{--                <div class="col-12 col-lg-8 ">--}}
                {{--                    <div class="card rounded-lg h-100 form-check shadow ">--}}
                {{--                        <input type="checkbox" class="btn-check hidden peer" name="oil" id="oil"--}}
                {{--                               autocomplete="off"--}}
                {{--                               value="technology_provider"--}}
                {{--                               checked>--}}
                {{--                        <label class="btn btn-outline rounded-lg h-100 ps-0 pe-0" for="oil">--}}
                {{--                            <img class="w-2/3" src="{{ asset('/storage/website/login/inters/oil.png') }}">--}}
                {{--                            <p class="fs-9 fw-normal text-center pt-1">--}}
                {{--                                Oil & Gas--}}
                {{--                            </p>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-lg-8 ">--}}
                {{--                    <div class="card rounded-lg  h-100 form-check shadow ">--}}
                {{--                        <input type="checkbox" class="btn-check hidden peer" name="it" id="it"--}}
                {{--                               autocomplete="off"--}}
                {{--                               value="technology_provider"--}}
                {{--                               checked>--}}
                {{--                        <label class="btn btn-outline rounded-lg h-100 ps-0 pe-0 " for="it">--}}
                {{--                            <img class="w-2/3" src="{{ asset('/storage/website/login/inters/it.png') }}">--}}
                {{--                            <p class="fs-9 fw-normal text-center pt-1">--}}
                {{--                                IT--}}
                {{--                            </p>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-lg-8 ">--}}
                {{--                    <div class="card rounded-lg  h-100 form-check shadow ">--}}
                {{--                        <input type="checkbox" class="btn-check hidden peer" name="ai" id="ai"--}}
                {{--                               autocomplete="off"--}}
                {{--                               value="technology_provider"--}}
                {{--                               checked>--}}
                {{--                        <label class="btn btn-outline rounded-lg h-100 ps-0 pe-0 " for="ai">--}}
                {{--                            <img class="w-2/3" src="{{ asset('/storage/website/login/inters/ai.png') }}">--}}
                {{--                            <p class="fs-9 fw-normal text-center pt-1">--}}
                {{--                                AI--}}
                {{--                            </p>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-lg-8 ">--}}
                {{--                    <div class="card rounded-lg  h-100 form-check shadow ">--}}
                {{--                        <input type="checkbox" class="btn-check hidden peer" name="chemistry" id="chemistry"--}}
                {{--                               autocomplete="off"--}}
                {{--                               value="technology_provider"--}}
                {{--                               checked>--}}
                {{--                        <label class="btn btn-outline rounded-lg h-100 ps-0 pe-0 " for="chemistry">--}}
                {{--                            <img class="w-2/3" src="{{ asset('/storage/website/login/inters/chemistry.png') }}">--}}
                {{--                            <p class="fs-9 fw-normal text-center pt-1">--}}
                {{--                                Chemistry--}}
                {{--                            </p>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-lg-8 ">--}}
                {{--                    <div class="card rounded-lg  h-100 form-check shadow ">--}}
                {{--                        <input type="checkbox" class="btn-check hidden peer" name="civil" id="civil"--}}
                {{--                               autocomplete="off"--}}
                {{--                               value="technology_provider"--}}
                {{--                               checked>--}}
                {{--                        <label class="btn btn-outline rounded-lg h-100 ps-0 pe-0 " for="civil">--}}
                {{--                            <img class="w-2/3" src="{{ asset('/storage/website/login/inters/civil.png') }}">--}}
                {{--                            <p class="fs-9 fw-normal text-center pt-1">--}}
                {{--                                Civil--}}
                {{--                            </p>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-lg-8 ">--}}
                {{--                    <div class="card rounded-lg  h-100 form-check shadow ">--}}
                {{--                        <input type="checkbox" class="btn-check hidden peer" name="material" id="material"--}}
                {{--                               autocomplete="off"--}}
                {{--                               value="technology_provider"--}}
                {{--                               checked>--}}
                {{--                        <label class="btn btn-outline rounded-lg h-100  " for="material">--}}
                {{--                            <img class="w-2/3" src="{{ asset('/storage/website/login/inters/material.png') }}">--}}
                {{--                            <p class="fs-9 fw-normal text-center lh-1  pt-1">--}}
                {{--                                Material--}}
                {{--                                Engineering--}}
                {{--                            </p>--}}

                {{--                            </p>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-lg-8 ">--}}
                {{--                    <div class="card rounded-lg  h-100 form-check shadow ">--}}
                {{--                        <input type="checkbox" class="btn-check hidden peer" name="electronics" id="electronics"--}}
                {{--                               autocomplete="off"--}}
                {{--                               value="technology_provider"--}}
                {{--                               checked>--}}
                {{--                        <label class="btn btn-outline rounded-lg h-100 ps-0 pe-0 " for="electronics">--}}
                {{--                            <img class="w-2/3" src="{{ asset('/storage/website/login/inters/elc.png') }}">--}}
                {{--                            <p class="fs-9 fw-normal text-center pt-1">--}}
                {{--                                Electronics--}}
                {{--                            </p>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-lg-8 ">--}}
                {{--                    <div class="card rounded-lg  h-100 form-check shadow  ">--}}
                {{--                        <input type="checkbox" class="btn-check hidden peer" name="polymer" id="polymer"--}}
                {{--                               autocomplete="off"--}}
                {{--                               value="technology_provider"--}}
                {{--                               checked>--}}
                {{--                        <label class="btn btn-outline rounded-lg h-100 ps-0 pe-0 " for="polymer">--}}
                {{--                            <img class="w-2/3" src="{{ asset('/storage/website/login/inters/polymer.png') }}">--}}
                {{--                            <p class="fs-9 fw-normal text-center pt-1">--}}
                {{--                                Polymer--}}
                {{--                            </p>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="col-12 col-lg-8 ">--}}
                {{--                    <div class="card rounded-lg  h-100 form-check shadow ">--}}
                {{--                        <input type="checkbox" class="btn-check hidden peer" name="blockchain" id="blockchain"--}}
                {{--                               autocomplete="off"--}}
                {{--                               value="technology_provider"--}}
                {{--                               checked>--}}
                {{--                        <label class="btn btn-outline rounded-lg h-100 ps-0 pe-0 " for="blockchain">--}}
                {{--                            <img class="w-2/3" src="{{ asset('/storage/website/login/inters/blockchain.png') }}">--}}
                {{--                            <p class="fs-9 fw-normal text-center pt-1">--}}
                {{--                                Blockchain--}}
                {{--                            </p>--}}
                {{--                        </label>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                {{--            </div>--}}

                {{--            <div class="col-24">--}}
                {{--                <button type="submit" class="btn bg-light-blue text-white w-100 rounded-lg mt-8 fs-12">--}}
                {{--                    confirm--}}
                {{--                </button>--}}
                {{--            </div>--}}
                {{--            <div class="col-24 m-0 Montserrat">--}}
                {{--                <button type="submit" class="btn text-light-blue text-white w-100  rounded-lg fs-9 mt-2">--}}
                {{--                    cancel--}}
                {{--                </button>--}}
                {{--            </div>--}}
                {{--        </form>--}}

            </div>
            <div class="xl:flex lg:hidden md:hidden hidden flex-1 w-64">
                <img class='max-w-full max-h-full object-cover rounded-r-lg' src="{{ asset('/storage/website/login/login-background.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection


@section('image')
    <img class="w-0 w-md-100" src="{{ asset('/storage/website/login/ball.png') }}">
@endsection
