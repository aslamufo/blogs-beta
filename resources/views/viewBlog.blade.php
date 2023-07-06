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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .header-laravel {
            color: red;
            font-size: 50px;
        }

        .card-columns {
            column-count: 3;
        }

        .card {
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#!"><img src="/images/logo.png" width="150px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">Company</a>
                    </li>
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link">Account</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="nav-link">Login</a>
                    </li>


                    @endauth
            </div>
            @endif

            </ul>
        </div>
        </div>
    </nav>
    <!-- Page header with logo and tagline-->
    @foreach ($blogs as $blog)
    <header class="py-3 bg-light border-bottom mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 col-sm-12 col-md-8">
                    <h1 class="fw-bolder">{{ $blog['heading'] }}</h1>
                    <p class="card-text"><small class="text-muted">
                            {{ $blog['created_at']->diffForHumans() }}</small>
                    </p>
                    <p class="lead mb-0">
                        <?php echo $blog['content']?>
                        
                    </p>
                </div>
                <div class="col-lg-4 col-xl-4 col-12 col-sm-12 col-md-4">
                <p class="fs-3 fw-bold">You might Also like</p>
                    @livewire('blog-sidebar')
                </div>
            </div>

        </div>
    </header>
    @endforeach
    <!-- Page content-->



    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website {{date('Y')}}</p>
            <div class="align-items-center text-center" style="color: white;font-size:10px">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    @livewireScripts
</body>

</html>