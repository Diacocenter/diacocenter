@extends('layout.layout')

@section('content')
<div class="container py-10 md:py-16 grid grid-cols-1 lg:grid-cols-2 gap-5">
    <div class="md:col-span-1">
        @includeIf('contactUs.components.forms')
    </div>
    <div class="md:col-span-1">
        @includeIf('contactUs.components.map')
    </div>
</div>
<div class="md:col-span-1">
    @includeIf('contactUs.components.adress')
</div>
<div>
    @includeIf('contactUs.components.FAQ')
</div>
@endsection
