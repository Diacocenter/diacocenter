@extends("layout.layout")

@section("content")
    @includeIf("auth.components.form")
@endsection

@section('image')
    @includeIf("auth.components.animation-bg")
@endsection
