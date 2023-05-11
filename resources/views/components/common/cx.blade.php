<div class=" bg-gray my-10 py-4 xl:flex xl:justify-evenly w-[92%] mx-auto">
@php
    $heading="WE'RE SERIOUS ABOUT CX";
    $paragraph="Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias numquam perferendis ut culpa doloribus et optio reprehenderit, nulla molestiae laborum aperiam beatae minima? Sunt, voluptate!";
@endphp
<div class=" xl:w-[40%] mx-auto">
{{-- <x-main-noimg :heading="$heading" :paragraph="$paragraph"></x-main-noimg> --}}
<div class="w-[88%] xl:w-full  mx-auto mt-10 lg:mt-20">
    <h1 class=" lg:text-start mx-auto font-satoshiregular text-center text-xl lg:text-3xl xl:text-[2.25rem] lh-lg ">WE'RE <span class=" text-blue">SERIOUS</span> ABOUT CX</h1>
    <p class=" lg:text-start mx-auto lg:pr-[29px] font-satoshiregular text-center mt-3 text-[15px] lh-sm lg:text-[18px]">{{$paragraph}}</p>
</div>
</div>

<div class=" mx-5 flex space-x-4 lg:space-x-4 overflow-auto hide-scroll lg:justify-center mt-7 lg:mt-14 xl:mt-7 mb-7 lg:order-first lg:flex-wrap xl:w-[60%]">
    @php
        $t=true;
        $f=false;
        $src="/images/icons/code.svg";
        $title1="Supported all the way";
        $paragraph1="Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque id eum dignissimos debitis sint?";
    @endphp

    <x-common.cardwithicon :title="$title1" :paragraph="$paragraph1" :first="$t" :src="$src" class=" text-white bg-navy"></x-cardwithicon>
    <x-common.cardwithicon :title="$title1" :paragraph="$paragraph1" :first="$f" :src="$src"></x-cardwithicon>


    <x-common.cardwithicon :title="$title1" :paragraph="$paragraph1" :first="$f" :src="$src"></x-cardwithicon>
    <x-common.cardwithicon :title="$title1" :paragraph="$paragraph1" :first="$f" :src="$src"></x-cardwithicon>


</div>

</div>

