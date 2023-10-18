@extends('layout.layout')

@section('content')
{{--        <div class="container mx-auto mt-10 font-piazzolla">--}}
{{--            <div>--}}
{{--                <div>--}}
{{--                    <p class="text-center text-h1 my-10">--}}
{{--                        News--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <section class="splide new-splide px-0 p-0 m-5" aria-label="Basic Structure Example" id="new_splide">--}}
{{--                        <div class="splide__track">--}}
{{--                            <ul class="splide__list pt-5 pb-10">--}}
{{--                                @forelse($news as $new)--}}
{{--                                    <li class="splide__slide">--}}
{{--                                        <div class="relative">--}}
{{--                                            <div class="">--}}
{{--                                                <picture class="flex h-full">--}}
{{--                                                    <source class="w-full h-auto"--}}
{{--                                                        srcset="{{ asset('storage/news/header/' . $new->headerImage()->first()->url . '.png') }}">--}}
{{--                                                    <img class="w-full h-auto"--}}
{{--                                                        src="{{ asset('storage/news/header/' . $new->headerImage()->first()->url . '.webp') }}">--}}
{{--                                                </picture>--}}
{{--                                            </div>--}}
{{--                                            <div--}}
{{--                                                class="lg:p-10 w-full lg:w-[40%] lg:absolute bottom-[5%] left-[2%] backdrop-blur bg-white/40">--}}
{{--                                                <div>--}}
{{--                                                    <p class="text-black text-h4">--}}
{{--                                                        Robots for SMEs: Automation to combat shortage of skilled workers--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                                <div class="mt-2">--}}
{{--                                                    <p class="text-body1">--}}
{{--                                                        Robots for SMEs: Automation to combat shortage of skilled workers--}}
{{--                                                        Shortage of skilled workers, difficult delivery conditions and high--}}
{{--                                                        energy costs: German SMEs are struggling with major challenges.--}}
{{--                                                        According--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                                <a href="#">--}}
{{--                                                    <p class="text-body1 text-primary mb-2">--}}
{{--                                                        Read more--}}
{{--                                                    </p>--}}
{{--                                                </a>--}}
{{--                                                <div class="flex justify-between">--}}
{{--                                                    <span class="text-h6 text-black ">--}}
{{--                                                        Auther: Iman Nasr--}}
{{--                                                    </span>--}}
{{--                                                    <span class="text-h6 text-slate-300 ">--}}
{{--                                                        2 days ago--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                         <div class="flex flex-col lg:flex-row gap-5 relative h-full py-14">--}}
{{--                                            <div class="w-full lg:basis-2/3 overflow-hidden flex flex-col">--}}
{{--                                                <picture class="flex h-full">--}}
{{--                                                    <source class="w-full h-auto"--}}
{{--                                                        srcset="{{ asset('storage/news/header/' . $new->headerImage()->first()->url . '.png') }}">--}}
{{--                                                    <img class="w-full h-auto"--}}
{{--                                                        src="{{ asset('storage/news/header/' . $new->headerImage()->first()->url . '.webp') }}">--}}
{{--                                                </picture>--}}
{{--                                            </div>--}}
{{--                                            <div class="w-full lg:basis-1/3 flex flex-col justify-between">--}}
{{--                                                <a class="text-h5 md:text-h4 mb-2 text-black underline stretched-link no-underline"--}}
{{--                                                    href="{{ route('news.show', $new->slug) }}">{{ $new->title }}</a>--}}
{{--                                                <p class="text-body2">--}}
{{--                                                    {{ $new->short_description }}--}}
{{--                                                </p>--}}
{{--                                                <a class="text-primary text-body2 font-medium mt-2">Read more</a>--}}

