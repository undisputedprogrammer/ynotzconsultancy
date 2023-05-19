<div class=" my-7">

    <swiper-container id="container2" class="w-[88%] lg:w-full mx-auto lg:pr-20" init="false">
        <swiper-slide class=" sm:ml-3">
            <div class=" relative rounded-2xl ">

                <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/1.png')}}" alt="">
                <div class="absolute left-[20px] lg:left-[45px] xl:left-[60px] bottom-[25px] lg:bottom-[60px] xl:bottom-[70px] w-[89%] mx-auto xl:w-[70%]">
                    <h3 class=" font-satoshiregular text-4xl xl:text-6xl text-white">Getting started is not that bad
                    </h3>
                    <p class="font-satoshiregular text-base xl:text-lg  text-white my-4 xl:my-6">The current business environment is very optimistic and active. Starting a new business is no longer hard.
                    </p>
                    <img class=" w-10 xl:w-[4rem]" src="{{asset('/images/icons/Arrow1.svg')}}" alt="">
                </div>

            </div>

        </swiper-slide>


            <swiper-slide class=" sm:ml-3 ">
                <div class=" relative rounded-2xl">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/2.png')}}" alt="">
                    <div class="absolute left-[20px] lg:left-[45px] xl:left-[60px] bottom-[25px] lg:bottom-[60px] xl:bottom-[70px] w-[89%] mx-auto xl:w-[70%]">
                        <h3 class=" font-satoshiregular text-4xl xl:text-6xl text-white">Although success is challenging</h3>
                        <p class="font-satoshiregular text-base  xl:text-lg text-white my-4 xl:my-6">'To survive' is not an easy thing. That's why most startups fail to take off.
                        </p>
                        <img class=" w-10 xl:w-[4rem]" src="{{asset('/images/icons/Arrow1.svg')}}" alt="">
                    </div>

                </div>
            </swiper-slide>


            <swiper-slide class=" sm:ml-3">

                <div class=" relative rounded-2xl ">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/3.png')}}" alt="">
                    <div class="absolute left-[20px] lg:left-[45px] xl:left-[60px] bottom-[25px] lg:bottom-[60px] xl:bottom-[70px] w-[89%] mx-auto xl:w-[70%]">
                        <h3 class=" font-satoshiregular text-4xl xl:text-6xl text-white">The real concern isn't money
                        </h3>
                        <p class="font-satoshiregular text-base  xl:text-lg text-white my-4 xl:my-6">In business, money can't fund everything. A better operational and marketing strategy can yield more to your firm.
                        </p>
                        <img class=" w-10 xl:w-[4rem]" src="{{asset('/images/icons/Arrow1.svg')}}" alt="">
                    </div>

                </div>

            </swiper-slide>

            <swiper-slide class=" sm:ml-3 ">

                <div class=" relative rounded-2xl">

                    <img class=" w-full aspect-[335/310] xl:aspect-[765/566]" id="1" src="{{asset('images/home/companies/4.png')}}" alt="">
                    <div class="absolute left-[20px] lg:left-[45px] xl:left-[60px] bottom-[25px] lg:bottom-[60px] xl:bottom-[70px] w-[89%] mx-auto xl:w-[70%]">
                        <h3 class=" font-satoshiregular text-4xl xl:text-6xl text-white">Proper control is important
                        </h3>
                        <p class="font-satoshiregular text-base  xl:text-lg text-white my-4 xl:my-6">The efficacy of the other management functions is frequently found to be enhanced by proper control procedures.
                        </p>
                        <img class=" w-10 xl:w-[4rem]" src="{{asset('/images/icons/Arrow1.svg')}}" alt="">
                    </div>

                </div>

            </swiper-slide>




          </swiper-container>
          <div class=" flex w-[50%] mx-auto justify-center space-x-3 mt-10 xl:mt-12">

            <img class=" lg:w-9" id="prev" src="{{asset('/images/icons/right-chevron.svg')}}" alt="">
          <img class="lg:w-9" id="next" src="{{asset('/images/icons/left-chevron.svg')}}" alt="">

        </div>

    </div>
    <script>
        const swiperEl = document.getElementById('container2');


const swiperParams = {
    loop:true,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    //   },
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
