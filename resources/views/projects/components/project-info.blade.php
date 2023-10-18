<div>
    <div>
        <p class="text-h2">
            {{$project->title}}
        </p>
    </div>
    <div class="lg:pr-14">
        <div></div>
        <div></div>
        <div>
            <div>
                <p class="text-h3 my-7">Description</p>
            </div>
            <div>
                <p class="text-body2">{{$project->description}}</p>
            </div>
        </div>
        <div>
            <div>
                <p class="text-h3 my-7">Gallery</p>
            </div>
            <div>

                <div class="container_p">

                    <!-- All images with side view -->
                    <div class="side_view">
                        @forelse($project->gallery as $image)
                            @if($loop->first)
                                <!-- Main view of our gallery -->
                                <div class="main_view mx-auto">
                                    <img class="main_view_first aspect-square md:aspect-auto" style="width: 100%; height: 100%;" src="{{ asset('/storage/projects/gallery/' . $image->url) }}" id="main" alt="IMAGE">
                                </div>
                            @endif
                            <img class="max-h-48 aspect-auto" src="{{ asset('/storage/projects/gallery/' . $image->url) }}" alt="discover" onclick="change(this.src)">
                        @empty
                            <h1 class="text-red-500">There is no image</h1>
                        @endforelse
                    </div>
                </div>

                <!-- <div class="carousel carousel-center">
                    @foreach($project->gallery as $image)
                    <div class="carousel-item mx-2">
                        <img class="max-h-48 aspect-auto" src="{{ asset('/storage/projects/gallery/' . $image->url) }}"
                            alt="discover">
                    </div>
{{--                        <div class="carousel-item mx-2">--}}
{{--                            <img class="w-full max-h-48" src="{{ asset('/storage/projects/' . $image->url) }}"--}}
{{--                                 alt="discover">--}}
{{--                        </div>--}}
                    @endforeach

{{--                    <div class="carousel-item mx-2">--}}
{{--                        <img class="w-full h-full" src="{{ asset('/storage/gallery/3.png') }}"--}}
{{--                            alt="discover">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item mx-2">--}}
{{--                        <img class="w-full h-full" src="{{ asset('/storage/gallery/4.png') }}"--}}
{{--                            alt="discover">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item mx-2">--}}
{{--                        <img class="w-full h-full" src="{{ asset('/storage/gallery/5.png') }}"--}}
{{--                            alt="discover">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item mx-2">--}}
{{--                        <img class="w-full h-full" src="{{ asset('/storage/gallery/5.png') }}"--}}
{{--                            alt="discover">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item mx-2">--}}
{{--                        <img class="w-full h-full" src="{{ asset('/storage/gallery/4.png') }}"--}}
{{--                            alt="discover">--}}
{{--                    </div>--}}
                </div> -->
            </div>
        </div>
        <div class="mt-10">
            <div>
                <p class="text-h3">
                    Development Plan
                </p>
            </div>
            <div>
           @if($project->phases->count()!==0)
               @foreach($project->phases as $phase)
                        <div class="border p-5 my-14">
                            <div class="flex justify-between">
                                <div>
                                    <p class="text-primary text-h3">
                                        {{$phase->title}}
                                    </p>
                                </div>
                                <div class="bg-[#eeeeee] px-2">
                                    <p class="text-h5">
                                        Completed
                                    </p>
                                </div>
                            </div>
                            <div>
                                <p class="text-body2 my-5 font-semibold">
                                    {{$phase->description}}
                                </p>
                            </div>
                            <div>
                                <ul>
                                    <li class="text-body1">Energy Consumption</li>
                                    <li class="text-body1">Energy Consumption</li>
                                    <li class="text-body1">Energy Consumption</li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <a href="{{route("phase",$phase->slug)}}">
                                <button
                                    class="btn btn-primary btn-sm rounded-none text-black hover:text-white text-center text-button font-normal px-10 mt-5 capitalize">More
                                    ...</button>
                                </a>
                            </div>
                        </div>
               @endforeach
                @else
               <div>No phases ...</div>
           @endif
{{--                <div class="border p-5 my-16">--}}
{{--                    <div class="flex justify-between">--}}
{{--                        <div>--}}
{{--                            <p class="text-primary text-h3">--}}
{{--                                Phase 2--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="bg-lightBlue px-2">--}}
{{--                            <p class="text-h5">--}}
{{--                                Applying--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <p class="text-body2 my-5 font-semibold">--}}
{{--                            Low-energy buildings are characterised by energy-efficient design and systems that provide--}}
{{--                            high standards of occupant comfort at low energy consumption. A combination of passive--}}
{{--                            strategies (e.g., solar shading, natural ventilation, daylighting), active strategies (e.g.,--}}
{{--                            energy efficient HVAC, energy efficient.--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <ul>--}}
{{--                            <li class="text-body1">Energy Consumption</li>--}}
{{--                            <li class="text-body1">Energy Consumption</li>--}}
{{--                            <li class="text-body1">Energy Consumption</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="text-center">--}}
{{--                        <button--}}
{{--                            class="btn btn-primary btn-sm rounded-none text-black hover:text-white text-center text-button font-normal px-10 mt-5 capitalize">More--}}
{{--                            ...</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="mt-10">
            <div>
                <p class="text-h3">
                    About Seeker
                </p>
            </div>
            <div class="grid col-span-1 lg:grid-cols-5 border p-5 my-7">
                <div class="col-span-1 lg:col-span-4">
                    <p>
                  {{$project->user->about_me}}
                    </p>
                </div>
                <div class="col-span-1">
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

const change = src => {
    document.getElementById('main').src = src
}
</script>
