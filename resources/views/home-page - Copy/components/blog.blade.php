
<div class="container mx-auto blogs mt-20 h-50">
    <div>
        <p class="text-h2 text-center my-5">Blogs</p>
        <section class="splide px-0 p-0" aria-label="Slide Container Example" id="blog-splide">
            <div class="splide__track p-5">
                <ul class="splide__list pt-5 pb-10 px-1">
                    @forelse($articles as $article)
                        <li class="splide__slide shadow flex flex-col relative ">
                            <div>
                                <picture>
                                    <source class="w-full"
                                            srcset="{{ asset("/storage/home-page/blog") . "/" . $article->thumbnailImage()->first()->url}}">
                                    <img class="w-full"
                                         src="{{ asset("/storage/home-page/blog") . "/" .  $article->thumbnailImage()->first()->url}}">
                                </picture>
                            </div>
                            <div class="p-5 h-full flex flex-col justify-between">
                                <a class="my-3 text-h5 text-black no-underline link stretched-link leading-none"
                                   href="{{ route("blog.show", $article->slug) }}"
                                >{{ $article->title }}</a>
                                <p class="text-caption">{{ $article->short_description }}</p>
                                <div class="flex justify-between">
                                    <p class="text-subtitle">{{ $article->user->first_name }} {{ $article->user->last_name }}</p>
                                    <p class="text-info text-subtitle">{{ $article->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        </li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </section>
    </div>
</div>

