<x-defaultlayout>

    <x-mobile.nav></x-mobile.nav>
    {{-- navbar-mobile ends --}}

     {{-- mobile-menu pop up begins--}}
    @php
    $home=false;
    $about=false;
    $services=false;
    $resources=false;
@endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :resources="$resources" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>
{{-- mobile-menu pop up ends --}}

    {{-- desktop-navbar begins --}}
    @php
        $ishome=false;
        $isabout=false;
        $isservices=false;
        $isresources=false;
    @endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :isresources="$isresources" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
    {{-- desktop-navbar ends --}}


    <!-- component -->
<div class="bg-grey-lighter my-16 flex flex-col w-[92%] max-w-xl mx-auto">
    <div class="container  mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <form id="form" action="/rv/create" method="POST" enctype="multipart/form-data" class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            @csrf
            <h1 class="mb-7 text-2xl font-satoshibold text-center">Sign up</h1>
            <input
                type="text"
                class="block border border-gray-500 w-full p-3 rounded mb-4"
                name="name"
                required
                placeholder="Full Name"
                value="{{old('name')}}" />

                <input
                type="phone"
                required
                minlength="10"
                maxlength="10"
                class="block border border-gray-500 w-full p-3 rounded mb-4"
                name="phone"
                placeholder="Phone"
                value="{{old('phone')}}" />

            <input
                type="text"
                class="block border border-gray-500 w-full p-3 rounded mb-4"
                name="email"
                required
                placeholder="Email"
                value="{{old('email')}}" />

            <input
                id="password"
                type="password"
                class="block border border-gray-500 w-full p-3 rounded mb-4"
                name="password"
                required
                placeholder="Password" />
            <input
                id="confirm_password"
                type="password"
                class="block border border-gray-500 w-full p-3 rounded mb-4"
                name="confirm_password"
                required
                placeholder="Confirm Password" />
                @if ($errors->any())
                    <p id="password_error" class="text-sm font-satoshimedium text-red-600">{{$errors->first('confirm_password')}}</p>
                @endif


            <button
                type="submit"
                class="w-full text-center py-3 rounded bg-[#1976BC] text-white  focus:outline-none my-1"
            >Create Account</button>

            {{-- <div class="text-center text-sm text-grey-dark mt-4">
                By signing up, you agree to the
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Terms of Service
                </a> and
                <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                    Privacy Policy
                </a>
            </div> --}}
        </form>

        <div class="text-grey-dark mt-6">
            Already have an account?
            <a class="no-underline border-b border-blue text-blue" href="/rv/login">
                Log in
            </a>.
        </div>
    </div>
</div>

    {{-- <script>
        let form = document.getElementById('form');
        let passwordfield=document.getElementById('password');
        let confirmpassword=document.getElementById('confirm_password')

        document.getElementById('submit-btn').addEventListener('click',formsubmit);

        function formsubmit(){

            if(password.value==confirmpassword.value){
                form.submit();
            }
            else{
                document.getElementById('password_error').innerText='Confirm password does not match with Password';
                return false;
            }
        }
    </script> --}}

</x-defaultlayout>
