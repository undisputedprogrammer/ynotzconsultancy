<div class=" my-2">

    @php
        $img1="/images/blogs/blog-img1.png";
    $img2="/images/blogs/blog-img2.png";
    $img3="/images/blogs/blog-img3.png";
    $blogtitle=array('id'=>1,'title'=>"Seven reasons why startups fail");
    $blogdescription="Almost 90 percent of startups fail across the world, with 10 percent failing within the first year. Or we can say that most of the startups are like a meteor entering the earth's atmosphere.";
    $blogtitle2=array('id'=>2,'title'=>"How to register your startup under MSME");
    $blogdescription2="The Ministry of Micro, Small & Medium Enterprises (MSME) is the apex executive body for the conceptualization and management of the rules and regulations regarding Micro, Small & Medium enterprises in India.";
    $blogtitle3=array('id'=>3,'title'=>"3 Central Government Schemes for Medium and Small Enterprises");
    $blogdescription3="Funding is a prime dilemma in small and medium businesses. In this revolutionary era of 'Make in India', the central government provides many schemes for initializing and upgrading MSMEs. ";
    @endphp
    <swiper-container id="swiper-2" class="w-[88%] lg:w-full mx-auto lg:pr-20" init="false">
        <swiper-slide class=" sm:ml-3">

            <div class="bg-gray rounded-2xl p-3 lg:p-5 mt-10 md:w-[43%] lg:w-[32%]">
                <a href="/blog/1" aria-label="Article">
                    <img src="{{$img1}}" class="  rounded-2xl mx-auto" alt="">
                <div class="mx-auto">
                  <p class="my-3 text-xs  font-satoshiregular text-gray-600 uppercase">
                    03 May 2023
                  </p>
                  <p class="text-lg lg:text-xl leading-5 font-satoshimedium">{{$blogtitle['title']}}</p>
                  <p class=" text-default font-satoshiregular text-sm lg:text-base line-clamp-2">
                    {{$blogdescription}}
                  </p>

                </div>
            </a>
                  </div>

        </swiper-slide>


            <swiper-slide class=" sm:ml-3 ">

                <div class="bg-gray rounded-2xl p-3 lg:p-5 mt-10 md:w-[43%] lg:w-[32%]">
                    <a href="/blog/2" aria-label="Article"><img src="{{$img2}}" class="  rounded-2xl mx-auto" alt="">
                    <div class="mx-auto">
                      <p class="my-3 text-xs  font-satoshiregular text-gray-600 uppercase">
                        10 May 2023
                      </p>
                      <p class="text-lg lg:text-xl leading-5 font-satoshimedium">{{$blogtitle2['title']}}</p>
                      <p class=" text-default font-satoshiregular text-sm lg:text-base line-clamp-2">
                        {{$blogdescription2}}
                      </p>

                    </div>
                </a>
                      </div>

            </swiper-slide>


            <swiper-slide class=" sm:ml-3">

                <div class="bg-gray rounded-2xl p-3 lg:p-5 mt-10 md:w-[43%] lg:w-[32%]">
                    <a href="/blog/3" aria-label="Article"><img src="{{$img3}}" class="  rounded-2xl mx-auto" alt="">
                    <div class="mx-auto">
                      <p class="my-3 text-xs  font-satoshiregular text-gray-600 uppercase">
                        17 May 2023
                      </p>
                      <p class="text-lg lg:text-xl leading-5 font-satoshimedium">{{$blogtitle3['title']}}</p>
                      <p class=" text-default font-satoshiregular text-sm lg:text-base line-clamp-2">
                        {{$blogdescription3}}
                      </p>

                    </div>
                </a>
                </div>


            </swiper-slide>



          </swiper-container>
          <div class=" flex w-[50%] mx-auto justify-center space-x-3 mt-10 xl:mt-12">

            <img class=" lg:w-9" id="prev-2" src="{{asset('/images/icons/right-chevron.svg')}}" alt="">
          <img class="lg:w-9" id="next-2" src="{{asset('/images/icons/left-chevron.svg')}}" alt="">

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
