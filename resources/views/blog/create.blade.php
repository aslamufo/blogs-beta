@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Create a new Blog') }}</h3>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- {{ __('You are logged in!') }} -->
                        <form action="\store-blog" method="post" enctype="multipart/form-data">
                            <div class="row">

                                @csrf
                                <div class="col-8">
                                    <div class="form-group col">
                                        <label for="staticEmail" class="col-sm-6 col-form-label">Blog Heading</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="heading" value=""
                                                placeholder="Enter a catchy Heading for your blog">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-6 col-form-label">Blog Content</label>
                                        <div class="col-sm-10">
                                            <textarea name="content" cols="30" rows="10" class="form-control" placeholder="Enter your blog content"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-6 col-form-label">Blog Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="blog_img" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-6 col-form-label">Blog Author</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" name="author"
                                                value="{{ Auth::user()->name }}">
                                        </div>

                                    </div>
                                    <br>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-6 col-form-label">Blog Created</label>
                                        <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" name="created_time"
                                                value="{{ now() }}">
                                        </div>

                                    </div>

                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" name="submit" value="Create">

                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
