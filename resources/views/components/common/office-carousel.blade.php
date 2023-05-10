<div class=" my-7">

    <swiper-container class="w-[88%] lg:w-full mx-auto lg:pr-20" init="false">
        <swiper-slide class=" sm:ml-3">
            <div class=" relative rounded-2xl ">

                <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/1.png')}}" alt="">


            </div>

        </swiper-slide>


            <swiper-slide class=" sm:ml-3 ">
                <div class=" relative rounded-2xl">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/2.png')}}" alt="">


                </div>
            </swiper-slide>


            <swiper-slide class=" sm:ml-3">

                <div class=" relative rounded-2xl ">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/3.png')}}" alt="">


                </div>

            </swiper-slide>

            <swiper-slide class=" sm:ml-3 ">

                <div class=" relative rounded-2xl">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/4.png')}}" alt="">


                </div>

            </swiper-slide>


            <swiper-slide class=" sm:ml-3">
                <div class=" relative rounded-2xl">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/1.png')}}" alt="">


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
    loop:true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
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
