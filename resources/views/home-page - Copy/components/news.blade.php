
<div class="container mx-auto news mt-20 font-piazzolla h-1/2">
    <p class="text-h2 text-center my-5">News</p>
    <section class="splide new-splide px-0 p-0 my-5" aria-label="Basic Structure Example" id="new_splide">
        <div class="splide__track">
            <ul class="splide__list pt-5 pb-10">
                @forelse($news as $new)
                    <li class="splide__slide">
                        <div class="flex flex-col lg:flex-row gap-5 relative h-full py-14">
                            <div class="w-full lg:basis-2/3 overflow-hidden flex flex-col">
                                <picture class="flex h-full">
                                    <source class="w-full h-auto"
                                            srcset="{{ asset("storage/news/header/" . $new->headerImage()->first()->url) }}">
                                    <img class="w-full h-auto"
                                         src="{{ asset("storage/news/header/" . $new->headerImage()->first()->url) }}">
                                </picture>
                            </div>
                            <div class="w-full lg:basis-1/3 flex flex-col justify-between">
                                <a class="text-h5 md:text-h4 mb-2 text-black underline stretched-link no-underline"
                                   href="{{ route("news.show", $new->slug) }}">{{ $new->title }}</a>
                                <p class="text-body2">
                                    {{ $new->short_description }}
                                </p>
                                <a href="{{ route("news.show", $new->slug) }}" class="text-primary text-body2 font-medium mt-2">Read more</a>

                                <div class="flex justify-between mt-3 mb-2 text-caption">
                                    <p class="text-lg">
                                        Author: {{ $new->user->first_name }} {{ $new->user->last_name }}
                                    </p>
                                    <p class="text-caption text-info ">
                                        {{ $new->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                @endforelse
            </ul>
        </div>
{{--        <div class="my-carousel-progress">--}}
{{--            <div class="my-carousel-progress-bar"></div>--}}
{{--        </div>--}}
    </section>
</div>
