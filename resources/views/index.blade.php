@extends('layouts.web')

@section('content')

<main class=" border-bottom mb-4">
    
    <div class="container">
        <div class="row py-3 d-flex align-items-center justify-content-center">
            <div class="col-12 col-lg-6">
                <img src="images/logo.png" width="300px">
                <div class="fw-light fs-3 my-2">Revolutionizing IT with<br>
                    <span class="text-uppercase fw-bold fs-2">AI-powered automation</span></div>
                <p class="lead mb-3">A platform to generates code and designs based on prompts, saving time and cost for businesses and empowering freelancers and remote workers.</p>
                <div class="col mb-5">
                <button class="d-inline-flex btn btn-warning btn-small mb-3 fw-bold align-items-center justify-content-center"> Sign-up to Beta <i class="ms-2 bi bi-arrow-up-right-square fs-5"></i> </button>
                <button class="d-inline-flex btn btn-dark btn-small mb-3 align-items-center justify-content-center">View Docs <i class="ms-2 bi bi-file-earmark-text fs-5"></i></button>
                </div>
                
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center">
                <img src="images/header-img.png" alt="" style="width: 100%; max-width: 500px; border-radius: 10px">
            </div>
        </div>
    </div>
</main>
@livewire('blog')

@endsection