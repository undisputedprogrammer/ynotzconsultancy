<x-defaultlayout>

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
        $resources=true;
    @endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :resources="$resources" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>
    {{-- mobile-menu pop up ends --}}

    {{-- desktop-navbar begins --}}
    @php
        $ishome=false;
        $isabout=false;
        $isservices=false;
        $isresources=true;
    @endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :isresources="$isresources" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
    {{-- desktop-navbar ends --}}

    <x-common.resource-body></x-common.resource-body>

    <x-common.footer></x-common.footer>
</x-defaultlayout>
