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
    <script>
        let current ='hr';
    </script>
    @if ($id==1)
        <script>
        current='hr';
        </script>
    @endif

    @if ($id==2)
        <script>
            current='op';
        </script>
    @endif

    @if ($id==3)
        <script>
            current='m';
        </script>
    @endif

    @if ($id==4)
        <script>
            current='ba';
        </script>
    @endif

    @if ($id==5)
        <script>
            current='fa';
        </script>
    @endif

    @if ($id==6)
        <script>
            current='su';
        </script>
    @endif

    @if ($id==7)
        <script>
            current='its';
        </script>
    @endif

    @if ($id==8)
        <script>
            current='pr';
        </script>
    @endif

    <div x-data="{show:current}">

    <x-common.tabs></x-common.tabs>

<x-common.service-cards.hr></x-common.service-cards.hr>
<x-common.service-cards.op></x-common.service-cards.op>
<x-common.service-cards.pr></x-common.service-cards.pr>
<x-common.service-cards.m></x-common.service-cards.m>
<x-common.service-cards.ba></x-common.service-cards.ba>
<x-common.service-cards.fa></x-common.service-cards.fa>
<x-common.service-cards.su></x-common.service-cards.su>
<x-common.service-cards.its></x-common.service-cards.its>
    </div>

    {{-- <div class=" w-[90%] lg:w-[84%] mx-auto mt-16 lg:mt-20 mb-10">
        <h3 class=" font-satoshimedium text-base lg:text-4xl">Every improvement starts with a good understanding</h3>
        <p class=" font-satoshiregular mt-7 lg:mt-9 lg:text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae posuere nisl. In dictum luctus arcu, eget feugiat quam varius at. Fusce magna ante,</p>
    </div> --}}

    @php
    $heading="Elevating your business to new heights";
    $paragraph="Accelerating your growth.";
@endphp

<x-main-noimg :heading="$heading" :paragraph="$paragraph"></x-main-noimg>

{{-- <x-common.companies></x-common.companies> --}}

    <x-common.footer></x-common.footer>

</x-defaultlayout>
