<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>DTEDI</h1>
    </header>
    <div>
        @yield('content')
    </div>
    <footer>
        <p>© 2024 Muhammad Al Fayyadh</p>
    </footer>
</body>
</html> -->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <style>
            #footer{
                width: 100%;
                height: auto;
                padding-top: 20px;
                padding-bottom: 20px;
                background-color: gray;
                color: white;
                text-align: center;
            }
        </style>
    </head>

    <body>
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>

        @yield('content')

        <div id="footer">
            <h1>INI FOOTER</h1>
        </div>

        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>