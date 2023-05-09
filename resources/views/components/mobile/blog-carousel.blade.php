<div class=" my-2">

    @php
        $img1="images/blogs/blog-img1.png";
        $img2="images/blogs/blog-img2.png";
        $img3="images/blogs/blog-img3.png";
        $blogtitle="What’s a small thing anyone can do to upskill?";
        $blogdescription="Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque. unde omnis iste natus error sit.";
    @endphp
    <swiper-container id="swiper-2" class="w-[88%] lg:w-full mx-auto lg:pr-20" init="false">
        <swiper-slide class=" sm:ml-3">

            <div class="bg-gray rounded-2xl p-3 lg:p-5 mt-10 md:w-[43%] lg:w-[32%]">
                <a href="/" aria-label="Article"><img src="{{$img1}}" class="  rounded-2xl mx-auto" alt=""></a>
                <div class="mx-auto">
                  <p class="my-3 text-xs  font-satoshiregular text-gray-600 uppercase">
                    13 Jul 2020
                  </p>
                  <a href="/" aria-label="Article" class="inline-block mb-3 text-default transition-colors duration-200 hover:text-deep-purple-accent-700"><p class="text-lg lg:text-xl leading-5 font-satoshimedium">{{$blogtitle}}</p></a>
                  <p class=" text-default font-satoshiregular text-sm lg:text-base line-clamp-2">
                    {{$blogdescription}}
                  </p>

                </div>
                  </div>

        </swiper-slide>


            <swiper-slide class=" sm:ml-3 ">

                <div class="bg-gray rounded-2xl p-3 lg:p-5 mt-10 md:w-[43%] lg:w-[32%]">
                    <a href="/" aria-label="Article"><img src="{{$img2}}" class="  rounded-2xl mx-auto" alt=""></a>
                    <div class="mx-auto">
                      <p class="my-3 text-xs  font-satoshiregular text-gray-600 uppercase">
                        13 Jul 2020
                      </p>
                      <a href="/" aria-label="Article" class="inline-block mb-3 text-default transition-colors duration-200 hover:text-deep-purple-accent-700"><p class="text-lg lg:text-xl leading-5 font-satoshimedium">{{$blogtitle}}</p></a>
                      <p class=" text-default font-satoshiregular text-sm lg:text-base line-clamp-2">
                        {{$blogdescription}}
                      </p>

                    </div>
                      </div>

            </swiper-slide>


            <swiper-slide class=" sm:ml-3">

                <div class="bg-gray rounded-2xl p-3 lg:p-5 mt-10 md:w-[43%] lg:w-[32%]">
                    <a href="/" aria-label="Article"><img src="{{$img3}}" class="  rounded-2xl mx-auto" alt=""></a>
                    <div class="mx-auto">
                      <p class="my-3 text-xs  font-satoshiregular text-gray-600 uppercase">
                        13 Jul 2020
                      </p>
                      <a href="/" aria-label="Article" class="inline-block mb-3 text-default transition-colors duration-200 hover:text-deep-purple-accent-700"><p class="text-lg lg:text-xl leading-5 font-satoshimedium">{{$blogtitle}}</p></a>
                      <p class=" text-default font-satoshiregular text-sm lg:text-base line-clamp-2">
                        {{$blogdescription}}
                      </p>

                    </div>
                </div>


            </swiper-slide>



          </swiper-container>
          <div class=" flex w-[50%] mx-auto justify-center space-x-3 mt-10 xl:mt-12">

            <img class=" lg:w-9" id="prev-2" src="{{asset('icons/right-chevron.svg')}}" alt="">
          <img class="lg:w-9" id="next-2" src="{{asset('icons/left-chevron.svg')}}" alt="">

        </div>

    </div>
    <script>
        const swiperEl2 = document.getElementById('swiper-2');



const swiperParams2 = {
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
const buttonEl3 = document.getElementById('next-2');

  buttonEl3.addEventListener('click', () => {
    swiperEl2.swiper.slideNext();
  });

  const buttonE4 = document.getElementById('prev-2');

  buttonE4.addEventListener('click', () => {
    swiperEl2.swiper.slidePrev();
  });

Object.assign(swiperEl2, swiperParams2);


swiperEl2.initialize();
    </script>
