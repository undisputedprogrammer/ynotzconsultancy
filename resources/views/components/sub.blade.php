@props(['heading','paragraph'])
<div class="w-full mt-[60px] lg:mt-[110px]">
    <img class="h-[32px] w-[32px] lg:h-[59px] lg:w-[59px] mx-auto" src="{{asset('images/home/Frame-59.png')}}" alt="">
</div>
<div class="w-[85%] mx-auto my-6 lg:my-9 lg:w-[65%]">
    <h1 class=" font-satoshiregular text-4xl lg:text-[5rem] lh-75 text-center">{{$heading}}</h1>
    <p class=" font-satoshiregular text-center mt-6 lg:w-[40%] lg:text-xl mx-auto">{{$paragraph}}</p>
</div>
