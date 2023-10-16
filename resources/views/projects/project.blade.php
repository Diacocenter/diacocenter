@extends('layout.layout')

@section('content')
    <div class="container mt-10 mx-auto font-piazzolla px-5">
        <div class="grid grid-cols-1 lg:grid-cols-4">
            <div class="col-span-1 lg:col-span-3">
                @includeIf('projects.components.project-info')
                {{-- @includeIf('projects.components.phase1') --}}
            </div>
            <div class="col-span-1 lg:border-l lg:pl-10">
                <div class="mb-20">
                    @includeIf('projects.components.author')
                </div>
                <div>
                    @includeIf('projects.components.info')
                </div>
            </div>
        </div>
    </div>
@endsection
