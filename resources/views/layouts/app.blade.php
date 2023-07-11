<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @livewireStyles
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="css/sidebar.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        footer {
            margin-top: auto;
        }

        .navbar-toggler:focus,
        .navbar-toggler:active,
        .navbar-toggler-icon:focus {
            outline: none;
            box-shadow: none;
        }

        .accordion-header:focus,
        .accordion-header:active,
        .accordion-button:focus {
            outline: none;
            box-shadow: none;
        }

        .accordion-button {
            background-color: white !important;
            color: black !important;
        }
    </style>
</head>

<body class="bg-light">


    <header
        class="navbar navbar-expand-md navbar-dark sticky-top bg-dark flex-md-nowrap py-2 px-2 px-md-4 px-lg-4 shadow">
        <a class="navbar-brand bg-dark" href="/">
            <img src="/images/logo.png" width="150px">
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>


    <div class="container-fluid ">
        @include('layouts.app-nav')

        @yield('content')

        @include('layouts.app-footer')

        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script>
            window.jQuery || document.write('<script src="/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script>
        <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
            integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
        </script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script> --}}
        <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
