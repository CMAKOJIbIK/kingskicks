<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    @vite('resources/css/reset.css')
    <link rel="stylesheet" type="text/css" href="{{asset("slick/slick.css")}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset("slick/slick-theme.css")}}"/>
    @vite('resources/scss/main.scss')
    @vite('resources/scss/header.scss')
    @vite('resources/scss/footer.scss')
    @vite('resources/scss/home.scss')
    @vite('resources/scss/filter.scss')
    @vite('resources/scss/basket.scss')
    @vite('resources/scss/profile.scss')
    @vite('resources/scss/products.scss')
    @vite('resources/scss/range.scss')
    @vite('resources/scss/brand.scss')


    <title>@yield('title')</title>
</head>
<body class="" id="body">
@include('components/header')
@yield('content')
<div class="modal_wrapper">
    @include('components/modal/basket')
    @include('components/modal/filter')
</div>
@include('components/footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{asset("slick/slick.min.js")}}"></script>
<script type="text/javascript">

</script>
<script src="{{asset('js/slider.js')}}"></script>
<script src="{{asset('js/modal.js')}}"></script>
<script src="{{asset('js/slider_prod.js')}}"></script>
<script src="{{asset('js/search.js')}}"></script>
</body>

</html>
