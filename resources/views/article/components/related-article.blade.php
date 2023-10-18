<div class="shadow p-5 position-relative mt-5 rounded-lg">
        <img class="w-100 rounded-lg"
             src="{{asset("/storage/articles/thumbnail/") . "/" .  $relatedArticle->thumbnailImage()->first()->url }}">
    <p class="text-h5 my-5 letter-space-2px fw-bold ">{{ $relatedArticle->title }}</p>
    <p class="text-caption text-start lh-sm">{{$relatedArticle->short_description}}</p>
    <div class="flex justify-between text-light-gray text-subtitle fw-medium mt-5">
        <p>{{ $relatedArticle->user->first_name }} {{ $relatedArticle->user->last_name }}</p>
        <p>{{ $relatedArticle->created_at }}</p>
    </div>
    <a class="btn btn-blue bg-primary text-black block mx-auto px-10 py-3 rounded-lg mt-5 min-h-0 h-10" href="{{ route("blog.show", ["article" => $relatedArticle->slug]) }}">
        Read More
    </a>
</div>


{{--<div class="my-10">--}}
{{--    <div class="card w-full bg-white shadow-xl rounded-none">--}}
{{--        <figure class="px-3 pt-3">--}}
{{--            <img class="w-full h-full" src="{{ asset('/storage/articles/thumbnail/man-work.png') }}" alt="discover">--}}
{{--        </figure>--}}
{{--        <div class="card-body pt-2 px-4 pb-4">--}}
{{--            <h2 class="card-title text-h5 justify-center font-medium">How Diaco Works</h2>--}}
{{--            <p class=" text-subtitle text-info">Diaco bridging the gap between technology seekers and providers.--}}
{{--                Depending on your role as a technology seeker or technology provider, you have a different registration--}}
{{--                process. For more information--}}
{{--            </p>--}}
{{--            <div class="flex justify-between">--}}
{{--                <span class="text-caption text-info">Author: Iman Nasr</span>--}}
{{--                <span class="text-caption text-info">July, 25 2023</span>--}}
{{--            </div>--}}
{{--            <div class="text-center">--}}
{{--                <button--}}
{{--                    class="btn btn-primary btn-sm rounded-none text-black hover:text-white text-center text-button font-normal px-16 mt-5 capitalize">Read</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
