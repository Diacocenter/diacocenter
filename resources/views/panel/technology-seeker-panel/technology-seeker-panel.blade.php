@extends("layout.layout-panel")

@section('content')
    <div id="app" lang="{{ $available_locales }}" current-lang="{{ $current_locale }}"></div>

    @viteReactRefresh
    @vite(['resources/js/technology-seeker-panel.js'])
@endsection
