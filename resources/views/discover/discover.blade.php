@extends('layout.layout')
@section('content')
    <div class="container mx-auto font-piazzolla">
        <div class="my-10">
            <div class="form-control">
                <div class="input-group ">
                    <input type="text" placeholder="Search / Services / Projects / Members / ... "
                           class="input input-bordered w-full text-h6" style="border-radius: 0px"/>
                    <button class="btn  text-white hover:text-black  btn-square " style="border-radius: 0px">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <ul class="grid grid-cols-1 md:grid-cols-5 gap-10 md:gap-1 lg:gap-8 xl:gap-10 justify-items-center">
            <li>
                <input type="checkbox" id="AI" value="" class="hidden peer" required="">
                <label for="AI"
                       class="bg-white border-transparent text-primary shadow px-14 py-3 cursor-pointer peer-checked:bg-darkBlue  peer-checked:text-white hover:text-white hover:bg-darkBlue">
                    AI Driven
                </label>
            </li>
            <li>
                <input type="checkbox" id="popular" value="" class="hidden peer" required="">
                <label for="popular"
                       class="bg-white border-transparent text-primary shadow px-14 py-3 cursor-pointer peer-checked:bg-darkBlue  peer-checked:text-white hover:text-white hover:bg-darkBlue">
                    Popular
                </label>
            </li>
            <li>
                <input type="checkbox" id="oil" value="" class="hidden peer" required="">
                <label for="oil"
                       class="bg-white border-transparent text-primary shadow px-14 py-3 cursor-pointer peer-checked:bg-darkBlue  peer-checked:text-white hover:text-white hover:bg-darkBlue">
                    Oil
                </label>
            </li>
            <li>
                <input type="checkbox" id="electrical" value="" class="hidden peer" required="">
                <label for="electrical"
                       class="bg-white border-transparent text-primary shadow px-14 py-3 cursor-pointer peer-checked:bg-darkBlue  peer-checked:text-white hover:text-white hover:bg-darkBlue">
                    Electrical
                </label>
            </li>
            <li>
                <input type="checkbox" id="mechanical" value="" class="hidden peer" required="">
                <label for="mechanical"
                       class="bg-white border-transparent text-primary shadow px-14 py-3 cursor-pointer peer-checked:bg-darkBlue  peer-checked:text-white hover:text-white hover:bg-darkBlue">
                    Mechanical
                </label>
            </li>
        </ul>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 my-10">
            @foreach($projects as $project)

                <div class="col-span-1">
                    <a href="{{ route("project.show",$project->slug)}}">
                        <div class="card h-full w-full bg-white shadow-xl rounded-none">
                            <figure class="px-3 pt-3">
                                    <img class="w-full h-full" src="{{ asset('/storage/projects/'.$project->gallery->first()->url) }}"
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
