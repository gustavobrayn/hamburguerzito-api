<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}"> --}}
        <title>Burgerzito</title>
    </head>
    <body>
        <div class="container">
            @component('layouts.components.navbar')
            @endcomponent
            @yield('content')
        </div>
        {{-- <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> --}}
    </body>
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: 0;
            box-sizing: border-box;
        }

        html, body,  {
            height: 100%;
        }

        body {
            font-family: "Open Sans", sans-serif;
            -webkit-font-smooting: antialised !important;
            background: #ececec;
            height: 100vh;
        }

        ul {
            list-style: none;;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: flex-start
        }

    </style>
</html>
