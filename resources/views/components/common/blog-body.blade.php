@props(['blog','recents'])
<div>
    <div class=" w-[88%] xl:w-[88%] rounded-2xl my-10 lg:mt-20 mx-auto relative  lg:bg-blue ">
        <img class="w-full aspect-[10/6]  lg:aspect-[1300/477] object-cover rounded-2xl" src="/storage/images/{{$blog['image']}}" alt="">

    </div>

    <div class="px-4 flex flex-col justify-start space-y-5 mx-auto  text-center  top-[10px]   lg:w-full">
        <div class="mt-7  mb-[15x] lg:mb-[25px]">

        <h1 class="mb-4 text-2xl font-satoshimedium tracking-tight leading-none text-black md:text-3xl lg:text-4xl xl:text-4xl text-center lg:w-full">{{$blog['title']}}</h1>

        <h1 class="mb-4 text-lg font-satoshimedium tracking-tight leading-none text-black md:text-xl lg:text-2xl xl:text-2xl text-center lg:w-full">{{$blog['description']}}</h1>

        </div>


    </div>

    <div x-data="{menu:false}" class=" flex justify-between my-3 lg:mb-20 w-[88%] xl:w-[88%] mx-auto">
        <p></p>
    <p class=" text-xs lg:text-base text-center font-satoshiregular text-default ">
        @php
            $date = date_format($blog['created_at'],"d  M  Y ");
        @endphp
        Posted by {{$blog['author']}} on {{$date}}
    </p>
    <div class=" flex flex-col relative">
        @auth


    <img  @click.prevent="menu=!menu" class="w-6 mr-1.5 ease-in-out duration-300" src="{{asset('images/icons/double-left.svg')}}" alt="" :class="menu ? 'rotate-180' : ''">
    <div  x-show="menu" x-transition class=" absolute -bottom-[45px] flex flex-col items-center mr-1.5 space-y-2 ">
        <a href="/blog/edit/{{$blog['id']}}">
        <img class="w-6" src="{{asset('images/icons/edit-icon.svg')}}" alt="">
        </a>
        <a href="/blog/delete/{{$blog['id']}}">
        <img class="w-6" src="{{asset('images/icons/delete-icon.svg')}}" alt="">
        </a>
    </div>
    @endauth
    </div>
    </div>


    <div class=" w-[89%] lg:w-[59%] mx-auto">

        {!!$blog['content']!!}
        {{-- <h3 class=" font-satoshimedium text-xl lg:text-[2.6rem] ">{{$main['title']}}</h3>
        <p class=" font-satoshiregular text-base lg:text-lg my-6 lg:mb-10">{{$main['desc']}}</p> --}}
    </div>
{{-- @php
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
    @endforeach --}}

    {{-- <img class="w-[89%] lg:w-[59%] xl:w-[50%] aspect-[335/200] object-cover mx-auto rounded-2xl my-9 lg:my-16" src="/storage/images/{{$blog['image']}}" alt=""> --}}

    <hr class="  border-gray-400 my-6 lg:my-16 w-[89%] lg:w-[59%] mx-auto">

    <div class=" w-[89%] lg:w-[59%] mx-auto text-center">
        <h1 class="font-satoshimedium text-lg lg:text-4xl">Read our other posts</h1>
        <p class="font-satoshiregular text-[16px] lg:text-lg lh-md my-6">Developing a successful digital product is a complex process that requires choosing the right partner, applying innovative solutions, and following reliable processes.</p>
    </div>


<div class=" lg:hidden">
    <x-mobile.blog-carousel :recents="$recents"></x-mobile.blog-carousel>
</div>

    <x-desktop.recent-blogs :recents="$recents"></x-desktop.recent-blogs>
</div>
