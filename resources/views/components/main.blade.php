@props(['heading','paragraph'])
<img class="w-[24px] h-[24px] lg:h-[40px] lg:w-[40px] mx-auto mt-[36px] lg:mt-[90px]" src="{{asset('images/home/Frame-59.png')}}" alt="">

    <div class="w-[88%]  mx-auto mt-3">
        <h1 class=" w-[335px] lg:w-[656px] mx-auto font-satoshiregular text-center text-xl lg:text-[2.25rem] lh-lg ">{{$heading}}</h1>
        <p class="lg:w-[636px] mx-auto font-satoshiregular text-center mt-3 text-base lg:text-[18px]">{{$paragraph}}</p>
    </div>
