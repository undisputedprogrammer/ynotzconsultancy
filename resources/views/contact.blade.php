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

<x-desktop.nav :ishome="$home" :isabout="$about" :isservices="$services" :isresources="$resources" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
    {{-- desktop-navbar ends --}}
    <x-common.contact-hero></x-common.contact-hero>

    <x-common.footer></x-common.footer>
</x-defaultlayout>
