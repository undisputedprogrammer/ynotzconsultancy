<div class=" my-7">
    @php
        $heading="READ OUR OTHER POSTS";
        $paragraph="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel fugiat unde veniam reiciendis, aliquam quod rem soluta autem ipsam illo modi id voluptas temporibus laboriosam?";
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
        $blogtitle="What’s a small thing anyone can do to upskill?";
        $blogdescription="Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque. unde omnis iste natus error sit.";
        @endphp
        <div class=" w-[89%] mx-auto md:flex md:flex-wrap md:justify-evenly md:mt-6">

                <x-blog :img="$img1" :title="$blogtitle" :description="$blogdescription"></x-blog>
                <x-blog :img="$img2" :title="$blogtitle" :description="$blogdescription"></x-blog>
                <x-blog :img="$img3" :title="$blogtitle" :description="$blogdescription"></x-blog>


        </div>
    </div>

</div>
