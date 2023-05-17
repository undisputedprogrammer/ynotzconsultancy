@props(['img','title','description'])
<div class="bg-gray rounded-2xl p-3 lg:p-5 mt-10 md:w-[43%] lg:w-[32%]">
    <a href="/" aria-label="Article"><img src="{{$img}}" class="  rounded-2xl mx-auto" alt=""></a>
    <div class="mx-auto">
      <p class="my-3 text-xs  font-satoshiregular text-gray-600 uppercase">
        13 Jul 2020
      </p>
      <a href="/" aria-label="Article" class="inline-block mb-3 text-default transition-colors duration-200 hover:text-deep-purple-accent-700"><p class="text-lg lg:text-xl leading-5 font-satoshimedium">{{$title}}</p></a>
      <p class=" text-default font-satoshiregular text-sm lg:text-base line-clamp-2">{{$description}}

      </p>

    </div>
      </div>
