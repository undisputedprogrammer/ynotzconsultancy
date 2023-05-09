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


    <script>
        console.log('oh shit')
        let id=1;
        function swipe(){


            // document.getElementById('swiper').style.transform=translateX(100%);
        }
    </script>



    <div class=" mt-20 w-[89%] mx-auto overflow-auto hide-scroll  rounded-2xl">
        <div id="swiper" class=" flex">
        <img id="1" src="{{asset('images/home/carousel/Hero-1.png')}}" alt="">
        <img id="2" src="{{asset('images/home/carousel/Hero-2.png')}}" alt="">
        <img id="3" src="{{asset('images/home/carousel/Hero-3.png')}}" alt="">
        <img id="4" src="{{asset('images/home/carousel/Hero-4.png')}}" alt="">
        <img id="5" src="{{asset('images/home/carousel/Hero-5.png')}}" alt="">
        </div>
    </div>

    <div class="flex w-full justify-center space-x-7 mt-12 lg:hidden">
        <img src="{{asset('icons/right-chevron.svg')}}" alt="">
        <img onclick="swipe();" src="{{asset('icons/left-chevron.svg')}}" alt="">
    </div>

    </div>

    <div class=" my-20">

    <swiper-container class="w-[88%] lg:w-full mx-auto lg:pr-20" init="false">
        <swiper-slide class=" sm:ml-3">
            <div class=" relative rounded-2xl ">

                <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/1.png')}}" alt="">
                <div class="absolute left-[20px] lg:left-[45px] xl:left-[60px] bottom-[25px] lg:bottom-[60px] xl:bottom-[70px] w-[89%] mx-auto xl:w-[70%]">
                    <h3 class=" font-satoshiregular text-4xlx xl:text-6xl text-white">Startups</h3>
                    <p class="font-satoshiregular text-base xl:text-lg  text-white my-4 xl:my-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque est consequatur a, voluptate hic nemo qui impedit non aut. Iure voluptatibus ratione quas corporis ut!</p>
                    <img class=" w-10 xl:w-[4rem]" src="{{asset('icons/Arrow1.svg')}}" alt="">
                </div>

            </div>

        </swiper-slide>


            <swiper-slide class=" sm:ml-3 ">
                <div class=" relative rounded-2xl">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/2.png')}}" alt="">
                    <div class="absolute left-[20px] lg:left-[45px] xl:left-[60px] bottom-[25px] lg:bottom-[60px] xl:bottom-[70px] w-[89%] mx-auto xl:w-[70%]">
                        <h3 class=" font-satoshiregular text-4xl xl:text-6xl text-white">Startups</h3>
                        <p class="font-satoshiregular text-base  xl:text-lg text-white my-4 xl:my-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque est consequatur a, voluptate hic nemo qui impedit non aut. Iure voluptatibus ratione quas corporis ut!</p>
                        <img class=" w-10 xl:w-[4rem]" src="{{asset('icons/Arrow1.svg')}}" alt="">
                    </div>

                </div>
            </swiper-slide>


            <swiper-slide class=" sm:ml-3">

                <div class=" relative rounded-2xl ">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/3.png')}}" alt="">
                    <div class="absolute left-[20px] lg:left-[45px] xl:left-[60px] bottom-[25px] lg:bottom-[60px] xl:bottom-[70px] w-[89%] mx-auto xl:w-[70%]">
                        <h3 class=" font-satoshiregular text-4xl xl:text-6xl text-white">Startups</h3>
                        <p class="font-satoshiregular text-base  xl:text-lg text-white my-4 xl:my-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque est consequatur a, voluptate hic nemo qui impedit non aut. Iure voluptatibus ratione quas corporis ut!</p>
                        <img class=" w-10 xl:w-[4rem]" src="{{asset('icons/Arrow1.svg')}}" alt="">
                    </div>

                </div>

            </swiper-slide>

            <swiper-slide class=" sm:ml-3 ">

                <div class=" relative rounded-2xl">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/4.png')}}" alt="">
                    <div class="absolute left-[20px] lg:left-[45px] xl:left-[60px] bottom-[25px] lg:bottom-[60px] xl:bottom-[70px] w-[89%] mx-auto xl:w-[70%]">
                        <h3 class=" font-satoshiregular text-4xl xl:text-6xl text-white">Startups</h3>
                        <p class="font-satoshiregular text-base  xl:text-lg text-white my-4 xl:my-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque est consequatur a, voluptate hic nemo qui impedit non aut. Iure voluptatibus ratione quas corporis ut!</p>
                        <img class=" w-10 xl:w-[4rem]" src="{{asset('icons/Arrow1.svg')}}" alt="">
                    </div>

                </div>

            </swiper-slide>


            <swiper-slide class=" sm:ml-3">
                <div class=" relative rounded-2xl">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/1.png')}}" alt="">
                    <div class="absolute left-[20px] lg:left-[45px] xl:left-[60px] bottom-[25px] lg:bottom-[60px] xl:bottom-[70px] w-[89%] mx-auto xl:w-[70%]">
                        <h3 class=" font-satoshiregular text-4xl xl:text-6xl text-white">Startups</h3>
                        <p class="font-satoshiregular text-base  xl:text-lg text-white my-4 xl:my-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque est consequatur a, voluptate hic nemo qui impedit non aut. Iure voluptatibus ratione quas corporis ut!</p>
                        <a href="#">
                        <img class=" w-10 xl:w-[4rem]" src="{{asset('icons/Arrow1.svg')}}" alt="">
                        </a>
                    </div>

                </div>

            </swiper-slide>

          </swiper-container>
          <div class=" flex w-[50%] mx-auto justify-center space-x-3 mt-10 xl:mt-12">

            <img class=" lg:w-9" id="prev" src="{{asset('icons/right-chevron.svg')}}" alt="">
          <img class="lg:w-9" id="next" src="{{asset('icons/left-chevron.svg')}}" alt="">

        </div>

    </div>
    <script>
        const swiperEl = document.querySelector('swiper-container');


const swiperParams = {
  slidesPerView: 1,
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  breakpoints: {
    640: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 2,
    },
  },
  on: {
    init() {

    },
  },
};
const buttonEl = document.getElementById('next');

  buttonEl.addEventListener('click', () => {
    swiperEl.swiper.slideNext();
  });

  const buttonE2 = document.getElementById('prev');

  buttonE2.addEventListener('click', () => {
    swiperEl.swiper.slidePrev();
  });

Object.assign(swiperEl, swiperParams);


swiperEl.initialize();
    </script>







</x-defaultlayout>
