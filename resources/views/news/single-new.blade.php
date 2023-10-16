@extends("layout.layout")

@section("content")
    <div class="container mt-10 mx-auto font-piazzolla">
        <picture>
            <source class="w-full"
                    srcset="{{asset("/storage/news/header") . "/" . "X.png" }}">
            <img class="w-full"
                 src="{{asset("/storage/news/header") . "/" .  "X.png" }}">
        </picture>
        <div class="container mt-10 mx-auto font-piazzolla">

        </div>
    </div>
@endsection
