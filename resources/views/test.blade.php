<x-defaultlayout>

    {{-- page specific script --}}
    <script src="{{asset('js/home.js')}}" defer="module"></script>

    {{-- navbar-mobile --}}
<x-mobile.nav></x-mobile.nav>
    {{-- navbar-mobile ends --}}

    {{-- mobile-menu pop up begins--}}
    @php
        $home=true;
        $about=false;
        $services=false;
        $resources=false;
    @endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :resources="$resources" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>
    {{-- mobile-menu pop up ends --}}

    {{-- desktop-navbar begins --}}
    @php
        $ishome=true;
        $isabout=false;
        $isservices=false;
        $isresources=false;
    @endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :isresources="$isresources" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
    {{-- desktop-navbar ends --}}

    <div class=" my-7 relative">
        <div class=" absolute top-0 w-full bg-white h-[20px] lg:h-[65px] rounded-b-[50%] z-50"></div>
        <div class=" absolute bottom-0 w-full bg-white h-[20px] lg:h-[65px] rounded-t-[50%] z-50"></div>



        <swiper-container class="   mx-auto slider-container " init="false">
            {{-- <div class=" absolute top-0 w-full bg-white h-[25px] lg:h-[65px] rounded-b-[50%]"> --}}
            <swiper-slide class=" sm:ml-3">
                <div class=" relative rounded-2xl ">

                    <img class="slide-image" src="{{asset('images/home/carousel/Hero-1.png')}}" alt="">



                </div>

            </swiper-slide>


                <swiper-slide class=" sm:ml-3 ">
                    <div class=" relative rounded-2xl">

                        <img class="slide-image" src="{{asset('images/home/carousel/Hero-2.png')}}" alt="">


                    </div>
                </swiper-slide>


                <swiper-slide class=" sm:ml-3">

                    <div class=" relative rounded-2xl ">

                        <img class="slide-image" src="{{asset('images/home/carousel/Hero-3.png')}}" alt="">



                    </div>

                </swiper-slide>

                <swiper-slide class=" sm:ml-3 ">

                    <div class=" relative rounded-2xl">

                        <img class="slide-image" src="{{asset('images/home/carousel/Hero-4.png')}}" alt="">



                    </div>

                </swiper-slide>


                <swiper-slide class=" sm:ml-3 ">
                    <div class=" relative rounded-2xl">

                        <img class="slide-image" src="{{asset('images/home/carousel/Hero-2.png')}}" alt="">


                    </div>
                </swiper-slide>




              </swiper-container>


        </div>
        <script>
            const swiperE2 = document.querySelector('swiper-container');


    const swiperParams2 = {
        loop:true,
        centeredSlides: true,
        spaceBetween:5,
      slidesPerView: 2,
      navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
      breakpoints: {
        640: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 10,
          panoramaEffect: {
                rotate: 30,
                depth: 200
            }
        },
      },
      on: {
        init() {

        },
      },
    };


    Object.assign(swiperE2, swiperParams2);


    swiperE2.initialize();
        </script>


<x-common.curved-carousel></x-common.curved-carousel>


</x-defaultlayout>
