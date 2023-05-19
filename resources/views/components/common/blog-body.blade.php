@props(['blog','sections','main'])
<div>
    <div class=" w-[88%] xl:w-[88%] rounded-2xl my-10 lg:mt-20 mx-auto relative  lg:bg-blue ">
        <img class="w-full aspect-[1300/477] object-cover rounded-2xl" src="{{$blog['cover']}}" alt="">
        <div class="px-4 flex flex-col justify-start mx-auto  text-center centered-x top-[10px] absolute  lg:w-full">
            <div class="mt-12  mb-[15x] lg:mb-[25px]">

            <h1 class="mb-4 text-2xl font-satoshimedium tracking-tight leading-none text-white md:text-3xl lg:text-4xl xl:text-5xl text-center lg:w-full">{{$blog['title']}}</h1>
            </div>


        </div>
    </div>
    <p class="my-3 lg:mb-20 text-xs lg:text-base text-center font-satoshiregular text-default uppercase">
        {{$blog['date']}}
    </p>


    <div class=" w-[89%] lg:w-[59%] mx-auto">
        <h3 class=" font-satoshimedium text-xl lg:text-[2.6rem] ">{{$main['title']}}</h3>
        <p class=" font-satoshiregular text-base lg:text-lg my-6 lg:mb-10">{{$main['desc']}}</p>
    </div>
@php
    $sno=0;
@endphp
    @foreach ($sections as $section)
    @php
        $sno++;
    @endphp

    <div class=" w-[89%] lg:w-[62%] mx-auto my-5 p-3 lg:p-5 bg-blue-50 rounded-2xl">
        <h3 class=" font-satoshimedium text-lg lg:text-3xl ">{{$sno}}. {{$section['title']}}</h3>
        <p class=" font-satoshiregular text-base lg:text-lg my-6 lg:mb-10">{{$section['desc']}}</p>
    </div>
    @endforeach

    <img class="w-[89%] lg:w-[59%] aspect-[335/200] mx-auto rounded-2xl my-9 lg:my-16" src="{{asset('images/blogs/blog-img2.png')}}" alt="">

    <hr class="  border-gray-400 mb-6 lg:mb-16 w-[89%] lg:w-[59%] mx-auto">

    <div class=" w-[89%] lg:w-[59%] mx-auto text-center">
        <h1 class="font-satoshimedium text-lg lg:text-4xl">Read our other posts</h1>
        <p class="font-satoshiregular text-[16px] lg:text-lg lh-md my-6">Developing a successful digital product is a complex process that requires choosing the right partner, applying innovative solutions, and following reliable processes.</p>
    </div>


<div class=" lg:hidden">
    <x-mobile.blog-carousel></x-mobile.blog-carousel>
</div>

    <x-desktop.recent-blogs></x-desktop.recent-blogs>
</div>
