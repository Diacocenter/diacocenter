<div class="text-center px-0">
    <p class="text-h4 my-5">Author</p>
    <div class="d-flex flex-column flex-md-row flex-lg-column">
        <picture>
            <source class="w-100"
                    srcset="{{asset("/storage/articles/author/") . "/" . $article->user->profileImage()->first()->url . ".png"}}">
            <img class="w-70 d-block m-auto"
                 src="{{asset("/storage/articles/author/") . "/" .  $article->user->profileImage()->first()->url. ".webp"}}">
        </picture>
        <div class="flex flex-col justify-content-between ">
            <p class="text-h5 mt-5">{{ $article->user->first_name }} {{ $article->user->last_name }}</p>
            <p class="text-caption fw-medium text-justify my-5">
                {{ $article->user->about_me }}
            </p>
            {{--            <div class="flex justify-content-evenly bg-secondary text-white py-1">--}}
            {{--                @forelse($article->user->socialMedia()->get() as $socialMedia)--}}
            {{--                    <a href="{{ $socialMedia->pivot->address }}">--}}
            {{--                        <i class="fa-brands text-white fa-solid fa-{{$socialMedia->title}} text-white fa-2xl"></i>--}}
            {{--                    </a>--}}
            {{--                @empty--}}
            {{--                @endforelse--}}
            {{--            </div>--}}
        </div>
    </div>
</div>