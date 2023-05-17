<div class="mt-[58px] lg:flex lg:justify-center">

<div class=" w-[89%] mx-auto lg:w-[26%]">
    <h3 class=" font-satoshiregular text-lg text-big-lg text-default mt-3 mb-4">FREQUENTLY ASKED QUESTIONS</h3>
    <p class=" font-satoshiregular text-small lg:text-medium text-default">Our team has all ears for our clients. We listen, communicate and give you a better explanation for enhancing your business. We are always flexible to discover befitting solutions for your firm.
    </p>
</div>

<div class="lg:basis-1/2 lg:mr-12">
    @php
        $title1="Why is it important for firms to have a third party perspective?";
        $description="Sometimes the person who controls the entire business is too busy with the day-to-day office activities that they often miss the wider picture of the company.  Here a third-party consultation is required to gain a deeper knowledge of the company and receive advice moving forward.";
        $title2="Is the current business climate a good place to launch a startup?";
        $description2="The pandemic radically alters the outlook for business. To put a business idea into action, you no longer require a huge budget and a lot of employees. With a small, efficient team, including fresh talents or freelancers, you can weave your dream. Also, the interest rate for business loans is low now that money isn't a problem anymore.";
        $title3="How YNOTZ helps with your business plans?";
        $description3="We listen to you. You can share your business thoughts and concerns with us. We don't force readymade solutions upon you. We sincerely analyse your business to identify the pain points and formulate a clear strategy for its growth. We work with you to implement the required changes and achieve your desired objectives.";
        $title4="How much do services cost in YNOTZ?";
        $description4="We only charge a fair price for our services and hope to have a lifelong relationship with each of our customers.";
    @endphp

    <x-desktop.accordion :title="$title1" :description="$description" class="mt-[60px]"></x-mobile.accordions>


    <x-desktop.accordion :title="$title2" :description="$description2" class="mt-4"></x-mobile.accordions>

    <x-desktop.accordion :title="$title3" :description="$description3" class="mt-4"></x-mobile.accordions>

    <x-desktop.accordion :title="$title4" :description="$description4" class="mt-4 hidden lg:block"></x-mobile.accordions>
</div>

</div>
