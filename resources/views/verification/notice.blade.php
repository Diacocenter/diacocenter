@extends("layout.layout")

@section('content')
    <div class="container mx-auto bg-white">
            <div class="flex flex-row p-0 justify-between">
                <div
                    class="relative flex flex-col justify-center bg-white shadow container text-center text-black tracking-widest p-10 form-items h-full w-full lg:w-1/2">
                      <h1 class="text-h2 mb-5">Verify your Email</h1>
                      <p class="my-5 font-medium text-body2">{{auth()->user()->email}}</p>
                      <p class="font-medium text-body2">We already have sent you an Email, which contains a verification
                          code. Check
                          your inbox to verify your Email address.</p>
                    <form id="form" method="POST">
                        @csrf
                    <div>
                          <button id="start" class="btn bg-primary w-50 p-2 rounded-none text-caption mt-5">Send Code</button>

                          <span id="cd-seconds" class="btn bg-white w-50 p-2 ms-0 rounded-none text-caption mt-5">00 Seconds</span>
                      </div>
                    </form>
                    <form action="{{ route("submit_code") }}" method="POST">
                        @csrf
                      <input name="confirm" type="text"
                             class="border border-black border-2 rounded-none p-2 w-full text-h6 mt-5"
                             placeholder="Enter confirmation code">
                      <p class="text-body2 mt-5">
                          Or wait for 30 seconds...
                      </p>
                      <button type="submit" class="btn bg-primary w-full p-2 rounded-none text-caption mt-5">Confirm
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
        <source srcset="{{asset("storage/login/verify.png")}}">
        <img class="w-100" src="{{asset("storage/login/verify.webp")}}">
    </picture>
@endsection
