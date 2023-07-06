@extends('layouts.app')

@section('content')
    <style>
        td {
            /* text-overflow: ellipsis; */
            overflow: hidden;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Dashboard') }}</h3>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- {{ __('You are logged in!') }} -->
                        <div class="row">
                            <div class="col-md-10 col-sm-3 col-6">
                                <h3>My Blogs</h3>
                            </div>
                            <div class="col-md-2 align-items-center col-sm-3 col-6">
                                <a href="/create-blog"><button>Create a new Blogs</button></a>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table-responsive table table-striped-columns table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col" colspan="1">#Id</th>
                                        <th scope="col" colspan="4">Heading</th>
                                        <th scope="col" colspan="2">Date</th>
                                        <!-- <th scope="col" colspan="2">Last updated date</th> -->
                                        <th scope="col" colspan="1">views</th>
                                        <th scope="col">Settings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <th colspan="1"> {{ $blog['id'] }}</th>
                                            <th colspan="4">{{ $blog['heading'] }}</th>
                                            <td colspan="2">{{ $blog['created_at']->diffForHumans() }}</td>
                                            <!-- <td colspan="2">{{ $blog->updated_at }}</td> -->
                                            <td colspan="1">{{ $blog['views'] }}</td>
                                            <td>
                                                <a href="/view/{{ $blog['id'] }}" style="color: green;">View</a>
                                                &nbsp; <a href="/edit/{{ $blog['id'] }}" style="color: blue;">Edit</a>
                                                &nbsp; <a href="/delete/{{ $blog['id'] }}" style="color: red;">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            </table>
                            {{ $blogs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
