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

<x-desktop.nav :ishome="$home" :isabout="$about" :isservices="$services" :isresources="$resources" class="font-satoshimedium text-[14px] mr-14"></x-desktop.nav>
    {{-- desktop-navbar ends --}}
    <x-common.contact-hero></x-common.contact-hero>

    <x-spinner></x-spinner>
    <x-success-alert></x-success-alert>
    <x-fail-alert></x-fail-alert>

    <script>

let form= document.getElementById('form');
        let spinner = document.getElementById('spinner');
        let submitBtn = document.getElementById('submit');
        let alert=document.getElementById('success-alert');
        let failalert=document.getElementById('fail-alert');
        let closefailAlert=document.getElementById('close-failalert');
        let closeAlert=document.getElementById('close-alert');
        let name=document.getElementById('name').value;
        let email=document.getElementById('email').value;
        let phone=document.getElementById('phone').value;
        let message=document.getElementById('message').value;

        alert.classList.toggle('hidden');


        closeAlert.addEventListener('click',function(){
            alert.classList.toggle('hidden');
            form.reset();
        })

        closefailAlert.addEventListener('click',function(){
            failalert.classList.toggle('hidden');
            form.reset();
        })

        function formSubmit(){
            console.log(document.getElementById('name').value);
            console.log(name);
            submitBtn.disabled = true;
            spinner.classList.toggle('hidden');
            sendmail();
        }

        function sendmail(){
            axios.post('/api/send', {
                            name: document.getElementById('name').value,
                            email: document.getElementById('email').value,
                            phone : document.getElementById('phone').value,
                            company: document.getElementById('company').value,
                            message: document.getElementById('message').value,
                        }, {
                            headers: {
                                "Content-Type": "multipart/form-data",
                            },
                        }).then(function(response) {

                                spinner.classList.toggle('hidden');
                                alert.classList.toggle('hidden');

                            })
                            .catch(function(error) {
                                spinner.classList.toggle('hidden');
                                failalert.classList.toggle('hidden');
                            });
        }
    </script>

    <x-common.footer></x-common.footer>
</x-defaultlayout>
