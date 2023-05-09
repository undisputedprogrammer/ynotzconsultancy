<div class="bg-gray mt-16">
    <div>
        <div class=" pt-16 ml-6 lg:ml-16">
            <img class="  h-[30px] " src="{{asset('images/logo.jpg')}}" alt="">
        <div class=" lg:flex lg:justify-between">
            <div class="flex space-x-6 lg:space-x-12 mt-[2rem]">
                <div class="flex flex-col space-y-5">
                    <a class=" font-satoshimedium text-md lg:text-[16px] text-default" href="#">About us</a>
                    <a class=" font-satoshimedium text-md lg:text-[16px] text-default" href="#">Services</a>
                    <a class=" font-satoshimedium text-md lg:text-[16px] text-default" href="#">Who we are</a>
                </div>
                <div class="flex flex-col space-y-5">
                    <a class=" font-satoshimedium text-md lg:text-[16px] text-default" href="#">IT Solutions</a>
                    <a class=" font-satoshimedium text-md lg:text-[16px] text-default" href="#">Team</a>
                    <a class=" font-satoshimedium text-md lg:text-[16px] text-default" href="#">Buisiness Auditing</a>
                </div>
            </div>
            <div class="mt-[2rem] lg:mr-40 lg:mt-0">
                <h4 class=" font-satoshimedium text-lg text-default">Contact us</h4>
                <x-contactinfo></x-contactinfo>
            </div>
        </div>

        <div class=" lg:flex justify-between lg:mt-20">

            <div class=" mt-[2rem] w-[90%] lg:w-[530px]">
                <p class=" font-satoshiregular text-sm text-default lg:text-lg">Elit massa non eros, consectetur non ac consequat in nisl mattis adipiscing tellus egestas gravido.</p>
                <div class=" flex space-x-5 mt-3">
                    <a href="#"><img src="{{asset('icons/messenger.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('icons/facebook.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('icons/git.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('icons/whatsapp.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('icons/spotify.svg')}}" alt=""></a>
                    <a href="#"><img src="{{asset('icons/instagram.svg')}}" alt=""></a>
                </div>
            </div>

            <div class=" mt-[2rem] lg:mr-[3rem] xl:mr-20">
                <h4 class=" font-satoshimedium text-[16px] lg:text-xl text-default">Subscribe to our Newsletter</h4>
                <p class=" font-satoshiregular text-sm lg:text-base mt-3 text-default">Lorem ipsum dolor sit amet consectetur.</p>
                <div class=" mt-4">
                    <form class="flex space-x-3 items-center" action="">
                        <input class="h-[40px] rounded-lg font-satoshimedium lg:w-[400px]" type="email" required id="email" placeholder="Email Address">
                        <input class="h-[35px] btn-blue rounded-lg text-white font-satoshimedium px-3" type="submit" value="SEND">
                    </form>
                </div>
            </div>

        </div>



        </div>
        <div class="mt-[70px] mb-[30px] w-[90%] mx-auto">
            <p class=" font-satoshiregular text-xs text-default text-center lg:text-base">Copyright 2022. Elit massa non eros, consectetur non ac consequat in nisl mattis adipiscing tellus egestas gravido.</p>
        </div>
    </div>
</div>
