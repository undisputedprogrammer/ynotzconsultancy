@props(['home','about','services','resources'])


<div x-cloak x-transition x-show="show" class="h-[380px] flex flex-col justify-between bg-white absolute top-0 left-0 z-20 w-full lg:hidden">
    <div class="flex justify-between h-[75px]">
        <img class="mx-[45px] my-auto h-[30px]" src="{{asset('images/logo.jpg')}}" alt="">
        <img @click="toggle()" id="close-menu" class="mr-[25px] h-[24px] my-auto" src="{{asset('icons/close.svg')}}" alt="">
    </div>
    <div class="flex flex-col h-fit">
        <a {{ $attributes->class([ 'text-blue' => $home]) }} class=" " href="/">HOME</a>
        <a {{ $attributes->class(['text-blue' => $about]) }} class=" " href="/about">ABOUT</a>
        <a {{ $attributes->class(['text-blue' => $services]) }} class=" " href="/services">SERVICES</a>
        <a {{ $attributes->class(['text-blue' => $resources]) }} class=" " href="/resources">RESOURCES</a>
    </div>
    <a class="h-[34px] w-[104px] text-white btn-blue text-center font-satoshimedium py-[6px] text-[14px] rounded-xl ml-11 mb-[45px]" href="/contact">CONTACT</a>
</div>
