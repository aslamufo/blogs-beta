<div>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async>
    </script>

    <div class="container">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-9 mb-5">
                <!-- Featured blog post-->
                <!-- <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg"
                            alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">January 1, 2022</div>
                        <h2 class="card-title">Featured Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis
                            aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi
                            vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a class="btn btn-primary" href="#!">Read more →</a>
                    </div>
                </div> -->
                <!-- Nested row for non-featured blog posts-->
                {{-- <div class="my-5">{{ $blogs->links() }}</div> --}}
                <div class="row" data-masonry='{"percentPosition": true }'>

                    <!-- Blog post-->
                    @foreach ($blogs as $blog)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3 mb-sm-0">
                            <div class="card-column mb-5">
                                <img class="card-img-top" src="/images/{{ $blog['img_url'] }}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $blog['heading'] }}</h5>
                                    {{-- <p class="card-text">{{ $blog['content'] }} </p> --}}
                                    <p class="card-text"><small class="text-muted">
                                            {{ $blog['created_at']->diffForHumans() }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                {{ $blogs->links() }}

                <!-- <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                    </ul>
                </nav> -->

            </div>
            <!-- Pagination-->


            <!-- Side widgets-->
            <div class="col-lg-3">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>

                    <div class="card-body">
                        <p class="">Searched Term: {{ $term }}</p>
                        <div class="input-group">
                            <input class="form-control" wire:model="term" type="text"
                                placeholder="Enter search term..." />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">HTML</a></li>
                                    <li><a href="#!">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">JavaScript</a></li>
                                    <li><a href="#!">CSS</a></li>
                                    <li><a href="#!">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to
                        use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
</div>
