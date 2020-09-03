<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <title>MyChat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #2d3436;
                background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);
                color: #ffffff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
                font-size: 12rem;
                user-select: none
            }

            .title:hover {
                color: lightblue;
            }

            .links > a {
                color: grey;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links >a:first-child:hover {
                color: lightblue;
            }
            .links >a:last-child:hover {
                color: red;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

             .para {
                 font-size: 35px;
                 user-select: none;
                 color: lightskyblue;
                 text-shadow: 2px 2px blue;
             }


             

             .button > a{
                border: 0.1em solid lightskyblue;
                border-radius: 0.9em;
                color: lightskyblue;
                padding: 0 25px;
                font-size: 30px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
             }

             .button > a:hover {
                border: 0.2em solid lightskyblue;
                border-radius: 0.9em;
                font-size: 33px;
                transition: 0.5s;
             }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div     class="title m-b-md">
                    MyChat
                </div>

                <p class="para">Welcome to MyChat! Register, and meet new people right now!</p>

                <div class="button">
                    <a href="{{ route('login') }}">MEET NOW</a>
                </div>
                
               
            </div>
        </div>
    </body>
</html>
