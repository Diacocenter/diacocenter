@extends("layout.layout-panel")

@section('content')
    <div id="app" lang="{{ $available_locales }}" current-lang="{{ $current_locale }}"></div>

    @viteReactRefresh
    @vite(['resources/js/manager-panel.js'])
@endsection
