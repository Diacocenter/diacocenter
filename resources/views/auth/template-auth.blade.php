@extends("layout.layout")

@section("content")
    {{--    <div class="container bg-white">--}}
    {{--        <div class="row mt-10">--}}
    {{--            <div class="col-24 col-lg-16 col-xl-11 p-0">--}}
    {{--                @yield("content-object")--}}
    {{--            </div>--}}
    {{--            <div class="col-24 col-lg-16 col-xl-13 p-0">--}}
    {{--                @yield("image")--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="container mx-auto bg-white">
        <div class="flex flex-row flex-wrap-reverse my-20">
            <div class="basis-full lg:basis-1/2 p-0">
                @yield("content-object")
            </div>
            <div class="basis-full lg:basis-1/2 p-0">
                @yield("image")
            </div>
        </div>
    </div>
@endsection