<div class="card w-full bg-white rounded-none shadow-lg">
    <div class="card-body pt-2 px-4 pb-4">
        <p class="text-h5 text-center">
            Project Info
        </p>
    </div>
    <div class="card-body pt-0">
        <ul class="list-disc list-inside text-body1">
            <li class="text-primary my-5">Topic: <br>
                <p class="text-black">{{$project->title}}
                </p>
            </li>
            <li class="text-primary my-5">Industry Type(s):<br>
                <p class="text-black">Circular Economy & Sustainability, Environmental Services, Infrastructure, Real
                    Estate, Sustainable Energy, Urban Solutions Opportunities and Support Opportunity to pilot at
                    selected.</p>
            </li>
            <li class="text-primary my-5">About Project<br>
                <p class="text-black">{{$project->description}}</p>
            </li>
{{--            <li class="text-primary my-5">Phase 1<br>--}}
{{--                <p class="text-black">Low-energy buildings are--}}
{{--                    characterise .......</p>--}}
{{--            </li>--}}
{{--            <li class="text-primary my-5">Phase 2<br>--}}
{{--                <p class="text-black">Low-energy buildings are--}}
{{--                    characterise .......</p>--}}
{{--            </li>--}}
        </ul>
    </div>
</div>
