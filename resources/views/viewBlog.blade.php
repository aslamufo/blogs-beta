@extends('layouts.web')
@section('content')
    @foreach ($blogs as $blog)
        <header class="py-3 bg-white border-bottom mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 col-sm-12 col-md-8">
                        <h1 class="fw-bolder fs-3">{{ $blog['heading'] }}</h1>
                        <img class="card-img-top" src="/images/{{ $blog['img_url'] }}" alt="Card image cap">
                        <p class="card-text"><small class="text-muted">
                                {{ $blog['created_at']->diffForHumans() }}</small>
                        </p>
                        <p class="lead mb-0 fs-4">
                            <?php echo $blog['content']; ?>

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
@endsection
