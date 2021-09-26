<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SISTEMA DE FERRETERIA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                background:url(https://st2.depositphotos.com/4329009/8235/v/600/depositphotos_82358908-stock-illustration-abstract-creative-concept-vector-background.jpg) no-repeat;
                background-size: cover;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 900;
                height: 50vh;
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
                font-size: 100px;
                font-style: oblique;
            }

            .links > a {
                background-color: rgb(165, 165, 165);
                color: black;
                padding: 0 65px;
                font-size: 50px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }

            .m-b-md {
                margin-bottom: 70px;
            }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    SISTEMA FERRTERIA
                </div>

                <div class="links btn btn-warning">
                    @if (Route::has('home'))
                        <a href="{{ url('/products') }}">Acceder</a>
                    @endif
                </div>
            </div>
        </div>
    </body>

</html>
