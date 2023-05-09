@props(['title'])
<li class="mr-2">
    <a :class="show=='hr'? 'border-b-2 border-blue-600': ''" style="white-space: nowrap;" href="#" class=" font-satoshimedium inline-flex p-[15px] text-default  rounded-t-lg group whitespace-nowrap" aria-current="page">
        {{$title}}
    </a>
</li>
