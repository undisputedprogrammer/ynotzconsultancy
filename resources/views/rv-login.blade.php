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
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
	<div class="relative py-3 sm:max-w-xl sm:mx-auto">
		<div
			class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<div>
					<h1 class="text-2xl font-semibold">Hey Volunteer! Login to continue</h1>
				</div>
				<div class="divide-y divide-gray-200">
					<form action="/rv/authenticate" method="POST" enctype="multipart/form-data" class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            @csrf
                            <div class="relative">
							<div class="relative z-0">
                                <input autocomplete="off" type="email" id="email" name="email" class="px-0 block py-2.5  w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="{{old('email')}}" />

                                <label for="email" class=" font-satoshimedium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email address</label>
                            </div>
						</div>
						<div class="relative">
							<div class="relative z-0">
                                <input type="password" required id="password" name="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />

                                <label for="password" class=" font-satoshimedium absolute text-base text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>

                                @if ($errors->any())
                                    <p class="text-sm font-satoshimedium text-red-600">{{$errors->first('password')}}</p>
                                @endif
                            </div>
						</div>
						<div class="relative ">
							<button class="bg-blue-500 font-satoshimedium text-white rounded-md px-2 py-1">Login</button>
						</div>
                        <div class="relative ">
							<p class="text-sm font-satoshiregular">Don't have an account? <a href="/rv/sign-up" class="text-blue-500">Sign-up</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



</x-defaultlayout>
