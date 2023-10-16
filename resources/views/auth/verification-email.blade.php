@extends("auth.template-auth")

@section('content-object')
    <div class="container mx-auto bg-white flex flex-row my-20 gap-10 justify-between">
        <div class="flex flex-col justify-between bg-white shadow container text-center text-black tracking-widest p-8 form-items h-full  w-full lg:w-1/2">
            <h1 class="text-h2 mb-5">Verify your Email</h1>
            <p class="my-5 font-medium text-body2">marshian03@gmail.com</p>
            <p class="font-medium text-body2">We already have sent you an Email, which contains a verification code.
                Check
                your inbox to verify your Email address.</p>
            <input name="confirm-code" type="text" class="border border-black rounded-none p-2 w-full text-h6 mt-5"
                   placeholder="Enter confirmation code">
            <p class="text-body2 mt-5">
                Or wait for 30 seconds...
            </p>
            <button type="submit" class="btn bg-primary w-full p-2 rounded-none text-caption mt-5">Confirm
            </button>
            <button type="submit" class="btn text-primary bg-white border-0 w-full p-2 rounded-none text-caption mt-5">
                Cancel
            </button>
        </div>
    </div>
@endsection


@section('image')
    <picture>
        <source srcset="{{asset("storage/login/verify.png")}}">
        <img class="w-100" src="{{asset("storage/login/verify.webp")}}">
    </picture>
@endsection