{{--                                                <div class="flex justify-between mt-3 mb-2 text-caption">--}}
{{--                                                    <p class="text-lg">--}}
{{--                                                        Author: {{ $new->user->first_name }} {{ $new->user->last_name }}--}}
{{--                                                    </p>--}}
{{--                                                    <p class="text-caption text-info ">--}}
{{--                                                        {{ $new->created_at->diffForHumans() }}--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                @empty--}}
{{--                                @endforelse--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                                <div class="my-carousel-progress">--}}
{{--                                    <div class="my-carousel-progress-bar"></div>--}}
{{--                                </div>--}}
{{--                    </section>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <p class="text-center text-h1 my-20 lg:my-10">--}}
{{--                            Blogs--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <section class="splide px-0 p-0" aria-label="Slide Container Example" id="blog-splide">--}}
{{--                            <div class="splide__track p-5">--}}
{{--                                <ul class="splide__list pt-5 pb-10 px-1">--}}
{{--                                    @forelse($articles as $article)--}}
{{--                                        <li class="splide__slide shadow flex flex-col relative">--}}
{{--                                            <div>--}}
{{--                                                <picture>--}}
{{--                                                    <source class="w-full"--}}
{{--                                                        srcset="{{ asset('/storage/home-page/blog') . '/' . $article->thumbnailImage()->first()->url . '.png' }}">--}}
{{--                                                    <img class="w-full"--}}
{{--                                                        src="{{ asset('/storage/home-page/blog') . '/' . $article->thumbnailImage()->first()->url . '.webp' }}">--}}
{{--                                                </picture>--}}
{{--                                            </div>--}}
{{--                                            <div class="p-5 h-full flex flex-col justify-between">--}}
{{--                                                <a class="my-3 text-h5 text-black no-underline link stretched-link leading-none"--}}
{{--                                                    href="{{ route('blog.show', $article->slug) }}">{{ $article->title }}</a>--}}
{{--                                                <p class="text-caption">{{ $article->short_description }}</p>--}}
{{--                                                <div class="flex justify-between">--}}
{{--                                                    <p class="text-subtitle">{{ $article->user->first_name }}--}}
{{--                                                        {{ $article->user->last_name }}</p>--}}
{{--                                                    <p class="text-info text-subtitle">--}}
{{--                                                        {{ $article->created_at->diffForHumans() }}</p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    @empty--}}
{{--                                    @endforelse--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </section>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

<div class="container my-10">
        <img class="w-100 rounded-lg"
             src="{{asset("/storage/news/header") . "/" .  $news->headerImage()->first()->url }}">
    <div class="my-10 ">
        <h1 class="text-h3 md:text-h2"> {{$news->title}}
        </h1>
        <p class="text-body1" >
            {!! $news->body !!}
        </p>
    </div>
</div>
{{--    <div class="container">--}}
{{--        <img class="mt-10" src="{{ asset('storage/news/header/humanly.png')}}"/>--}}
{{--        <div  class="mt-5">--}}
{{--            <p class="text-h3">Humanly is Ahead of the Pack in using AI to Hire at Scale</p>--}}
{{--            <p class="text-body1 mt-5">--}}
{{--                Automation in recruiting has been a goal for years. In today’s fast-paced and competitive job market,--}}
{{--                time is money. Whatever you can do to speed things up will give your company a competitive edge. But--}}
{{--                automation in recruiting communication has often been impersonal and clunky – that all changes with--}}
{{--                Artificial Intelligence (AI) We’ve already discussed in a previous blog how AI is changing recruiting.--}}
{{--                One company was a very early adopter: Humanly. They have been at the forefront of the AI hiring--}}
{{--                revolution, and have been using conversational AI to hire more efficiently since 2018.--}}
{{--                <br/>--}}
{{--                Humanity uses AI to create advanced conversations that allow employers to hire at an unprecedented--}}
{{--                scale. “We’re really excited about how employers can use Humanly for high volume recruiting,” says--}}
{{--                Bianca Nieves, Head of Demand Generation at Humanly. “If you’re trying to hire many people at once, we--}}
{{--                can save so much time. We like to think of it as making the recruiter “superhuman.”--}}
{{--            </p>--}}
{{--            <a class="text-primary mt-10">https://talentreachnw.com/humanly-is-ahead-of-the-pack-in-using-ai-to-hire-at-scale</a>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
