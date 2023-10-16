<div class="card w-full bg-white rounded-none shadow-lg">
    <div class="card-body pt-2 px-4 pb-4">
        <p class="text-h4 text-center">
            Technology Seeker
        </p>
    </div>
    <figure class="px-10 pb-5">
        <img class="w-full h-full" src="{{ asset('/storage/users/profile/' . $project->user->profileImage->url) }}"
            alt="discover">
    </figure>
    <div class="card-body pt-2 px-4 pb-4">
        <h2 class="card-title text-h5 justify-center font-medium">{{$project->user->first_name." ". $project->user->last_name}}</h2>
        <p class=" text-body2 text-justify">{{$project->user->about_me}}</p>
        <div class="bg-primary flex justify-between">

        </div>
    </div>
</div>
