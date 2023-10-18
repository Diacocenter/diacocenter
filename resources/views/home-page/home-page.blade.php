@extends('layout.layout')

@section("content")
<div>
    <div style="background-image:url( {{asset("/storage/home-page/fadeBlue.png")}})" class="bg-no-repeat bg-right ">
        @includeIf("home-page.components.header")

        @includeIf("home-page.components.project-explorer")

        @includeIf("home-page.components.services")

        @includeIf("home-page.components.completed-project")

        @includeIf("home-page.components.start-project")
    </div>
</div>

@endsection
