@extends("layout.layout")

@section("content")
    @includeIf("home-page.components.header")
    @includeIf("home-page.components.articles")
    @includeIf("home-page.components.news")
    @includeIf("home-page.components.blog")
@endsection

<script type="module" src="/resources/js/public.js"></script>
