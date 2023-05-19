{{-- <x-common.service-cards.hr></x-common.service-cards.hr>
<x-common.service-cards.op></x-common.service-cards.op>
<x-common.service-cards.pr></x-common.service-cards.pr>
<x-common.service-cards.m></x-common.service-cards.m>
<x-common.service-cards.ba></x-common.service-cards.ba>
<x-common.service-cards.fa></x-common.service-cards.fa>
<x-common.service-cards.su></x-common.service-cards.su>
<x-common.service-cards.its></x-common.service-cards.its> --}}

<x-common.services></x-common.services>






<div class=" w-[90%] lg:w-[84%] mx-auto mt-16 lg:mt-20 mb-10">
    <h3 class=" font-satoshimedium text-base lg:text-4xl">Every progress begin with a solid understanding
    </h3>
    <p class=" font-satoshiregular mt-7 lg:mt-9 lg:text-xl">Let’s share your business thoughts and concerns with us
    </p>
</div>

<div class=" lg:mt-20">

<div class=" mx-5 flex space-x-4 lg:space-x-7 overflow-auto hide-scroll lg:justify-center">
    <div class="p-6 xl:p-7 bg-gray-50 h-[230px] md:h-[268px] xl:h-[290px] md:aspect-square rounded-2xl flex flex-col justify-center">
        <img class="p-3 rounded-2xl bg-white h-[40px] w-[40px]" src="{{asset('/images/icons/flexicon.svg')}}" alt="">
        <h3 class=" font-satoshiregular text-[17px] xl:text-xl my-4">Reliable
        </h3>
        <p class=" font-satoshiregular text-sm xl:text-base w-[190px] md:w-[220px] xl:w-[320px]">Honest is the word we value the most. You can rely on us in all your business dealings.
        </p>
    </div>
    <div class="p-6 xl:p-7 bg-gray-50 h-[230px] md:h-[268px] xl:h-[290px] rounded-2xl flex flex-col justify-center">
        <img class="p-3 rounded-2xl bg-white h-[40px] w-[40px]" src="{{asset('/images/icons/flexicon.svg')}}" alt="">
        <h3 class=" font-satoshiregular text-[17px] xl:text-xl my-4">Flexible</h3>
        <p class=" font-satoshiregular text-sm xl:text-base w-[190px] md:w-[220px] xl:w-[320px]">We can adapt to your requirements and restrictions to deliver a better outcome.
        </p>
    </div>
    <div class="p-6 xl:p-7 bg-gray-50 h-[230px] md:h-[268px] xl:h-[290px] rounded-2xl flex flex-col justify-center">
        <img class="p-3 rounded-2xl bg-white h-[40px] w-[40px]" src="{{asset('/images/icons/flexicon.svg')}}" alt="">
        <h3 class=" font-satoshiregular text-[17px] xl:text-xl my-4">Valuable</h3>
        <p class=" font-satoshiregular text-sm xl:text-base w-[190px] md:w-[220px] xl:w-[320px]">Your investment in us will never be a waste of money. We make every effort to improve your business.
        </p>
    </div>

</div>

{{-- <div class="flex w-full justify-center space-x-7 mt-12 lg:hidden">
<img src="{{asset('/imagesicons/right-chevron.svg')}}" alt="">
<img src="{{asset('/images/icons/left-chevron.svg')}}" alt="">
</div> --}}

<x-common.contact-card></x-common.contact-card>

@php
    $heading="Elevating your business to new heights";
    $paragraph="Accelerating your growth.";
@endphp

<x-main-noimg :heading="$heading" :paragraph="$paragraph"></x-main-noimg>

{{-- <x-common.companies></x-common.companies> --}}
