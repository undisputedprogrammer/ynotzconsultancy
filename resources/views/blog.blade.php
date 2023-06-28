<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YNOTZ-CONSULTING</title>
    <link rel="shortcut icon" href="{{asset('images/icons/favicon.ico')}}" type="image/x-icon">
    <script src="{{asset('js/swiper.js')}}"></script>
    <script src="{{asset('js/flow.js')}}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/blog.css')}}">
    <script src="{{asset('js/aos.js')}}"></script>
</head>
<body x-data="{show:false, toggle(){this.show=!this.show}}">

    {{-- page specific script --}}
    <script src="{{asset('js/home.js')}}" defer="module"></script>

    {{-- navbar-mobile --}}
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

    <x-common.blog-body :blog="$blog" :recents="$recents"></x-common.blog-body>

    {{-- <div class=" w-[96%] mx-auto my-5">

    </div> --}}

    <x-common.footer></x-common.footer>

    <script>
        AOS.init();
    </script>
</body>
</html>
