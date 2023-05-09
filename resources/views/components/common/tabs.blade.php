<div class="lg:w-fit lg:mx-auto">
    <ul class="flex -mb-px text-sm lg:text-base font-medium text-center text-gray-500 dark:text-gray-400 overflow-auto hide-scroll text-gray">
        @php
            $item1="Human Resource";
            $item2="Operations";
            $item3="Project Report";
            $item4="Marketing";
            $item5="Buisiness Auditing";
            $item6="Finance & Accounting";
            $item7="Scaling Up";
            $item8="IT Solutions";
        @endphp

    <li class="mr-2">
        <a @click.prevent="show='hr'" :class="show=='hr'? 'border-b-2 border-blue-600': ''" style="white-space: nowrap;" href="#" class=" font-satoshimedium inline-flex p-[15px] xl:py-[18px]   rounded-t-lg group whitespace-nowrap" aria-current="page">
            Human Resource
        </a>
    </li>
    <li class="mr-2">
        <a @click.prevent="show='op'" :class="show=='op'? 'border-b-2 border-blue-600': ''" style="white-space: nowrap;" href="#" class=" font-satoshimedium inline-flex p-[15px] xl:py-[18px]   rounded-t-lg group whitespace-nowrap" aria-current="page">
            Operations
        </a>
    </li>
    <li class="mr-2">
        <a @click.prevent="show='pr'" :class="show=='pr'? 'border-b-2 border-blue-600': ''" style="white-space: nowrap;" href="#" class=" font-satoshimedium inline-flex p-[15px] xl:py-[18px]   rounded-t-lg group whitespace-nowrap" aria-current="page">
            Project Report
        </a>
    </li>
    <li class="mr-2">
        <a @click.prevent="show='m'" :class="show=='m'? 'border-b-2 border-blue-600': ''" style="white-space: nowrap;" href="#" class=" font-satoshimedium inline-flex p-[15px] xl:py-[18px]   rounded-t-lg group whitespace-nowrap" aria-current="page">
            Marketing
        </a>
    </li>
    <li class="mr-2">
        <a @click.prevent="show='ba'" :class="show=='ba'? 'border-b-2 border-blue-600': ''" style="white-space: nowrap;" href="#" class=" font-satoshimedium inline-flex p-[15px] xl:py-[18px]   rounded-t-lg group whitespace-nowrap" aria-current="page">
            Buisiness Auditing
        </a>
    </li>
    <li class="mr-2">
        <a @click.prevent="show='fa'" :class="show=='fa'? 'border-b-2 border-blue-600': ''" style="white-space: nowrap;" href="#" class=" font-satoshimedium inline-flex p-[15px] xl:py-[18px]   rounded-t-lg group whitespace-nowrap" aria-current="page">
            Finance & Accounting
        </a>
    </li>
    <li class="mr-2">
        <a @click.prevent="show='su'" :class="show=='su'? 'border-b-2 border-blue-600': ''" style="white-space: nowrap;" href="#" class=" font-satoshimedium inline-flex p-[15px] xl:py-[18px]   rounded-t-lg group whitespace-nowrap" aria-current="page">
            Scaling Up
        </a>
    </li>
    <li class="mr-2">
        <a @click.prevent="show='its'" :class="show=='its'? 'border-b-2 border-blue-600': ''" style="white-space: nowrap;" href="#" class=" font-satoshimedium inline-flex p-[15px] xl:py-[18px]   rounded-t-lg group whitespace-nowrap" aria-current="page">
            IT Solutions
        </a>
    </li>




    </ul>
</div>
