<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YNOTZ-CONSULTING</title>
    <link rel="shortcut icon" href="{{asset('images/icons/favicon.ico')}}" type="image/x-icon">
    <script src="{{asset('js/swiper.js')}}"></script>
    <script src="{{asset('js/flow.js')}}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>
<body x-data="{show:false, toggle(){this.show=!this.show}}">
    {{$slot}}


</body>
</html>
