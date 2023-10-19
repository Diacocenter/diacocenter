{{--@dd($complete_project)--}}
<section class="container my-20">
    <div class="text-h3 mt-5">
        <p class="text-center text-4xl">Complete Project</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-2 mt-4 gap-x-4 gap-y-4">
        <div class="card w-120 glass bg-extraLightBlue">
            <figure><img class="min-h-[10rem] w-full object-cover" src="{{ asset('/storage/home-page/images/fifth.png') }}" class="w-full" /></figure>
            <div class="card-body p-3">
                <h2 class="card-title text-darkSteelGray xl:justify-center md:justify-center justify-start mb-3">Automated warehouses</h2>
                <div class="flex justify-between xl:flex-row md:flex-row flex-col">
                    <p class="text-lightSteelBlue">Technology Seeker</p>
                    <p>Digikey</p>
                    <p>Technology Provider </p>
                    <p class="text-lightSteelBlue">ST Logistics</p>
                </div>
            </div>
            <div class="card-actions justify-around mb-3">
                <img src="{{ asset('/storage/home-page/icons/first.png') }}" alt="">
                <img src="{{ asset('/storage/home-page/icons/second.png') }}"  alt="">
            </div>
            <p class="card-title rounded-b-xl bg-darkSteelBlue text-lighSteelGray p-3 flex justify-center">15 Days Ago</p>
        </div>
        <div class="card w-120 glass bg-extraLightBlue">
            <figure><img class="min-h-[10rem] w-full object-cover" src="{{ asset('/storage/home-page/images/sixth.png') }}" class="w-full" /></figure>
            <div class="card-body p-3">
                <h2 class="card-title text-darkSteelGray xl:justify-center md:justify-center justify-start mb-3">Digital oil field</h2>
                <div class="flex justify-between xl:flex-row md:flex-row flex-col">
                    <p class="text-lightSteelBlue">Technology Seeker</p>
                    <p>Digikey</p>
                    <p class="text-lightSteelBlue">Technology Provider </p>
                    <p>digital oilfield</p>
                </div>
            </div>
            <div class="card-actions justify-around mb-3">
                <img src="{{ asset('/storage/home-page/icons/third.png') }}"  alt="" />
                <img src="{{ asset('/storage/home-page/icons/fourth.png') }}"  alt="" />
            </div>
            <p class="card-title p-3 rounded-b-xl bg-darkSteelBlue flex justify-center text-lighSteelGray">15 Days Ago</p>
        </div>
    </div>
</section>

{{--<section id="complete_project" class="container my-20 splide">--}}
{{--    <div class="splide__track pb-3">--}}
{{--        <ul class="splide__list">--}}
{{--            @forelse($complete_project as $project)--}}
{{--                <li class="splide__slide rounded-b-lg overflow-hidden">--}}
{{--                <div class="bg-extraLightBlue">--}}
{{--                    <figure><img src="{{ asset('/storage/home-page/images/sixth.png') }}" /></figure>--}}
{{--                    <div class="flex flex-col card-body p-3">--}}

{{--                        <h2 class="card-title text-darkSteelGray xl:justify-center md:justify-center justify-start mb-3">{{ $project->title }}</h2>--}}
{{--                        <div class="flex justify-between mb-2 flex-col">--}}
{{--                            <p class="text-lightSteelBlue">Technology Seeker :</p>--}}
{{--                            <p>{{ $project->user->first_name }}</p>--}}
{{--                        </div>--}}

{{--                    <div class="card-actions justify-around mb-3">--}}
{{--                        <img src="{{ asset('/storage/home-page/icons/third.png') }}"  alt="" />--}}
{{--                        <img src="{{ asset('/storage/home-page/icons/fourth.png') }}"  alt="" />--}}
{{--                    </div>--}}
{{--                    </div>--}}
{{--                    <p class="card-title p-3 bg-darkSteelBlue flex justify-center text-lightSteelGray">{{ $project->start_date->diffForHumans() }}</p>--}}
{{--                </div>--}}
{{--                </li>--}}
{{--            @empty--}}
{{--                <div><p class="text-red-600">No Data</p></div>--}}
{{--            @endforelse--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</section>--}}
