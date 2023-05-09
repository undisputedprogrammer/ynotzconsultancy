<div class=" ">
    @php
        $img1="images/blogs/blog-img1.png";
        $img2="images/blogs/blog-img2.png";
        $img3="images/blogs/blog-img3.png";
        $blogtitle="What’s a small thing anyone can do to upskill?";
        $blogdescription="Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque. unde omnis iste natus error sit.";
        $heading="READ HOW WE CHANGE THE INDUSTRY FOR GOOD";
        $paragraph="Developing a successful digital product is a complex process that requires choosing the right partner, applying innovative solutions, and following reliable processes.";
    @endphp

        <x-main-noimg :heading="$heading" :paragraph="$paragraph"></x-main-noimg>

        <div class=" w-[89%] mx-auto md:flex md:flex-wrap md:justify-evenly md:mt-6">
            @for ($i=0; $i<2; $i++)
                <x-blog :img="$img1" :title="$blogtitle" :description="$blogdescription"></x-blog>
                <x-blog :img="$img2" :title="$blogtitle" :description="$blogdescription"></x-blog>
                <x-blog :img="$img3" :title="$blogtitle" :description="$blogdescription"></x-blog>
            @endfor

        </div>
</div>
