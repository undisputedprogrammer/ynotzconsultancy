<div class=" my-7">
    @php
        $heading="BLOGS";
        $paragraph="Enlighten yourselves before stepping into a new venture";
    @endphp
    <x-main-noimg :heading="$heading" :paragraph="$paragraph"></x-main-noimg>
    <div class=" lg:hidden">
    <x-mobile.blog-carousel></x-mobile.blog-carousel>
    </div>

    <div class=" hidden lg:flex">
        @php
        $img1="images/blogs/blog-img1.png";
        $img2="images/blogs/blog-img2.png";
        $img3="images/blogs/blog-img3.png";
        $blogtitle="Seven reasons why startups fail";
        $blogdescription="Almost 90 percent of startups fail across the world, with 10 percent failing within the first year. Or we can say that most of the startups are like a meteor entering the earth's atmosphere.";
        $blogtitle2="How to register your startup under MSME";
        $blogdescription2="The Ministry of Micro, Small & Medium Enterprises (MSME) is the apex executive body for the conceptualization and management of the rules and regulations regarding Micro, Small & Medium enterprises in India. MSMEs play a crucial role in providing large-scale employment opportunities and also help in the industrialization of the rural area.";
        $blogtitle3="3 Central Government Schemes for Medium and Small Enterprises";
        $blogdescription3="Funding is a prime dilemma in small and medium businesses. In this revolutionary era of 'Make in India', the central government provides many schemes for initializing and upgrading MSMEs. According to the Ministry of MSMEs classification, an Enterprise can classify as a Micro, Small, or Medium Enterprise based on the following criteria, namely,";
        @endphp
        <div class=" w-[89%] mx-auto md:flex md:flex-wrap md:justify-evenly md:mt-6">

                <x-blog :img="$img1" :title="$blogtitle" :description="$blogdescription"></x-blog>
                <x-blog :img="$img2" :title="$blogtitle2" :description="$blogdescription2"></x-blog>
                <x-blog :img="$img3" :title="$blogtitle3" :description="$blogdescription3"></x-blog>


        </div>
    </div>

</div>
