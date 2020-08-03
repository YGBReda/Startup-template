<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DZStartup</title>

 
    <link href="{{ url('/assets/css/uikit.min.css') }}" rel="stylesheet">
    <link href="{{ url('/assets/css/style.css') }}" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!--font-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

    <script src="{{ url('/assets/js/uikit.min.js') }}"></script>
    <script src="{{ url('/assets/js/uikit-icons.min.js') }}"></script>




</head>
<body>
<div id="wrapper">
        <nav class="uk-navbar-container uk-container uk-container-smal" uk-navbar id="menu">
            <div class="uk-navbar-left">
                <button class="uk-button menu-top-btn" type="button" uk-toggle="target: #offcanvas-nav"><i class="fa fa-bars"></i></button>
               <a class="uk-navbar-item uk-logo" href="#"><img src="{{asset('images/logo.png')}}"></a>
               <ul class="uk-navbar-nav menu-top-nav">
                 <li class="uk-active"><a href="#">Home</a></li>

                 <li class="uk-active"><a href="#">About</a></li>
                 <li class="uk-active"><a href="#">Services</a></li>
                 <li class="uk-active">
                    <a href="#">Pages<span class="uk-margin-small-left" uk-icon="chevron-down"></span></a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Sub-Page1</a></li>
                            <li class="uk-active"><a href="#">Sub-Page2</a></li>
                            <li class="uk-active"><a href="#">Sub-Page3</a></li>
                            <li class="uk-active"><a href="#">Sub-Page4</a></li>
                        </ul>
                    </div>
                </li>
                <li class="uk-active"><a href="#">Blog</a></li>
                <li class="uk-active"><a href="#">Contact</a></li>

            </ul>

        </div>
        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">
                <button class="uk-button uk-button-default QUOTES">GET QUOTES</button>
            </ul>
        </div>
    </nav>
<div id="offcanvas-nav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>

        <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="#">Home</a></li>
            <li class="uk-active"><a href="#">About</a></li>
            <li class="uk-active"><a href="#">Services</a></li>
            <li class="uk-parent uk-active">
                <a class="uk-active" href="#">Pages</a>
                <ul class="uk-nav-sub">
                    <li class="uk-active"><a href="#">Sub-Page1</a></li>
                    <li class="uk-active"><a href="#">Sub-Page2</a></li>
                    <li class="uk-active"><a href="#">Sub-Page3</a></li>
                     <li class="uk-active"><a href="#">Sub-Page4</a></li>
                </ul>
            </li>
             <li class="uk-active"><a href="#">Blog</a></li>
            <li class="uk-active"><a href="#">Contact</a></li>

        </ul>

    </div>
</div>


    <div class="main-page">
        @yield('content')
    </div>


</div>   

</body>
</html>