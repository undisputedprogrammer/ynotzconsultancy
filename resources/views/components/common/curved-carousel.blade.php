<div class=" my-7 relative">
    <div class=" absolute top-0 w-full bg-white h-[20px] lg:h-[65px] rounded-b-[50%] z-50"></div>
    <div class=" absolute bottom-0 w-full bg-white h-[20px] lg:h-[65px] rounded-t-[50%] z-50"></div>



    <swiper-container id="container" class="   mx-auto slider-container " init="false">
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
        const swiperE20 = document.getElementById('container');


const swiperParams20 = {
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


Object.assign(swiperE20, swiperParams20);


swiperE20.initialize();
    </script>
