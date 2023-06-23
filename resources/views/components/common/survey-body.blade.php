@props(['rv','states'])
{{-- onsubmit="validateform();return false; --}}
<form id="form" method="POST" enctype="multipart/form-data" action="/survey/save">

    @csrf
    <div class="my-3 xl:my-4">
        <img class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%]  rounded-lg mx-auto" src="{{asset('images/home/survey-banner.jpg')}}" alt="">
    </div>

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border-t-[8px] border border-gray-600 border-t-[#1976BC] px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <h1 class=" font-satoshibold text-xl md:text-2xl 2xl:text-3xl mb-1 xl:mb-2">Public Opinion Survey</h1>
        <p class=" font-satoshiregular text-sm md:text-base 2xl:text-lg">YNOTZ Consulting Private Limited is a business consultancy startup based at Kakkanad, Cochin, Kerala. This is a preliminary market research survey for our upcoming project with a social goodness objective. Kindly fill out this form and support this humble initiative.</p>
    </div>

    <input class="hidden" type="number" name="rv" id="" value="{{$rv}}">

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600 px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">How much time do you spend reading newspapers in a day.
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">നിങ്ങൾ ഒരു ദിവസം പത്ര വായനക്കായ് എത്ര സമയം മാറ്റി വെയ്ക്കാറുണ്ട്?</h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>

        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-1" name="q1" required type="radio" value="rarely reads newspaper" >
            <label for="radio-1">I rarely reads newspaper (കാര്യമായ വായനയില്ല)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-2" name="q1" type="radio" value="reads only the headlines">
            <label for="radio-2">I only read the headlines (തലക്കെട്ടുകൾ മാത്രം വായിക്കും)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-3" name="q1" type="radio" value="15 minutes">
            <label for="radio-3">15 minutes (15 മിനിറ്റ്)</label>
        </div>

        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-4" name="q1" type="radio" value="half an hour">
            <label for="radio-4">May be half an hour (അര മണിക്കൂറോളം)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-5" name="q1" type="radio" value="more than half an hour">
            <label for="radio-5">More than half an hour (അര മണിക്കൂറിൽ കൂടുതൽ)</label>
        </div>



    </div>


    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">How much time do you spend watching news channels in a day?
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">നിങ്ങൾ ഒരു ദിവസം വാർത്താ ചാനലുകൾ കാണാൻ എത്ര സമയം ചിലവഴിക്കാറുണ്ട്?
            </h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-6" name="q2" required type="radio" value="rarely watches news channels">
            <label for="radio-6">I rarely watch (കാര്യമായിട്ടില്ല)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-7" name="q2" type="radio" value="I watch at least one news bulletin everyday">
            <label for="radio-7">I watch at least one news bulletin everyday (ഒരു ദിവസം ഒരു ന്യൂസ്‌ ബുള്ളറ്റിൻ വീതം)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-8" name="q2" type="radio" value="15 minutes">
            <label for="radio-8">15 minutes (15 മിനിറ്റോളം)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-9" name="q2" type="radio" value="More than half an hour">
            <label for="radio-9">More than half an hour (അര മണിക്കൂറിൽ കൂടുതൽ)</label>
        </div>
    </div>

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">Do you follow any other online news portals?
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">വാർത്തകൾ അറിയാനായ് മറ്റേതെങ്കിലും ഓൺലൈൻ വാർത്താ ചാനലുകളെ ആശ്രയിക്കാറുണ്ടോ?
            </h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-10" name="q3" required type="radio" value="Yes">
            <label for="radio-10">Yes</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-11" name="q3" type="radio" value="No">
            <label for="radio-11">No</label>
        </div>

    </div>


    {{-- Q4 - Do you think mainstream media is generally "negative"? --}}

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">Do you think mainstream media is generally "negative"?
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">മുഖ്യധാര മാധ്യമങ്ങൾ പൊതുവേ നെഗറ്റീവ് (നിരാശജനകം, നിഷേധാത്മകം) ആണെന്ന് നിങ്ങൾ കരുതുന്നുണ്ടോ?
            </h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-12" name="q4" required type="radio" value="Yes">
            <label for="radio-12">Yes</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-13" name="q4" type="radio" value="No">
            <label for="radio-13">No</label>
        </div>

    </div>


    {{-- Q5- Do you wish to see more "positive" news in the media? --}}

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">Do you wish to see more "positive" news in the media?
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">മാധ്യമങ്ങളിൽ കൂടുതൽ നല്ല വാർത്തകൾ കാണാൻ നിങ്ങൾ ആഗ്രഹിക്കുന്നുണ്ടോ?
            </h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-14" name="q5" required type="radio" value="Yes">
            <label for="radio-14">Yes</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-15" name="q5" type="radio" value="No">
            <label for="radio-15">No</label>
        </div>

    </div>


    {{-- Q6- How does the media and news generally impact your mindset? --}}

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">How does the media and news generally impact your mindset?
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">നിലവിലെ മാധ്യമങ്ങളും വാർത്തകളും നിങ്ങളുടെ മാനസികാവസ്ഥയെ എങ്ങനെ സ്വാധീനിക്കുന്നു?
            </h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-16" name="q6" required type="radio" value="Highly positvive">
            <label for="radio-16">Highly positive (വലിയ തോതിൽ പ്രത്യാശ നൽകുന്നു)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-17" name="q6" type="radio" value="Somewhat positive">
            <label for="radio-17">Somewhat positive (ചെറിയ തോതിൽ പ്രത്യാശ നൽകുന്നു)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-18" name="q6" type="radio" value="Somewhat positive">
            <label for="radio-18">No effect  (യാതൊരു രീതിയിലും സ്വാധീനിക്കുന്നില്ല)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-19" name="q6" type="radio" value="Somewhat positive">
            <label for="radio-19">Somewhat negative (ചെറിയ തോതിൽ നിരാശ നൽകുന്നു)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-20" name="q6" type="radio" value="Somewhat positive">
            <label for="radio-20">Highly negative (തീർത്തും നിരാശജനകമായി സ്വാധീനിക്കുന്നു)</label>
        </div>

    </div>


    {{--Q7- Do you feel the need to be perceived as "smart" in the society? --}}

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">Do you feel the need to be perceived as "smart" in the society?
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">സമൂഹത്തിൽ സാമര്‍ത്ഥ്യമുള്ള ഒരു വ്യക്തിയായി പരിഗണിക്കപെടണമെന്നുള്ളത് ഒരു ആവശ്യകതയായി നിങ്ങൾക്ക് തോന്നിയിട്ടുണ്ടോ?
            </h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-21" name="q7" required type="radio" value="Yes">
            <label for="radio-21">Yes</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-22" name="q7" type="radio" value="No">
            <label for="radio-22">No</label>
        </div>

    </div>


    {{--Q8- Would you support a project that promotes "goodness"? --}}


    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">Would you support a project that promotes "goodness"?
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">സമൂഹത്തിലെ നന്മയെ പ്രോത്സാഹിപ്പിക്കുന്ന ഒരു പദ്ധതിയെ നിങ്ങൾ പിന്തുണയ്ക്കുമോ?
            </h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-23" name="q8" required type="radio" value="Yes">
            <label for="radio-23">Yes</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-24" name="q8" type="radio" value="No">
            <label for="radio-24">No</label>
        </div>

    </div>


    {{--Q9- How much do you trust the mainstream media news( in percentage)? --}}

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">How much do you trust the mainstream media news( in percentage)?
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">മുഖ്യധാര മാധ്യമങ്ങളിൽ വരുന്ന വാർത്തകളെ നിങ്ങൾ എത്ര ശതമാനത്തോളം വിശ്വസിക്കുന്നു?
            </h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-25" name="q9" required type="radio" value="0-25">
            <label for="radio-25">0-25%</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-26" name="q9" type="radio" value="26-50">
            <label for="radio-26">26-50%</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-27" name="q9" type="radio" value="51-60">
            <label for="radio-27">51-60%</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-28" name="q9" type="radio" value="61-70">
            <label for="radio-28">61-70%</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-29" name="q9" type="radio" value="71-80">
            <label for="radio-29">71-80%</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-30" name="q9" type="radio" value="81-90">
            <label for="radio-30">81-90%</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-31" name="q9" type="radio" value="91-100">
            <label for="radio-31">91-100%</label>
        </div>

    </div>


    {{--Q-10 Which all social media platform do you use? --}}

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">Which all social media platform do you use?
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">ഏതെല്ലാം സോഷ്യൽ മീഡിയ പ്ലാറ്റ് ഫോമുകളാണ് നിങ്ങൾ ഉപയോഗിക്കാറുള്ളത്?
            </h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="c1" name="q10[]" type="checkbox" value="Facebook">
            <label for="c1">Facebook</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="c2" name="q10[]" type="checkbox" value="Instagram">
            <label for="c2">Instagram</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="c3" name="q10[]" type="checkbox" value="LinkedIn">
            <label for="c3">LinkedIn</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="c4" name="q10[]" type="checkbox" value="Twitter">
            <label for="c4">Twitter</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="c5" name="q10[]" type="checkbox" value="Youtube">
            <label for="c5">Youtube</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="c6" name="q10[]" type="checkbox" value="Whatsapp">
            <label for="c6">WhatsApp</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input onselect="checkboxvalidation()" id="c7" name="q10[]" type="checkbox" value="none">
            <label for="c7">I don't use any of these</label>
        </div>

        @if ($errors->any())
            <div class="text-sm text-red-600 font-satoshimedium">{{$errors->first('q10')}}</div>
        @endif



    </div>

    {{--Q11- How often do you check your social media accounts? --}}


    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">How often do you check your social media accounts?
            </h1>

            <h1 class=" font-satoshimedium mb-[9px] leading-5">നിങ്ങളുടെ സോഷ്യൽ മീഡിയ അക്കൗണ്ടുകൾ എത്ര ഇടവിട്ട് പരിശോധിക്കും?
            </h1>
            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-40" name="q11" required type="radio" value="Daily">
            <label for="radio-40">Daily (ദിവസേന)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-32" name="q11" type="radio" value="few times a week">
            <label for="radio-32">A few times in a week (ആഴ്ചയിൽ കുറച്ച് തവണ)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-33" name="q11" type="radio" value="few times in a month">
            <label for="radio-33">A few times in a month (മാസത്തിൽ കുറച്ച് തവണ)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-34" name="q11" type="radio" value="rarely">
            <label for="radio-34">Rarely (വിരളമായി)</label>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input id="radio-35" name="q11" type="radio" value="never">
            <label for="radio-35">Never (ഒരിക്കലുമില്ല)</label>
        </div>


    </div>

    {{-- Q12-State --}}


    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">State (സംസ്ഥാനം)
            </h1>


            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <select id="state-selector" required class=" border-gray-400 rounded-lg ring-0"  name="state" id="">

                <option class=" font-satoshiregular" value="Kerala" selected>Kerala</option>

                @foreach ($states as $state)
                    <option class=" font-satoshiregular" value="{{$state}}">{{$state}}</option>
                @endforeach

            </select>
        </div>


    </div>


    {{-- Q13- Age --}}

    @php
        $ages=["Below 13 years","13 - 18 years","19 - 23 years","24 - 30 years","31 - 45 years","46 - 60 years", "Above 60"];
    @endphp

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">Age Group (പ്രായം)
            </h1>


            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <select id="age-selector" required class=" border-gray-400 rounded-lg ring-0"  name="age" id="">

                <option class=" font-satoshiregular" value="">-- Select age --</option>

                @foreach ($ages as $age)
                    <option class=" font-satoshiregular" value="{{$age}}">{{$age}}</option>
                @endforeach

            </select>
        </div>


    </div>

    {{-- Q14- Gender --}}



    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">Gender (ലിംഗം)
            </h1>


            </div>
            <span class="text-red-600 font-satoshibold text-lg">*</span>
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <select id="age-selector" required class=" border-gray-400 rounded-lg ring-0" value="Gender" name="gender" id="">

                <option class=" font-satoshiregular" value="">-- Select gender --</option>

                    <option class=" font-satoshiregular" value="male">Male (പുരുഷൻ)</option>
                    <option class=" font-satoshiregular" value="female">Female (സ്ത്രീ)</option>
                    <option class=" font-satoshiregular" value="unspecified">Others (മറ്റ്)</option>


            </select>
        </div>


    </div>

    {{-- Q15-name --}}

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">Name പേര് (optional)
            </h1>


            </div>
            {{-- <span class="text-red-600 font-satoshibold text-lg">*</span> --}}
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input type="text" name="name" required placeholder="Name" class=" border-b-2 border-gray-400 border-0 focus:outline-none focus:ring-0  transition-none ease-in-out duration-150">
        </div>


    </div>


    {{-- Q16-Email ID --}}

    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <div class="flex ">
            <div class=" flex flex-col">
            <h1  class=" font-satoshimedium mb-[7px] leading-5 md:text-lg">Email id ഇമെയിൽ ഐഡി (optional)
            </h1>


            </div>
            {{-- <span class="text-red-600 font-satoshibold text-lg">*</span> --}}
        </div>
        <div class=" flex space-x-2 items-center my-2 font-satoshiregular">
            <input type="email" name="email" required placeholder="Email ID" class=" border-b-2 border-gray-400 border-0 focus:outline-none focus:ring-0">
        </div>


    </div>


    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto border border-gray-600   px-3 py-3 lg:px-4 lg:py-6 mb-3 xl:mb-4">
        <p class=" font-satoshiregular text-center text-lg">Greetings and thanks for taking the survey.</p>
        <p class=" font-satoshimedium mt-1.5">Please share this to as many of your friends and groups as possible to support this Goodness Initiative.</p>
    </div>


    <div class="w-[94%] sm:w-[80%] lg:w-[60%] 2xl:w-[48%] rounded-lg mx-auto  mb-3 xl:mb-4">
        <button type="submit" class="border-0 px-2.5 py-1.5 bg-[#1976BC] text-white font-satoshimedium rounded-lg">
            Submit
        </button>
    </div>

</form>

<script>
    let checked =false;
    let none=false;
    for(let i=1; i<=7; i++){
        if(document.getElementById('c'+i).checked){
            checked=true;
        }
    }

    document.getElementById('c7').addEventListener('click',(e)=>{
        // console.log('in function')
        // none=true;
        if(e.target.checked){
            none=true;
        }
        else{
            none=false;
        }
        if(document.getElementById('c7').checked){
            for(let j=1; j<=6; j++){
                if(document.getElementById('c'+j).checked){
                    document.getElementById('c'+j).click();
                    // console.log('please uncheck')
                }
            }
        }
    });

    for(let k=1; k<7; k++){
        document.getElementById('c'+k).addEventListener('click',(e)=>{
            if(e.target.checked){
                if(none){
                    document.getElementById('c7').click();
                }
            }
        })
    }

    function formcheck(){
        let checkedfields=[];
        if(none){
            checkedfields.push('None');
        }
        else{

            for(let k=0; k<7;k++){
                if(document.getElementById('c'+k).checked){
                    checkedfields.push(document.getElementById('c'+k).value);
                }
            }
        }
    }

    function formsubmission(){
        let form = document.getElementById('form');
        const formData = new FormData(document.getElementById('form'));
        console.log(formData);

        axios.post('/api/survey/test', {

        data: formData,

        checkedfield: checkedfields,


    }, {
        headers: {

        },
    }).then((response)=>{
        console.log(response)
    }).error((err)=>{
        console.log(err)
    });
    }

</script>
