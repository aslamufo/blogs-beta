<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
    integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
</script>
<!-- <div class="row" data-masonry='{"percentPosition": true }'> -->

<!-- Blog post-->
<div class="row">
    @foreach ($blogs as $blog)
        <div class="col-6 mb-3 mb-sm-0">
            <div class="card-column mb-2">
                <img class="card-img-top" src="/images/{{ $blog['img_url'] }}" alt="Card image cap">
                <div class="card-body">
                    <h6 class="card-title fs-6">{{ $blog['heading'] }}</h6>
                    {{-- <p class="card-text">{{ $blog['content'] }} </p> --}}
                    <p class="card-text"><small class="text-muted">
                            {{ $blog['created_at']->diffForHumans() }}</small>
                    </p>
                </div>
            </div>
        </div>
    @endforeach
</div>



</div>
