<div class="w-full">
    @php
        $heading="WE OFFER YOU STRONG SOLUTIONS";
        $paragraph="For fueling your growth and viability";
        $heading2="GET AN IMPRESSION OF OUR OFFICE";
        $paragraph2="We are a young, energetic group of individuals committed to solving your company's difficulties.";

    @endphp
    <x-sub :heading="$heading" :paragraph="$paragraph"></x-sub>


    <div class=" w-[89%] lg:w-[59%] mx-auto  my-12 lg:my-24">
        {{-- <h1 class="font-satoshimedium text-lg lg:text-4xl">Read our other posts</h1> --}}

        <p class="font-satoshiregular text-[16px] lg:text-xl lg:leading-9 my-6">YNOTZ Consulting is a business consulting firm providing management consulting services to small and medium businesses. We are glad to extend a helping hand to those who need business solution advice to move forward.

            </p>
            <p class="font-satoshiregular text-[16px] lg:text-xl lg:leading-9  mt-4 lg:mt-11">Our team has all ears for our clients. We listen, communicate and give you a better explanation from a third-party perspective. Whether your business is small or big, well established, or still struggling, our team is always flexible to discover befitting solutions for your firm. MSMEs, Startups, and other existing businesses can align with us for choosing a better path to navigate through this competitive market. A dedicated team at YNOTZ is always there for you as your most reliable partner in business.</p>
    </div>

    {{-- <x-rating></x-rating> --}}

    {{-- <div class="flex flex-wrap justify-evenly md:w-[90%] md:justify-between md:mx-auto">

            <x-test></x-test>
            <x-test></x-test>

            <x-test></x-test>
            <x-test></x-test>

            <x-test></x-test>
            <x-test></x-test>

    </div> --}}

    <x-main :heading="$heading2" :paragraph="$paragraph2"></x-main>

    <x-common.office-carousel></x-common.office-carousel>

    <div class="w-[88%] mt-[60px] md:mt-[90px]  bg-deep-blue rounded-xl mx-auto py-8 text-white md:flex md:items-center">
        <div class=" bg-dark-gray w-[80%] md:w-[23%] mx-auto rounded-xl py-8 md:mx-10 md:my-6">
            <img class="rounded-full mx-auto" src="{{asset('/images/people/man2.png')}}" alt="">
            <h3 class=" font-satoshimedium text-lg  text-center my-3">Martin Chlimelowski</h3>
            <p class=" font-satoshiregular text-sm text-center">Customer Service Expert</p>
        </div>

        <div class=" w-[80%] md:w-[60%] mx-auto md:mx-10">
            <h3 class=" font-satoshiregular text-[15px] md:text-3xl my-4 md:my-7">We're here to assist you</h3>
            <p class=" font-satoshiregular text-sm md:text-base mb-7">Get connected right away </p>

            <div class="flex mt-[1rem]">
                <img class="" src="{{asset('images/icons/mail-white.svg')}}" alt="">
                <a class=" font-satoshiregular text-base mx-3 text-white" href="#">info@ynotzconsulting.com</a>
            </div>
            <div class="flex mt-[1rem]">
                <img class="" src="{{asset('/images/icons/message-white.svg')}}" alt="">
                <a class=" font-satoshiregular text-base mx-3 text-white" href="#">Midhun P.S</a>
            </div>
            <div class="flex mt-[1rem]">
                <img class="" src="{{asset('/images/icons/phone-white.svg')}}" alt="">
                <a class=" font-satoshiregular text-base mx-3 text-white" href="#">+91 9497344553</a>
            </div>

        </div>

    </div>

</div>
