@extends('layout.layout')
@section('content')
    <div class="container mx-auto font-piazzolla">
        <div class="my-10">
            <div class="form-control ">
                <div class="input-group justify-center">
                    <input type="text" placeholder="Search Problem"
                           class="input input-bordered w-full input-success shadow border-0"/>
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
        </div>
        <ul class="grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-1 lg:gap-8 xl:gap-10 justify-items-center">
            <li>
                <input type="checkbox" id="AI" value="" class="hidden peer" required="">
                <label for="AI"
                       class="bg-white border-transparent text-primary shadow px-14 py-3 cursor-pointer peer-checked:bg-darkBlue  peer-checked:text-white hover:text-white hover:bg-darkBlue rounded-lg">
                    AI Driven
                </label>
            </li>
            <li>
                <input type="checkbox" id="popular" value="" class="hidden peer" required="">
                <label for="popular"
                       class="bg-white border-transparent text-primary shadow px-14 py-3 cursor-pointer peer-checked:bg-darkBlue  peer-checked:text-white hover:text-white hover:bg-darkBlue rounded-lg">
                    Popular
                </label>
            </li>
            <li>
                <input type="checkbox" id="oil" value="" class="hidden peer" required="">
                <label for="oil"
                       class="bg-white border-transparent text-primary shadow px-14 py-3 cursor-pointer peer-checked:bg-darkBlue  peer-checked:text-white hover:text-white hover:bg-darkBlue rounded-lg">
                    Oil
                </label>
            </li>
            <li>
                <input type="checkbox" id="electrical" value="" class="hidden peer" required="">
                <label for="electrical"
                       class="bg-white border-transparent text-primary shadow px-14 py-3 cursor-pointer peer-checked:bg-darkBlue  peer-checked:text-white hover:text-white hover:bg-darkBlue rounded-lg">
                    Electrical
                </label>
            </li>
            <li>
                <input type="checkbox" id="mechanical" value="" class="hidden peer" required="">
                <label for="mechanical"
                       class="bg-white border-transparent text-primary shadow px-14 py-3 cursor-pointer peer-checked:bg-darkBlue  peer-checked:text-white hover:text-white hover:bg-darkBlue rounded-lg">
                    Mechanical
                </label>
            </li>
        </ul>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 my-10">
            @foreach($projects as $project)

                <div class="col-span-1">
                    <a href="{{ route("project.show",$project->slug)}}">
                        <div class="card h-full w-full bg-white shadow rounded-lg">
                            <figure class="px-3 pt-3">
                                    <img class="w-full h-full rounded-lg" src="{{ asset('/storage/projects/'.$project->gallery->first()->url) }}"
                                         alt="discover">
                            </figure>
                            <div class="card-body pt-2 px-4 pb-4">
                                <p class="card-title text-h5">{{$project->title}}</p>
                                <p class=" text-subtitle">{{$project->description}}</p>
                                <div class="flex justify-between">
                                    <span class="text-caption text-info">{{$project->company_name}}</span>
                                    <span class="text-caption text-info">{{$project->created_at}}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
