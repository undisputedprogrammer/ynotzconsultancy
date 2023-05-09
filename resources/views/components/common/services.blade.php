<div class="bg-gray-lg pt-4 lg:pb-[60px]">
    <img class="w-[24px] h-[24px] lg:h-[40px] lg:w-[40px] mx-auto mt-[36px] lg:mt-[90px]" src="{{asset('images/home/Frame-59.png')}}" alt="">

    <div class="w-[88%]  mx-auto mt-3">
        <h1 class=" w-[335px] lg:w-[656px] mx-auto font-satoshiregular text-center text-lg lg:text-[2.25rem] lh-lg ">ONE SOLUTION FOR <span class="text-blue">ALL YOUR BUISINESS NEEDS</span></h1>
        <p class="lg:w-[636px] mx-auto font-satoshiregular text-center mt-3 text-[15px] lg:text-[18px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae posuere nisl. In dictum luctus arcu, eget feugiat quam varius at. Fusce magna ante,</p>
    </div>

    {{-- mobile accordions --}}
    @php
        $image1="/images/home/services/human_resources.png";
        $title="Human Resources";
        $description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae posuere nisl. In dictum luctus arcu, eget feugiat quam varius at. Fusce magna ante, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae posuere nisl. In dictum luctus arcu, eget feugiat quam varius at. Fusce magna ante,";
        $image2="/images/home/services/marketing.png";
        $title2="Marketing";
        $image3="/images/home/services/buisiness.png";
        $title3="Buisiness Auditing";
    @endphp

    <x-mobile.accordions :img="$image1" :title="$title" :description="$description" class="mt-[60px] lg:hidden"></x-mobile.accordions>


        <x-mobile.accordions :img="$image2" :title="$title2" :description="$description" class="mt-4 lg:hidden"></x-mobile.accordions>

        <x-mobile.accordions :img="$image3" :title="$title3" :description="$description" class="mt-4 lg:hidden"></x-mobile.accordions>

        {{-- mobile accordions ends --}}

        <div class="hidden lg:flex w-[89%] flex-wrap justify-between mx-auto mt-[100px]">
            <div class="w-[23%] bg-white rounded-xl py-6 my-3">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/marketing.png')}}" alt="">
                <h3 class=" w-[74%] mx-auto font-satoshimedium text-default text-2xl mt-5 mb-2">Human Resource</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-[16px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="w-[23%] bg-white rounded-xl py-6 my-3">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/operations.png')}}" alt="">
                <h3 class=" w-[74%] mx-auto font-satoshimedium text-default text-2xl mt-5 mb-2">Operations</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-[16px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="w-[23%] bg-white rounded-xl py-6 my-3">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/buisiness.png')}}" alt="">
                <h3 class=" w-[74%] mx-auto font-satoshimedium text-default text-2xl mt-5 mb-2">Marketing</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-[16px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="w-[23%] bg-white rounded-xl py-6 my-3">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/auditing.png')}}" alt="">
                <h3 class=" w-[74%] mx-auto font-satoshimedium text-default text-2xl mt-5 mb-2">Buisiness Auditing</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-[16px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="w-[23%] bg-white rounded-xl py-6 my-3">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/finance.png')}}" alt="">
                <h3 class=" w-[74%] mx-auto font-satoshimedium text-default text-2xl mt-5 mb-2">Finance & Accounting</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-[16px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="w-[23%] bg-white rounded-xl py-6 my-3">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/scaling.png')}}" alt="">
                <h3 class=" w-[74%] mx-auto font-satoshimedium text-default text-2xl mt-5 mb-2">Scaling up</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-[16px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="w-[23%] bg-white rounded-xl py-6 my-3">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/it.png')}}" alt="">
                <h3 class=" w-[74%] mx-auto font-satoshimedium text-default text-2xl mt-5 mb-2">IT Solutions</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-[16px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <div class="w-[23%] bg-white rounded-xl py-6 my-3">
                <img class="w-[80%] rounded-xl mx-auto" src="{{asset('images/home/services/human_resources.png')}}" alt="">
                <h3 class=" w-[74%] mx-auto font-satoshimedium text-default text-2xl mt-5 mb-2">Project Report</h3>
                <p class=" w-[74%] mx-auto font-satoshiregular text-default text-[16px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>

        </div>





</div>
