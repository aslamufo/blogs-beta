@extends('layouts.app')

@section('content')
    {{-- <div class="d-flex p-2 item-align-center justify-items-center" style="background-color: rgb(1, 0, 87)">
        <marquee class="text-white fs-6 fw-bold" behavior="" direction=""><i
                class="bi bi-exclamation-triangle-fill text-warning"></i> This app is currently under beta development.
            Please reach out to us at mail@promptflow.dev for any query.</marquee>
    </div> --}}

    {{-- <div class="px-2"> --}}
    <main class="col-md-9 ms-sm-auto col-lg-10 py-4 px-md-4">
        <div class="d-flex flex-xl-row flex-column ">
            <div class="my-2 mx-md-2 p-md-4 bg-white rounded shadow-sm flex-grow-1">
                <div class="d-flex flex-column">
                    <h3 class="fs-4 fw-bold m-2">Project statistics</h3>
                    <div class="d-flex flex-xl-row flex-column">
                        <div class="m-2 p-2 d-flex flex-column bg-light flex-fill">
                            <h3 class="fs-3 fw-bold mb-3">12</h3>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="me-3 text-uppercase fw-bold fs-6 text-secondary">completed</p>
                                <p class="me-3 ">d</p>
                            </div>
                        </div>
                        <div class="m-2 p-2 d-flex flex-column  bg-light flex-fill">
                            <h3 class="fs-3 fw-bold mb-3">12</h3>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="me-3 text-uppercase fw-bold fs-6 text-secondary">completed</p>
                                <p class="me-3">d</p>
                            </div>
                        </div>
                        <div class="m-2 p-2 d-flex flex-column  bg-light flex-fill">
                            <h3 class="fs-3 fw-bold mb-3">12</h3>
                            <div class="d-flex flex-row justify-content-between">
                                <p class="me-3 text-uppercase fw-bold fs-6 text-secondary">completed</p>
                                <p class="me-3">d</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="my-2 mx-md-2 p-md-4 bg-white rounded shadow-sm">
                <div class="d-flex flex-column pb-2">
                    <h3 class="fs-4 fw-bold m-2">Profile Status</h3>
                    <div class="d-flex flex-row align-items-center my-2">
                        <img src="/images/profile.png" class="rounded-circle mx-2 mx-md-3">
                        <p class="fs-5 my-1 fw-bold">Aslam Ummer</p>
                        <p class="fs-6 my-1 bg-success py-1 px-3 rounded-pill shadow text-white ms-auto ms-md-5 me-2">
                            available
                        </p>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between my-2 px-4">
                        <p class="fs-6 my-2">L2 - Project Mananger </p>
                        <i class="bi bi-pen"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-2 mx-md-2 p-md-4 bg-white rounded shadow-sm flex-grow-1">
            <div class="d-flex flex-column">
                <h3 class="fs-4 fw-bold m-2">My Tasks</h3>
                <div class="d-flex flex-row m-2 fs-6">
                    <p class="me-3 fw-bold text-underline"><i class="bi bi-view-list me-2"></i>By Project</p>
                    <p class="me-3 text-secondary"><i class="bi bi-kanban me-2"></i>Board</p>
                    <p class="text-secondary"><i class="bi bi-list-task me-2"></i>All Tasks</p>
                </div>
                <div class="d-flex flex-row mx-2 my-1 fs-6" style="overflow-x:scroll">
                    <div class="accordion flex-grow-1 " id="accordionPanelsStayOpenExample">
                        <div class="accordion-item flex-grow-1">
                            <h2 class="accordion-header flex-grow-1">
                                <button class="accordion-button fw-bold fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    <h4 class="fs-5">Marketing CRM</h4>

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                                <div class="accordion-body p-0 m-0">

                                    <table class="table table-hover table-bordered table-responsive caption-top">
                                        <caption class="ms-2 text-danger fs-6">3/7 tasks overdue</caption>
                                        <thead class="">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Due</th>
                                                <th>Piority</th>
                                                <th>Assignee</th>
                                                <th>Tags</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1</td>
                                                <td>Conduct website audit</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                            <tr>
                                                <td>#2</td>
                                                <td>Test website funtionality</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                            <tr>
                                                <td>#3</td>
                                                <td>Build task sheet page</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                            <tr>
                                                <td>#4</td>
                                                <td>Conduct website audit</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item flex-grow-1">
                            <h2 class="accordion-header flex-grow-1">
                                <button class="accordion-button fw-bold fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    <h4 class="fs-5">Marketing CRM</h4>

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                <div class="accordion-body p-0 m-0">

                                    <table class="table table-hover table-bordered table-responsive caption-top">
                                        <caption class="ms-2 text-danger fs-6">3/7 tasks overdue</caption>
                                        <thead class="">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Due</th>
                                                <th>Piority</th>
                                                <th>Assignee</th>
                                                <th>Tags</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1</td>
                                                <td>Conduct website audit</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                            <tr>
                                                <td>#2</td>
                                                <td>Test website funtionality</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                            <tr>
                                                <td>#3</td>
                                                <td>Build task sheet page</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                            <tr>
                                                <td>#4</td>
                                                <td>Conduct website audit</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item flex-grow-1">
                            <h2 class="accordion-header flex-grow-1">
                                <button class="accordion-button fw-bold fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOneThree" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOneThree">
                                    <h4 class="fs-5">Marketing CRM</h4>

                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOneThree" class="accordion-collapse collapse ">
                                <div class="accordion-body p-0 m-0">

                                    <table class="table table-hover table-bordered table-responsive caption-top">
                                        <caption class="ms-2 text-danger fs-6">3/7 tasks overdue</caption>
                                        <thead class="">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Due</th>
                                                <th>Piority</th>
                                                <th>Assignee</th>
                                                <th>Tags</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#1</td>
                                                <td>Conduct website audit</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                            <tr>
                                                <td>#2</td>
                                                <td>Test website funtionality</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                            <tr>
                                                <td>#3</td>
                                                <td>Build task sheet page</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                            <tr>
                                                <td>#4</td>
                                                <td>Conduct website audit</td>
                                                <td>Not started</td>
                                                <td>April-24-2023</td>
                                                <td>Medium</td>
                                                <td>Avinash</td>
                                                <td>Website</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    This week
                </button>
            </div>
        </div>



        <div class="">
            <div class="px-2 d-flex flex-row justify-content-between align-items-center ">

                <p class="fs-4">My Blogs</p>
                <p class="fw-bold bg-warning p-2 rounded text-decoration-none"> New Blogs </p>



            </div>

            <div class="">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif




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
                {{ $blogs->links() }}
            </div>
        </div>


    </main>
    {{-- </div> --}}
@endsection
