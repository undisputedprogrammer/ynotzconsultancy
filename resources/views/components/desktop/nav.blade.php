@props(['ishome','isabout','isservices','isresources'])
<nav class=" h-[70px] hidden lg:flex items-center justify-between w-full box-shadow">
<img class="ml-[3rem] h-[35px] " src="{{asset('images/logo.jpg')}}" alt="">
<div class="flex h-fit">
    <a {{ $attributes->class(['pt-1' => $ishome, 'text-blue' => $ishome]) }} class="  " href="/">HOME</a>
    <a {{ $attributes->class(['pt-1' => $isabout, 'text-blue' => $isabout]) }} class="" href="/about">ABOUT</a>
    <a {{ $attributes->class(['pt-1'=>$isservices, 'text-blue' => $isservices]) }} class=" " href="/services">SERVICES</a>
    <a {{ $attributes->class(['pt-1'=>$isresources, 'text-blue' => $isresources]) }} class=" " href="/resources">RESOURCES</a>
</div>
<a class="h-[39px] w-[134px] text-white btn-blue text-center font-satoshimedium py-[8px] text-[14px] rounded-xl mr-[2rem]" href="/contact">CONTACT US</a>
</nav>
