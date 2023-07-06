@extends('layouts.app')
@section('content')
<script src="https://cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script> -->
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
                            <div class="col-sm-6 col-lg-8 col-md-6">
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
                                        <!-- <textarea name="editor1"></textarea> -->

                                        <textarea name="content"
                                            placeholder="Enter your blog content"></textarea>
                                            <script>
                                            CKEDITOR.replace('content');
                                        </script>

                                        <!-- <div id="editor">This is some sample content.</div>
                                        <script>
                                            ClassicEditor
                                                .create(document.querySelector('#editor'))
                                                .then(editor => {
                                                    console.log(editor);
                                                })
                                                .catch(error => {
                                                    console.error(error);
                                                });
                                        </script> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-md-6">
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