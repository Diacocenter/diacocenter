@extends('layout.layout')

@section('content')
    <div class="container mt-10 mx-auto font-piazzolla">
        <div class="grid grid-cols-1 lg:grid-cols-4">
            <div class="col-span-1 lg:col-span-3 me-5">
{{--                icon--}}
                <h1 class="text-h1 mb-10">{{$phases->title}}</h1>
                <div class="grid grid-cols-1 md:grid-cols-4 justify-between">
                    <a href="#description" class="text-h5 description">Description</a>
                    <a href="#documents" class="text-h5 documents">Documents</a>
                    <a href="#prerequisite" class="text-h5 prerequisite">Prerequisite</a>
                    <a href="#who_need" class="text-h5 who_need">Who we need</a>
                </div>
                <progress class="progress progress-primary w-ful " id="progress-phase" value="0" max="100"></progress>
                <div class="border border-black p-5 mt-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-1 lg:justify-items-center border-b pb-2">
                        <div class="flex items-center">
                            <img class="mr-1" src="{{asset("storage/projects/topic.png")}}">
                            <div>
                                <p class="text-primary text-h5">Topic:</p>
                                <p class="text-body2">{{$phases->title}}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="mr-1" src="{{asset("storage/projects/start-date.png")}}">
                            <div>
                                <p class="text-primary text-h5">Start Date:</p>
                                <p class="text-body2">{{$phases->start_date}}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="mr-1" src="{{asset("storage/projects/end-date.png")}}">
                            <div>
                                <p class="text-primary text-h5">End Date:</p>
                                <p class="text-body2">{{$phases->end_date}}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img class="mr-1" src="{{asset("storage/projects/status.png")}}">
                            <div>
                                <p class="text-primary text-h5">Status:</p>
                                <p class="text-body2">Beginning</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-primary text-h5">
                        Industry Type(s):
                    </p>
                    <p class="text-body2">
                        Circular Economy & Sustainability, Environmental Services, Infrastructure, Real Estate,
                        Sustainable Energy, Urban Solutions Opportunities and Support Opportunity to pilot at selected.
                    </p>
                </div>
                <div class="mt-10">
                    <p class="text-h3" id="description">
                        Description
                    </p>
                    <p class="text-body2 mt-5">
                    {{$phases->description}}
                    </p>
                </div>
                <div class="mt-10">
                    <p class="text-h3" id="documents">
                        Documents
                    </p>
                    <div class="overflow-x-auto border border-black text-center mt-5 md:px-10 md:py-5">
                        <table class="table table-sm text-body2">
                            <!-- head -->
                            <thead class="bg-lightBlue text-black">
                            <tr>
                                <th>Name</th>
                                <th>Include</th>
                                <th>Size</th>
                                <th>Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- row 1 -->
                            @foreach($phases->documents()->get() as $document)
                               <tr>
                                   <td>{{$document->title}}</td>
                                   <td>{{$document->file_name}}</td>
                                   <td>{{$document->file_size}}</td>
                                   <td>icon</td>
                               </tr>
                           @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="mt-10">
                    <p class="text-h3" id="prerequisite">
                        Prerequisite
                    </p>
                    <div class="flex justify-between md:justify-start gap:4 md:gap-20 mt-5">
                        <div class="text-body1">
                            @foreach($phases->prerequisite as $prerequisites)
                                <ul class="list-disc">
                                    @foreach($prerequisites as $pre)
                                    <li>
                                        {{$pre}}
                                    </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="mt-10">
                    <p class="text-h3" id="who_need">
                        who we need
                    </p>
                    <p class="text-body2 mt-5">
                        Low-energy buildings are characterised by energy-efficient design and systems that provide high
                        standards of occupant comfort at low energy consumption. A combination of passive strategies
                        (e.g., solar shading, natural ventilation, daylighting), active strategies (e.g., energy
                        efficient HVAC, energy efficient artificial lighting), and energy management (e.g., building
                        automation, smart control, and plug-load management) can be adopted to significantly reduce an
                        existing
                    </p>
                </div>
                <button class="btn btn-primary text-black hover:text-white text-caption rounded-none font-normal mx-auto block px-20 py-0 my-10 ">Apply
                </button>
            </div>
            <div class="col-span-1 lg:border-l px-17">
                <div>
                    @includeIf('projects.components.phase-author')
                </div>
                <div>
                    @includeIf('projects.components.phase-info')
                </div>
            </div>
        </div>
    </div>
@endsection
