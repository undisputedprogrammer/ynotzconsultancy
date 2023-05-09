<div class="w-full">

    <div class="w-full mt-[60px] lg:mt-[110px]">
        <img class="h-[32px] w-[32px] lg:h-[59px] lg:w-[59px] mx-auto" src="{{asset('images/home/Frame-59.png')}}" alt="">
    </div>
    <div class="w-[85%] mx-auto my-6 lg:my-9 lg:w-[65%]">
        <h1 class=" font-satoshiregular text-4xl lg:text-[5rem] lh-75 text-center">SMALL CHANGES CAN BRING <span class="text-blue">BIG IMPACT</span>.</h1>
        <p class=" font-satoshiregular text-center mt-6 lg:w-[40%] lg:text-xl mx-auto">We transform legacy systems, architect for the cloud and build successful products.</p>
    </div>

    <div class="w-fit mx-auto">
        <a class="h-[43px] px-7 text-white btn-blue text-center font-satoshimedium py-[10px] text-[14px] rounded-lg" href="">OUR SERVICES</a>
    </div>

    <div class=" w-full mt-9 section">
    <div class=" relative">
        <div class=" absolute top-0 w-full bg-white h-[25px] lg:h-[65px] rounded-b-[50%]">

        </div>
        <div id="scroll" class="flex overflow-scroll hide-scroll ">

            <img id="img" class="img mx-1" src="{{asset('images/home/carousel/Hero-1.png')}}" alt="">
            <img class="img mx-1" src="{{asset('images/home/carousel/Hero-3.png')}}" alt="">
            <img class="img mx-1" src="{{asset('images/home/carousel/Hero-2.png')}}" alt="">
            <img class="img mx-1" src="{{asset('images/home/carousel/Hero-4.png')}}" alt="">
            <img class="img mx-1" src="{{asset('images/home/carousel/Hero-5.png')}}" alt="">

        </div>
        <div class=" absolute bottom-0 w-full bg-white h-[25px] lg:h-[65px] rounded-t-[50%]">

        </div>

            <button class=" absolute top-[50%] left-0" id="left-btn">left button</button>
            <button class=" absolute top-[50%] right-0" id="right-btn">Right button</button>

    </div>
</div>

</div>
<script>
console.log('hi');
let img=document.querySelector('#img');
let distance=(window.innerWidth)/2;
let preset=((window.innerWidth)/4);
console.log(img)
window.addEventListener("load", function(event) {
  const conent = document.querySelector('#scroll');
  conent.scrollLeft += preset;
  event.preventDefault();
});

 const leftbtn=document.querySelector('#left-btn');
 console.log(leftbtn)

 leftbtn.addEventListener("click", function(event) {
  const conent = document.querySelector('#scroll');
  conent.scrollLeft -= distance;
  event.preventDefault();
});

const rightbtn=document.querySelector('#right-btn');

rightbtn.addEventListener("click", function(event) {
  const conent = document.querySelector('#scroll');
  conent.scrollLeft += distance;
  event.preventDefault();
});


  console.log('over')

</script>
