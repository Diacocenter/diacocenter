<div class="card w-full bg-white rounded-none shadow-lg">
    <div class="card-body pt-2 px-4 pb-4">
        <p class="text-h4 text-center">
            Author
        </p>
    </div>
    @foreach($phases->project()->get() as $project)
    <figure class="px-10 pb-5">
        <img class="" src="{{ asset('/storage/users/profile/' . $project->user()->first()->profileImage()->first()->url)}}"
            alt="discover">
    </figure>
    <div class="card-body pt-2 px-4 pb-4">
            <h2 class="card-title text-h5 justify-center font-medium">{{$project->user()->first()->first_name." ".$project->user()->first()->last_name}}</h2>
            <p class=" text-caption text-justify">{{$project->user()->first()->about_me}}</p>
        <div class="bg-secondary flex justify-between">
        </div>
    </div>
    @endforeach
</div>
