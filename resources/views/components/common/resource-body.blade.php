{{-- {{dd($blogs)}} --}}
<div class=" ">
    @php

        $heading="BLOGS";
        $paragraph="Enlighten yourselves before stepping into a new venture";

    @endphp

        <x-main-noimg :heading="$heading" :paragraph="$paragraph"></x-main-noimg>

        <div class=" w-[89%] mx-auto md:flex md:flex-wrap md:justify-evenly md:mt-6">

         @if ($blogs!=null)

            @if (count($blogs)>0)


            @foreach ($blogs as $blog)
                <x-blog :recent="$blog"  ></x-blog>
            @endforeach


                {{-- <x-blog :img="$img2" :title="$blogtitle2" :description="$blogdescription2" ></x-blog>
                <x-blog :img="$img3" :title="$blogtitle3" :description="$blogdescription3"></x-blog> --}}

                @else
                <div class=" w-full h-[300px] flex items-center justify-center">
                    <h3 class=" font-satoshibold text-center text-lg">Sorry! Blogs will be uploaded soon...</h3>
                </div>

                @endif
         @endif
        </div>

        <div class="flex justify-start ml-3 ">
            {{$blogs->links()}}
        </div>
</div>
