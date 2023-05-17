<div class=" bg-gray my-10 py-4 xl:flex xl:justify-evenly w-[92%] mx-auto">
@php
    $heading="WE'RE SERIOUS ABOUT WHAT WE DO";
    $paragraph="We provide assistance with establishing and maintaining MSMEs and startups. Our team will give you solutions to your queries regarding funding and other business strategies.";
@endphp
<div class=" xl:w-[40%] mx-auto">
{{-- <x-main-noimg :heading="$heading" :paragraph="$paragraph"></x-main-noimg> --}}
<div class="w-[88%] xl:w-full  mx-auto mt-10 lg:mt-20">
    <h1 class=" lg:text-start mx-auto font-satoshiregular text-center text-xl lg:text-3xl xl:text-[2.25rem] lh-lg ">WE'RE <span class=" text-blue">SERIOUS</span> ABOUT WHAT WE DO</h1>
    <p class=" lg:text-start mx-auto lg:pr-[29px] font-satoshiregular text-center mt-3 text-[15px] lh-sm lg:text-[18px]">{{$paragraph}}</p>
</div>
</div>

<div class=" mx-5 flex space-x-4 lg:space-x-4 overflow-auto hide-scroll lg:justify-center mt-7 lg:mt-14 xl:mt-7 mb-7 lg:order-first lg:flex-wrap xl:w-[60%]">
    @php
        $t=true;
        $f=false;
        $src="/images/icons/code.svg";
        $title1="We listen";
        $paragraph1="You can share your business thoughts and concerns with us. We sincerely analyse your business to identify the pain points and formulate a clear strategy for its growth.";
        $title2="Honest Communication";
        $paragraph2="Big or small, old or new, every enterprise has its own strengths and weaknesses. We treat every business as unique and provide you an honest third party analysis for upgrading your business. ";
        $title3="Custom Solutions";
        $paragraph3="We don't force readymade solutions upon you. Our team will sincerely address your problems and provide custom solutions.";
        $title4="Work within your constraints";
        $paragraph4="Every enterprise has its strengths and challenges. Your business requires management solutions that respect its constraints. Our mission is to provide you with just the same.";
    @endphp

    <x-common.cardwithicon :title="$title1" :paragraph="$paragraph1" :first="$t" :src="$src" class=" text-white bg-navy"></x-cardwithicon>
    <x-common.cardwithicon :title="$title2" :paragraph="$paragraph2" :first="$f" :src="$src"></x-cardwithicon>


    <x-common.cardwithicon :title="$title3" :paragraph="$paragraph3" :first="$f" :src="$src"></x-cardwithicon>
    <x-common.cardwithicon :title="$title4" :paragraph="$paragraph4" :first="$f" :src="$src"></x-cardwithicon>


</div>

</div>

