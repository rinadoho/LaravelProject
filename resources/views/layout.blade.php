<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        

        <title>@yield('title', 'Laravel')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            /* .lorgeDiv{padding:2px;} */
            
            input[type="checkbox"],
            input[type="radio"] {
            position: absolute;
            visibility: hidden;
            }

            .settings-box-element {
            z-index: 10;
            }

            .buttons-wrapper {
            position: fixed;
            top: 230px;
            right: -200px;
            width: 200px;
            height: 240px;
            background: #fff;
            opacity: 0.5;
            }

            .settings-btn + label {
            position: fixed;
            top: 230px;
            left: 0;
            display: block;
            width: 35px;
            text-align: center;
            cursor: pointer;
            }

            .settings-btn:checked + label {
            left: 200px;
            }

            .settings-btn:checked ~ .buttons-wrapper {
            left: 0;
            }

            .layout-buttons {
            display: block;
            width: 150px;
            padding: 10px 0;
            text-align: center;
            border: 2px solid black;
            box-sizing: border-box;
            font-size: 0.875em;
            cursor: pointer;
            }

            .settings-btn:checked ~ .layout-buttons {
            left: 30px;
            }

            input[type="radio"]:checked + label {
            background: #e83737;
            color: #fff;
            opacity: 0.5;
            border-color: #e83737;
            }

            .default + label {
            position: fixed;
            top: 240px;
            left: -150px;
            }

            .dark-layout + label {
            position: fixed;
            top: 285px;
            right: -150px;
            }

            .coffee1-layout + label {
            position: fixed;
            top: 330px;
            right: -150px;
            }

            .coffee2-layout + label {
            position: fixed;
            top: 375px;
            right: -150px;
            }

            .hide-show-content + label {
            position: fixed;
            top: 320px;
            right: -150px;
            }

            .dark-layout:checked ~ .lorgeDiv {
            background: url("/images/desk9.jpg");
            background-repeat: no-repeat;
            height:100%;   
            background-size: cover;
            background-position: left;     
            }

            .default:checked ~ .lorgeDiv {
            background: #f2f2f2;
            height:100%;
            }

            .coffee1-layout:checked ~ .lorgeDiv {
            background: url("/images/desk6.jpg");
            background-repeat: no-repeat;
            height:100%;   
            background-size: cover;
            background-position: center;
            }

            .coffee2-layout:checked ~ .lorgeDiv {
            background: url("/images/desk7.jpg");
            background-repeat: no-repeat;
            height:130%;
            background-size: cover;
            background-position: center;
            }

            .sections{
                margin-top:40px;
            }

            .ptitle{
                height:70px;
                width:290px;
                font-size:24px;
                font-weight:900;
                padding:10px;
                margin:20px;
                border:none;
            }

            .spacer{padding:4%;}

            .options{
                margin-top:20px;
                margin-left:9%;
            }

            .btn-secondary{
                background-color:#d9d9d9;
                color:gray;
                border-bottom: 2px solid;
            }

            .bigDiv{
                max-width:50%;
                background-color:white;
                margin-left:25%;
                display:block;
                position:relative;
                box-shadow: 0 36px 35px rgba(50,50,93,.1), 0 17px 15px rgba(0,0,0,.07);
            }
            .bigDiv::after {
                position: absolute;
                top: 0;
                right: 0;
                width: 0;
                height: 0;
                border-width: 0 2rem 2rem 0;
                border-style: solid;
                border-radius: 0;
                border-color: #fff #f2f2f2 #fff #fff;
                box-shadow: -3px 4px 3px 0 rgba(0,0,0,.11);
                content: '';
                z-index: 10;
            }

            .bottom{
                width:100%;
                position:fixed;
                bottom:0;
                height:80px;
                padding:10px;
                border-top:2px solid #ededed;
                background-color:white;
            }

            .pull-right {
                position: relative;
                float:right;
                margin-right:20%;
                margin-top:-25px;
            }

            .pull-right button{margin-right:10px;}

            .timer{
                font-weight:800;
                margin-left:25%;
                margin-top:15px;
            }

            .cog{
               float:right;
               margin-right:25%;
               margin-top: 10px;
            }

            .icon{
                margin-left:25%;
            }

            .top{
                max-width:100%;
                padding:20px;
                border-bottom: 2px solid #ededed;
                margin-bottom: 30px;
                background-color:white;
            }

            .full-height {
                margin-top: 10%;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .is-complete {
                text-decoration: line-through;
            }

            .notification{
                color: white;
                padding-top:20px;
                background-color: red;
                height: 100px;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
    <input id="settings-btn" type="checkbox" class="settings-btn">
    <label for="settings-btn" class="settings-box-element"><img src="/images/theme-edit.png" width="30" height="35"></label>
    <!-- the white box that contains the buttons -->
    <div class="buttons-wrapper settings-box-element"></div>

    <!-- background styles -->

    <!-- light background (#eaeaea) -->
    <input id="default" class="default" type="radio" name="layout" checked>
    <label for="default" class="layout-buttons settings-box-element">Default</label>
    <!-- dark background (#494949) -->
    <input id="dark-layout" class="dark-layout" type="radio" name="layout">
    <label for="dark-layout" class="layout-buttons settings-box-element">Dark</label>
    <!-- image background (you can use any image of your choice) -->
    <input id="coffee1-layout" class="coffee1-layout" type="radio" name="layout">
    <label for="coffee1-layout" class="layout-buttons settings-box-element">Coffee1</label>
    <!-- pattern background (you can use any pattern of your choice) -->
    <input id="coffee2-layout" class="coffee2-layout" type="radio" name="layout">
    <label for="coffee2-layout" class="layout-buttons settings-box-element">Coffee2</label>

  <!-- // background styles -->

        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    @yield('front-title')
                </div>

                <div class="links">
                    <a href="/">Home</a>
                    <a href="/contact">Contact us</a>
                    <a href="/about">About us</a>
                    <a href="/personas">Personas</a>
                    <a href="https://blog.laravel.com">Blog</a>
                </div>
            </div>
        </div> -->
        <div class="lorgeDiv">
            @yield('content')
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </body>
</html>
