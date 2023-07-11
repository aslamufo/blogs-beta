<div>
    <div class="row">
        @foreach ($blogs as $blog)
            <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 mb-1 mb-sm-0">
                <a href="/view/{{ $blog['id'] }}" class="text-decoration-none text-dark">
                    <div class="card-column mb-3">
                        <img class="card-img-top" src="/images/{{ $blog['img_url'] }}" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title fs-sm-6 mt-1 ">{{ $blog['heading'] }}</h6>
                            <p class="card-text"><small class="text-muted">
                                    {{ $blog['created_at']->diffForHumans() }}</small>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
