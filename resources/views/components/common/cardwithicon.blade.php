@props(['first','paragraph','title','src'])
<div {{ $attributes->merge(['class'=>'p-6 xl:p-7 bg-gray-50 h-[230px] md:h-[268px] xl:h-[290px] md:aspect-square rounded-2xl flex flex-col justify-center']) }} class="">
    <img class="p-3 rounded-2xl bg-white h-[40px]  w-[40px]" src="{{$src}}" alt="">
    <h3 class=" font-satoshiregular text-[17px] xl:text-xl my-4">{{$title}}</h3>
    <p class=" font-satoshiregular text-sm xl:text-base w-[190px] md:w-[220px] xl:w-[320px]">{{$paragraph}}</p>
</div>
