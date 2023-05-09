<div class="mt-[58px] lg:flex lg:justify-center">

<div class=" w-[89%] mx-auto lg:w-[26%]">
    <h3 class=" font-satoshiregular text-lg text-big-lg text-default mt-3 mb-4">FREQUENTLY ASKED QUESTIONS</h3>
    <p class=" font-satoshiregular text-small lg:text-medium text-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae posuere nisl. In dictum luctus arcu, eget feugiat quam varius at. Fusce magna ante,</p>
</div>

<div class="lg:basis-1/2 lg:mr-12">
    @php
        $title1="Why is YNOTZ the best Consultancy";
        $description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae posuere nisl. In dictum luctus arcu, eget feugiat quam varius at. Fusce magna ante, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae posuere nisl. In dictum luctus arcu, eget feugiat quam varius at. Fusce magna ante,";
        $title2="What will I be charged for ?";
        $title3="How long does the entire process take ?";
        $title4="What Post-Purchase support will I get ?";
    @endphp

    <x-desktop.accordion :title="$title1" :description="$description" class="mt-[60px]"></x-mobile.accordions>


    <x-desktop.accordion :title="$title2" :description="$description" class="mt-4"></x-mobile.accordions>

    <x-desktop.accordion :title="$title3" :description="$description" class="mt-4"></x-mobile.accordions>

    <x-desktop.accordion :title="$title4" :description="$description" class="mt-4 hidden lg:block"></x-mobile.accordions>
</div>

</div>
