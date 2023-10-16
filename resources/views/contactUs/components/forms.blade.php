{{-- @if (session('result'))
<div class="bg-green-500 text-white p-4 mb-4 rounded-lg">
    {{ session('result') }}
</div>
@endif

<div class="w-full bg-blue-500 text-white p-4 mb-4">
    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
    @endif
</div> --}}

<div class="font-piazzolla">
    <div>
        <div>
            <div>
                <p class="text-h2 md:text-h1 mx-3 ">Contact Us</p>
            </div>
            <div>
                @if(Session::get('successful'))
                    <div class="text-green-600 text-xl">{{Session::get('successful')}}</div>
                @else
                    <p class="text-body1 mx-3 my-5">Our Friendly Team Would Like to Hear from You.</p>
                @endif

            </div>
        </div>
        <form class="grid grid-cols-1 md:grid-cols-2 md:gap-x-5 gap-y-3" action="{{ route('contact-us.store') }}" method="POST">
            @csrf
            <div class="col-span-2 md:col-span-1 mx-3">
                <label class="label">
                    <p class="label-text text-h5 ">First Name</p>
                </label>
                <input type="text" name="first_name" id="firstName" value="{{old("first_name")}}"
                    class="@error("first_name") border-red-500 @enderror input input-bordered border rounded-none  w-full " placeholder="First Name">
                @error('first_name')
                <div class="text-red-600 text-xs flex justify-content-end italic mt-1 ml-1">Enter at least 3 characters</div>
                @enderror
            </div>
            <div class="col-span-2 md:col-span-1 mx-3">
                <label class="label">
                    <p class="label-text text-h5 ">Last Name</p>
                </label>
                <input type="text" name="last_name" id="lastName" value="{{old("last_name")}}"
                    class="@error("last_name") border-red-500 @enderror input input-bordered border rounded-none w-full  " placeholder="Last Name">
                @error('last_name')
                <div class="text-red-600 text-xs flex justify-content-end italic mt-1 ml-1">Enter at least 3 characters</div>
                @enderror
            </div>
            <div class="col-span-2  mx-3">
                <label class="label">
                    <p class="label-text text-h5 ">Email</p>
                </label>
                <input type="email" name="email" id="email" value="{{old("email")}}"
                    class="@error("email") border-red-500 @enderror input input-bordered border rounded-none w-full  " placeholder="Email">
                @error('email')
                <div class="text-red-600 text-xs flex justify-content-end italic mt-1 ml-1">Invalid Email (Use format @example.com)</div>
                @enderror
            </div>
            <div class="col-span-2  mx-3">
                <label class="label">
                    <p class="label-text text-h5 ">Phone Number</p>
                </label>
                <input type="text" name="phone_number" id="phone_number" value="{{old("phone_number")}}"
                    class="@error("phone_number") border-red-500 @enderror input input-bordered border rounded-none w-full  " placeholder="Phone Number">
                @error('phone_number')
                <div class="text-red-600 text-xs flex justify-content-end italic mt-1 ml-1">Enter Only Number</div>
                @enderror
            </div>
            <div class="col-span-2  mx-3">
                <label class="label">
                    <p class="label-text text-h5 ">Message</p>
                </label>
                <textarea name="message" id="message" class="textarea textarea-bordered w-full rounded-none" placeholder="Bio">{{{ old('message') }}}</textarea>
            </div>
            <div class="col-span-2  text-center my-3">
                <button class="btn btn-primary text-white text-h4 text-center px-10 capitalize rounded-none">Send Message</button>
            </div>
        </form>


    </div>
</div>






{{-- <form class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 md:p-8 bg-white rounded-lg shadow-md"
    action="{{ route('contact-us.store') }}" method="POST">
    @csrf

    <h1 class="text-h1  mb-4">Contact Us</h1>
    <p class="text-body1 mb-4">Our Friendly Team Would Like To Hear From You</p>

    <div class="form-control  text-h5 w-full">
        <label class="label">
            <p class="label-text">First Name</p>
        </label>
        <input type="text" placeholder="First Name" class="input input-bordered input- w-full" />
    </div>

    <div class="mb-4">
        <label for="last_name" class="block font-medium  text-h5">Last name</label>
        <input type="text" placeholder="Type here" class="input input-bordered input-primary w-full" />
    </div>

    <div class="mb-4">
        <label for="email" class="block font-medium  text-h5">Email</label>
        <input type="email" class=" border text-h6 border-gray-300 rounded-lg" id="email" name="email"
            placeholder="Email" value="{{ old('email') }}">
    </div>

    <div class="mb-4">
        <label for="phone_number" class="block font-medium  text-h5">Phone Number</label>
        <input type="text" class=" border text-h6 border-gray-300 rounded-lg" id="phone_number" name="phone_number"
            placeholder="Phone Number" value="{{ old('phone_number') }}">
    </div>

    <div class="mb-4">
        <label for="message" class="block font-medium  text-h5">Message</label>
        <textarea class=" border text-h6 border-gray-300 rounded-lg" id="message" rows="4" name="message"
            placeholder="Message">{{ old('message') }}</textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg text-sm">Send Message</button>
    </div>
</form> --}}
