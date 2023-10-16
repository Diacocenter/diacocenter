@extends('layout.layout')

@section('content')
    <div class="container mx-auto mt-10 font-piazzolla">
        <div>
            <div>
                <p class="text-center text-h1 my-10">
                    News
                </p>
            </div>
            <div>
                <section class="splide new-splide px-0 p-0 m-5" aria-label="Basic Structure Example" id="new_splide">
                    <div class="splide__track">
                        <ul class="splide__list pt-5 pb-10">
                            @forelse($news as $new)
                                <li class="splide__slide">
                                    <div class="relative">
                                        <div class="">
                                            <picture class="flex h-full">
                                                <source class="w-full h-auto"
                                                        srcset="{{ asset('storage/news/header/' . $new->headerImage()->first()->url) }}">
                                                <img class="w-full h-auto"
                                                     src="{{ asset('storage/news/header/' . $new->headerImage()->first()->url) }}">
                                            </picture>
                                        </div>
                                        <div class="lg:p-10 w-full lg:w-[40%] lg:absolute bottom-[5%] left-[2%] backdrop-blur bg-white/40">
                                            <div>
                                                <a class="text-h5 md:text-h4 mb-2 text-black underline stretched-link no-underline"
                                                   href="{{ route('news.show', $new->slug) }}">{{ $new->title }}</a>
                                            </div>
                                            <div class="mt-2">
                                                <p class="text-body2">
                                                    {{ $new->short_description }}
                                                </p>
                                            </div>
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
                    <div class="my-carousel-progress">
                        <div class="my-carousel-progress-bar"></div>
                    </div>
                </section>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <p class="text-center text-h1 my-20 lg:my-10">
                        Blogs
                    </p>
                </div>
                <div>
                    <section class="splide px-0 p-0" aria-label="Slide Container Example" id="blog-splide">
                        <div class="splide__track p-5">
                            <ul class="splide__list pt-5 pb-10 px-1">
                                @forelse($articles as $article)
                                    <li class="splide__slide shadow flex flex-col relative">
                                        <div>
                                            <picture>
                                                <source class="w-full"
                                                        srcset="{{ asset('/storage/home-page/blog') . '/' . $article->thumbnailImage()->first()->url}}">
                                                <img class="w-full"
                                                     src="{{ asset('/storage/home-page/blog') . '/' . $article->thumbnailImage()->first()->url}}">
                                            </picture>
                                        </div>
                                        <div class="p-5 h-full flex flex-col justify-between">
                                            <a class="my-3 text-h5 text-black no-underline link stretched-link leading-none"
                                               href="{{ route('blog.show', $article->slug) }}">{{ $article->title }}</a>
                                            <p class="text-caption">{{ $article->short_description }}</p>
                                            <div class="flex justify-between">
                                                <p class="text-subtitle">{{ $article->user->first_name }}
                                                    {{ $article->user->last_name }}</p>
                                                <p class="text-info text-subtitle">
                                                    {{ $article->created_at->diffForHumans() }}</p>
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
        </div>
    </div>
@endsection
