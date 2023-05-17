<div class="bg-gray-lg pt-4 lg:pb-[60px]">
    <img class="w-[24px] h-[24px] lg:h-[40px] lg:w-[40px] mx-auto mt-[36px] lg:mt-[90px]" src="{{asset('images/home/Frame-59.png')}}" alt="">

    <div class="w-[88%]  mx-auto mt-3">
        <h1 class=" w-[335px] lg:w-[656px] mx-auto font-satoshiregular text-center text-lg lg:text-[2.25rem] lh-lg ">ONE SOLUTION FOR <span class="text-blue">ALL YOUR BUSINESS NEEDS</span></h1>
        <p class="lg:w-[636px] mx-auto font-satoshiregular text-center mt-3 text-[15px] lg:text-[18px]">Enhance your business ideas using effective strategies
        </p>
    </div>

    {{-- mobile accordions --}}
    @php
        $image1="/images/home/services/marketing.png";
        $title="Human Resources";
        $description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae posuere nisl. In dictum luctus arcu, eget feugiat quam varius at. Fusce magna ante, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae posuere nisl. In dictum luctus arcu, eget feugiat quam varius at. Fusce magna ante,";
        $image2="/images/home/services/buisiness.png";
        $title2="Marketing";
        $title4="Operations";
        $image4="/images/home/services/operations.png";
        $image3="/images/home/services/auditing.png";
        $title3="Buisiness Auditing";
        $image5="/images/home/services/finance.png";
        $title5="Business Consulting";
        $image6="";
        $title6="";
        $image7="";
        $title7="";
        $image8="";
        $title8="";

    @endphp

    {{-- <x-mobile.accordions :img="$image1" :title="$title" :description="$description" class="mt-[60px] lg:hidden"></x-mobile.accordions>


        <x-mobile.accordions :img="$image2" :title="$title2" :description="$description" class="mt-4 lg:hidden"></x-mobile.accordions>

        <x-mobile.accordions :img="$image3" :title="$title3" :description="$description" class="mt-4 lg:hidden"></x-mobile.accordions>

        <x-mobile.accordions :img="$image4" :title="$title4" :description="$description" class="mt-4 lg:hidden"></x-mobile.accordions>

        <x-mobile.accordions :img="$image5" :title="$title5" :description="$description" class="mt-4 lg:hidden"></x-mobile.accordions> --}}


        {{-- mobile accordions ends --}}

        <div class="w-full flex lg:w-[89%] flex-wrap justify-between mx-auto mt-7 lg:mt-[100px]">
            <div class="w-[90%] mx-auto md:w-[45%] lg:w-[23%] bg-white rounded-xl py-6 my-4 lg:my-3">
                <a href="/service/1">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/marketing.png')}}" alt="">
                <h3 class="w-[74%] mx-auto font-satoshimedium text-default text-xl lg:text-2xl mt-5 mb-2">Human Resource</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-sm lg:text-[16px]">A professional approach for picking up the best candidate.
                </p>
                </a>
            </div>
            <div class="w-[90%] mx-auto md:w-[45%] lg:w-[23%] bg-white rounded-xl py-6 my-4 lg:my-3">
                <a href="/service/2">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/operations.png')}}" alt="">
                <h3 class="w-[74%] mx-auto font-satoshimedium text-default text-xl lg:text-2xl mt-5 mb-2">Operations</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-sm lg:text-[16px]">Get your business better with established SOPs.
                </p>
            </a>
            </div>
            <div class="w-[90%] mx-auto md:w-[45%] lg:w-[23%] bg-white rounded-xl py-6 my-4 lg:my-3">
                <a href="/service/3">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/buisiness.png')}}" alt="">
                <h3 class="w-[74%] mx-auto font-satoshimedium text-default text-xl lg:text-2xl mt-5 mb-2">Marketing</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-sm lg:text-[16px]">Making you connected with the customers

                </p>
            </a>
            </div>
            <div class="w-[90%] mx-auto md:w-[45%] lg:w-[23%] bg-white rounded-xl py-6 my-4 lg:my-3">
                <a href="/service/4">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/auditing.png')}}" alt="">
                <h3 class="w-[74%] mx-auto font-satoshimedium text-default text-xl lg:text-2xl mt-5 mb-2">Buisiness Auditing</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-sm lg:text-[16px]">Get a comprehensive document on the current status of your business.
                </p>
            </a>
            </div>
            <div class="w-[90%] mx-auto md:w-[45%] lg:w-[23%] bg-white rounded-xl py-6 my-4 lg:my-3">
                <a href="/service/5">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/finance.png')}}" alt="">
                <h3 class="w-[74%] mx-auto font-satoshimedium text-default text-xl lg:text-2xl mt-5 mb-2">Business Consulting</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-sm lg:text-[16px]">A reliable business consultant for you </p>
            </a>
            </div>
            <div class="w-[90%] mx-auto md:w-[45%] lg:w-[23%] bg-white rounded-xl py-6 my-4 lg:my-3">
                <a href="/service/6">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/scaling.png')}}" alt="">
                <h3 class="w-[74%] mx-auto font-satoshimedium text-default text-xl lg:text-2xl mt-5 mb-2">Scaling up</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-sm lg:text-[16px]">Expanding  your business through clear strategies
                </p>
            </a>
            </div>
            <div class="w-[90%] mx-auto md:w-[45%] lg:w-[23%] bg-white rounded-xl py-6 my-4 lg:my-3">
                <a href="/service/7">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/it.png')}}" alt="">
                <h3 class="w-[74%] mx-auto font-satoshimedium text-default text-xl lg:text-2xl mt-5 mb-2">IT Solutions</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-sm lg:text-[16px]">Putting cutting-edge IT solutions in place to increase business efficiency.
                </p>
            </a>
            </div>
            <div class="w-[90%] mx-auto md:w-[45%] lg:w-[23%] bg-white rounded-xl py-6 my-4 lg:my-3">
                <a href="/service/8">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/human_resources.png')}}" alt="">
                <h3 class="w-[74%] mx-auto font-satoshimedium text-default text-xl lg:text-2xl mt-5 mb-2">Project Report</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-sm lg:text-[16px]">An appropriate project report highlighting the clear layout of your business idea </p>
            </a>
            </div>

        </div>





</div>
