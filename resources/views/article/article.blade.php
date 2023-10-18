@extends('layout.layout')

@section('content')
    <div class="container my-10 mx-auto font-piazzolla">
        <div>
                <img class="w-100 rounded-lg" src="{{ asset('/storage/articles/header') . '/' . $article->headerImage()->first()->url }}">
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-4 mt-10">
            <div class="col-span-1 lg:col-span-3 text-body1 pr-10">
                {!! $article->body !!}
            </div>
            <div class="col-span-1 pl-5 lg:border-l">
                <div>
                    @includeIf('article.components.author')
                </div>
                <div>
                    <p class="text-center text-h4 my-10">Related Article </p>
                </div>
                <div class="">
                    @forelse($relatedArticles as $relatedArticle)
                        @includeIf('article.components.related-article')
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
