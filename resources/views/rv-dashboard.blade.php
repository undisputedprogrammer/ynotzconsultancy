<x-defaultlayout>

    <x-mobile.nav></x-mobile.nav>
    {{-- navbar-mobile ends --}}

     {{-- mobile-menu pop up begins--}}
    @php
    $home=false;
    $about=false;
    $services=false;
    $resources=false;
@endphp
<x-mobile.menu :home="$home" :about="$about" :services="$services" :resources="$resources" class="font-satoshimedium text-[14px] ml-11 mb-[27px]"></x-mobile.menu>
{{-- mobile-menu pop up ends --}}

    {{-- desktop-navbar begins --}}
    @php
        $ishome=false;
        $isabout=false;
        $isservices=false;
        $isresources=false;
    @endphp
<x-desktop.nav :ishome="$ishome" :isabout="$isabout" :isservices="$isservices" :isresources="$isresources" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
    {{-- desktop-navbar ends --}}

    <div class="flex justify-end w-[94%] mx-auto my-2"><a class=" font-satoshimedium text-white bg-red-600 px-1 rounded-md " href="/rv/logout">Logout</a></div>

    <div class=" py-14">
        {{-- {{Session::get('rv_id')}} --}}

        <div class=" flex pl-4  mx-auto w-fit border-2 border-gray-400 rounded-lg">
            <p id="copytext" class="pr-4 py-1">www.ynotzconsulting.com/survey?rv={{$rv['id']}}</p>
            <button id="copy-btn" class=" border-l border-gray-400 px-2 bg-gray-400 py-1 rounded-r-lg">Copy</button>
        </div>

        <div class=" w-[94%] mx-auto my-6 md:my-10 py-7 px-3 border-2 border-gray-600 border-dashed text-center max-w-md rounded-lg bg-gray-50">
            @php
                $nos=count($responses);
            @endphp
            <h3 class=" font-satoshimedium text-lg lg:text-xl">Surveys completed : {{$nos}}</h3>
        </div>


                <div class="w-[98%] md:max-w-lg mx-auto">
                    <h1 class=" font-satoshimedium text-xl text-center mb-2">Responses Recieved</h1>
                  <table class="min-w-full text-center text-sm font-light overflow-scroll">
                    <thead
                      class="border-b bg-neutral-800 font-medium text-white dark:border-neutral-500 dark:bg-neutral-900">
                      <tr>
                        <th scope="col" class=" px-6 py-4">#</th>
                        <th scope="col" class=" px-6 py-4">Name</th>
                        <th scope="col" class=" px-6 py-4">Time</th>
                        <th scope="col" class=" px-6 py-4">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (count($responses)>0)
                            @foreach ($responses as $response)
                            <tr class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap  px-6 py-4 font-satoshimedium">1</td>
                                <td class="whitespace-nowrap  px-6 py-4 font-satoshimedium">{{$response['name']}}</td>
                                <td class="whitespace-nowrap  px-6 py-4 font-satoshimedium">{{$response->created_at->format('H:i:s');}}</td>
                                <td class="whitespace-nowrap  px-6 py-4 font-satoshimedium">{{$response['created_at']->toDateString()}}</td>
                              </tr>
                            @endforeach


                          @else

                        <tr>
                            <td class="my-2 font-satoshimedium text-base">No reponses recieved</td>
                        </tr>

                        @endif



                    </tbody>
                  </table>
                </div>


    </div>

    <script>
        let copyBtn =document.getElementById('copy-btn');
        let copyText =document.getElementById('copytext');
        copyBtn.addEventListener('click',(e)=>{
            navigator.clipboard.writeText(copyText.innerText);
            copyBtn.innerText ='Copied';
        })
    </script>

</x-defaultlayout>
