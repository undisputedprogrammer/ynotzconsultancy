@props(['recent'])
<div class="bg-gray  rounded-2xl p-3 lg:p-5 mt-10 md:w-[43%] lg:w-[32%]">
    <a href="/blog/{{$recent['id']}}">
    <img src="/storage/images/{{$recent['image']}}" class=" w-full aspect-video object-cover rounded-2xl mx-auto" alt="">
    <div class="mx-auto">
      <p class="my-3 text-xs  font-satoshiregular text-gray-600 uppercase">
        @php
            $date = date_format($recent['created_at'],"d  M  Y ");
        @endphp
        {{$date}}
      </p>
      <p class="inline-block mb-3 text-default text-lg lg:text-xl leading-5 font-satoshimedium">{{$recent['title']}}</p>
      <p class=" text-default font-satoshiregular text-sm lg:text-base line-clamp-2">{{$recent['description']}}

      </p>

    </div>
</a>
      </div>
