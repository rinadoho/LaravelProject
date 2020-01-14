<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
        

        <title>@yield('title', 'Laravel')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
           html, body {
            color: black;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0;
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
       
        <div class="lorgeDiv">
            @yield('content')
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </body>
</html>
