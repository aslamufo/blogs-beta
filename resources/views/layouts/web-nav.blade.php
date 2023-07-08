<main>
    <div class="d-flex p-2 item-align-center justify-items-center" style="background-color: rgb(1, 0, 87)">
        <marquee class="text-white fs-6 fw-bold" behavior="" direction=""><i class="bi bi-exclamation-triangle-fill text-warning"></i> This app is currently under beta development. Please reach out to us at mail@promptflow.dev for any query.</marquee>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            
            <div class="me-lg-5 me-xl-5 me-md-5" id="">
                <ul class="navbar-nav ms-auto mb-lg-0 fs-6">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link btn-sm btn btn-warning fw-bold">Account</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="nav-link btn-sm btn btn-warning fw-bold">Login</a>
                    </li>
                    @endif
                    @endauth
                </ul>
            </div>
            
            <a class="navbar-brand" href="/"><img src="images/logo.png" width="150px"></a>
    
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                {{-- <div class=" d-flex flex-wrap flex-row flex-lg-row-reverse"></div> --}}
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto fs-6 fw-bold my-2 mb-lg-0">
                    {{-- <div class="pe-2 px-lg-2">Home</div>
                    <div class="p-2">Company</div>
                    <div class="p-2">Products</div>
                    <div class="p-2">Docs</div>
                    <div class="p-2">Contact</div> --}}
                    {{-- <div class="">Hello</div>
                    <div class="">Hello</div>
                    <div class="">Hello</div>
                    <div class="">Hello</div> --}}
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-black">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-black">Product</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-black">Company</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-black">Docs</a>
                    </li>
                    
                    {{-- <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link text-black">Contact</a>
                    </li> --}}
                </ul>
            </div>
            
        </div>
    </nav>
</main>