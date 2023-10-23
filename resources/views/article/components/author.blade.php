<div class="text-center px-0">
    <p class="text-h4 my-5">Author</p>
    <div class="d-flex flex-column flex-md-row flex-lg-column rounded-lg">
            <img class="w-70 d-block m-auto rounded-lg"
                 src="{{asset("/storage/articles/author/") . "/" .  $article->user->profileImage()->first()->url}}">
        <div class="flex flex-col justify-content-between ">
            <p class="text-h5 mt-5">{{ $article->user->first_name }} {{ $article->user->last_name }}</p>
            <p class="text-caption fw-medium text-justify my-5">
                {{ $article->user->about_me }}
            </p>
        </div>
    </div>
</div>