@extends("layout.layout")

@section('content')
    <div class="container mx-auto bg-white">
        <div class="flex flex-row p-0 justify-between">
            <div class="relative flex flex-col justify-center bg-white shadow container text-center text-black tracking-widest p-10 form-items h-auto w-full lg:w-1/2">
                <h1 class="text-h2 mb-5 text-darkSteelGray">Verify your Email</h1>
{{--                <p class="my-5 font-medium text-body2">{{auth()->user()->email}}</p>--}}
                <p class="font-medium text-body2 text-lightSteelBlue">If your email address is correct, please click here to request a verification code. After receiving the code, please enter it in the box below</p>
                <form id="form" method="POST">
                    @csrf
                    <div class="flex justify-center mt-10">
                        <button id="start" class="btn bg-primary w-1/2 p-2 rounded-l-xl rounded-r-none text-caption mt-5 text-darkSteelGray">Send Code</button>
                        <span id="cd-seconds" class="btn bg-white w-1/2 p-2 rounded-r-xl rounded-l-none border-2 border-primary text-darkSteelGray text-caption mt-5">30 Seconds</span>
                    </div>
                </form>
                <form action="{{ route("submit_code") }}" method="POST">
                    @csrf
                    <input name="confirm" type="text"
                           class="border border-darkSteelGray border-2 rounded-xl p-2 w-full text-h6 mt-5"
                           placeholder="Enter confirmation code">
                    <button type="submit" class="btn bg-primary w-full p-2 rounded-xl text-caption mt-5 text-darkSteelGray">Confirm
                    </button>
                </form>
            </div>
            <div class="relative flex flex-col hidden lg:block">
                <img src="{{ asset('storage/website/img.svg') }}">
            </div>
        </div>

    </div>
    </div>


    <script>
        let seconds = 30;
        let timerID;

        console.log("before start click event");
        document.getElementById("start").addEventListener("click", function () {
            console.log("start click event");
            timerID = setInterval(function () {
                if (seconds > 0) {
                    document.getElementById('cd-seconds').innerHTML = --seconds;
                    document.getElementById('start').disabled = true;
                }
            }, 1000);
        });

        const form = document.getElementById('form');

        form.addEventListener('submit', e => {
            e.preventDefault();

            fetch('/verify-dispatch', {
                method: 'POST',
                body: new FormData(form)
            })
                .then(response => {
                })        })

    </script>

@endsection


@section('image')
    <picture>
        <source srcset="{{asset("storage/website/login/verify.png")}}">
        <img class="w-100" src="{{asset("storage/website/login/verify.webp")}}">
    </picture>
@endsection
