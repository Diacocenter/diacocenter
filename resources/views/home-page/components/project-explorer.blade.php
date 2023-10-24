<div id="explorer-search"></div>
<!-- <section class="container mt-32 mb-14">
    <div class="form-control ">
        <div class="input-group justify-center">
            <input type="text" placeholder="Search Problem"
                class="input input-bordered w-4/6 input-success shadow border-0"/>
            <button class="btn btn-square btn-success"
                style="background: linear-gradient(90deg, #7ABBFF 0%, #3E6EA0 142.14%);">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" viewBox="0 0 27 26" fill="none">
                    <path d="M12 21C17.2467 21 21.5 16.7467 21.5 11.5C21.5 6.25329 17.2467 2 12 2C6.75329 2 2.5 6.25329 2.5 11.5C2.5 16.7467 6.75329 21 12 21Z"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M26 25L21 20" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>
    <div class=" text-center w-full  ">
        <div class="join space-x-2 w-10/12 md:w-fit overflow-x-auto px-1 py-7">
            <input class="bg-white btn btn-success shadow border-0" type="radio" name="options"
                aria-label="#Advanced-Materials"/>
            <input class="bg-white btn btn-success shadow border-0" type="radio" name="options"
                aria-label="#Electronics"/>
            <input class="bg-white btn btn-success shadow border-0" type="radio" name="options"
                aria-label="#Polymer"/>
            <input class="bg-white btn btn-success shadow border-0" type="radio" name="options"
                aria-label="#IT"/>
            <input class="bg-white btn btn-success shadow border-0" type="radio" name="options"
                aria-label="#Chemistry"/>
            <input class="bg-white btn btn-success shadow border-0" type="radio" name="options"
                aria-label="#Civil"/>
            <input class="bg-white btn btn-success shadow border-0" type="radio" name="options"
                aria-label="#Blockchain"/>
            <input class="bg-white btn btn-success shadow border-0" type="radio" name="options"
                aria-label="#Oil"/>
            <input class="bg-white btn btn-success shadow border-0" type="radio" name="options"
                aria-label="#AI"/>
        </div>
    </div>
</section>


<div id="project" class="container splide">
    <div class="splide__track pb-3">
        <ul class="splide__list">
            @forelse($projects as $project)
                <li class="splide__slide rounded-lg overflow-hidden shadow">
                    <a href="{{ route("project.show", $project->slug) }}" class="">
                    <figure><img class="aspect-square	" src="{{ asset('/storage/projects/thumbnails/'. $project->headerImage->url) }}" /></figure>
                    <div class="card-body">
                        <h2 class="card-title text-lightBlack">{{ $project->title }}</h2>
                        <p class="xl:whitespace-normal lg:whitespace-normal md:whitespace-normal"
                            style="
                            display: -webkit-box;
                            -webkit-line-clamp: 3; /* Number of lines to display */
                            -webkit-box-orient: vertical;
                            overflow: hidden;
               ">{{ $project->description }}</p>
                        <div class="card-actions justify-between">
                            <div>Price</div>
                            <div>{{ $project->price }}</div>
                        </div>
                        <div class="card-actions justify-between text-gray">
                            <div>StoreMation</div>
                            <div>{{ $project->start_date }}</div>
                        </div>
                    </div>
                    </a>
                </li>
            @empty
                <div><p class="text-red-600">No Data</p></div>
            @endforelse
        </ul>

    </div>

</div> -->

