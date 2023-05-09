<x-defaultlayout>

    {{-- page specific script --}}
    <script src="{{asset('js/home.js')}}" defer="module"></script>

    {{-- navbar-mobile --}}
<x-mobile.nav></x-mobile.nav>
    {{-- navbar-mobile ends --}}

    {{-- mobile-menu pop up begins--}}
    @php
        $home=true;
        $about=false;
        $services=false;
        $resources=false;
    @endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :resources="$resources" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>
    {{-- mobile-menu pop up ends --}}

    {{-- desktop-navbar begins --}}
    @php
        $ishome=true;
        $isabout=false;
        $isservices=false;
        $isresources=false;
    @endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :isresources="$isresources" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
    {{-- desktop-navbar ends --}}

    {{-- hero section begins --}}
<x-common.hero></x-common.hero>
    {{-- hero section ends --}}

    {{-- company logos section --}}
<x-common.companies></x-common.companies>
    {{-- company logos section ends --}}

    {{-- startups section begins --}}
<x-common.startups></x-common.startups>
    {{-- startups section ends --}}

    {{-- Services section begins --}}
<x-common.services></x-common.services>
    {{-- Services section ends --}}

    {{-- faq section --}}
<x-common.faq></x-common.faq>

<x-common.cx></x-common.cx>

<x-common.recent-blogs></x-common.recent-blogs>

    {{-- enquiry section --}}
<x-common.enquire></x-common.enquire>

    {{-- footer begins --}}
<x-common.footer></x-common.footer>
    {{--footer ends--}}

</x-defaultlayout>
