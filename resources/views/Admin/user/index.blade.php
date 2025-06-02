@extends('Admin.layout.app')
@push('style')
    <script src="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css"></script>

@endpush

@section('content')
    <!-- Start Main Content Area -->
    <div class="container-fluid">
        <div class="main-content-container overflow-hidden">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                <h3 class="mb-0">Transaction</h3>

                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb align-items-center mb-0 lh-1">
                        <li class="breadcrumb-item">
                            <a href="#" class="d-flex align-items-center text-decoration-none">
                                <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                                <span class="text-secondary fw-medium hover">Dashboard</span>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <span class="fw-medium">Finance</span>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <span class="fw-medium">Transaction</span>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-0">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-4">
                        <div class="mb-3">
                            <label for="entriesSelect" class="form-label">Show entries:</label>
                            <select id="entriesSelect" class="form-select w-auto d-inline-block">
                                <option value="3" selected>3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="ri-add-line d-none d-sm-inline-block"></i>
                                <span>Add Transaction</span>
                            </button>
                            <form class="position-relative table-src-form me-0" onsubmit="return false;">
                                <input type="text" class="form-control rounded-2" placeholder="Search here...." id="searchInput">
                                <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y text-secondary">search</i>
                            </form>

                            <select class="form-select rounded-2 month-select form-control w-135 bg-border-color border-color bg-transparent" aria-label="Default select example">
                                <option selected=""> 30 days</option>
                                <option value="1"> 90 days</option>
                                <option value="1"> 1 year</option>
                            </select>
                        </div>
                    </div>

                    <div class="default-table-area style-two transaction-history-large">
                        <div class="table-responsive">
                            <table id="UserTable" class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                </div>
                                                <span class="ms-1"><span class="fs-12 fw-bold"></span> ID</span>
                                            </div>
                                        </th>
                                        <th scope="col">Nia</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">{{$user->id}}</span>
                                            </div>
                                        </td>
                                        <td>{{$user->nia}}</td>
                                        <td>{{$user->name}}</td>
                                        <td class="text-primary">{{$user->email}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-success bg-opacity-10 text-success px-2 py-1 rounded-1">{{$user->status}}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                    <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                </button>
                                                <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                    <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                </button>
                                                <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                    <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap p-4">
                            <span class="fs-12 fw-medium">Showing 10 of 30 Results</span>

                            <nav aria-label="Page navigation">
                                <ul class="pagination mb-0 justify-content-center"></ul>
                            </nav>

{{--                            <nav aria-label="Page navigation example">--}}
{{--                                <ul class="pagination mb-0 justify-content-center">--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a class="page-link icon" href="transaction.html" aria-label="Previous">--}}
{{--                                            <i class="material-symbols-outlined">keyboard_arrow_left</i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="page-item"><a class="page-link active" href="transaction.html">1</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="transaction.html">2</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="transaction.html">3</a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="transaction.html">4</a></li>--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a class="page-link icon" href="transaction.html" aria-label="Next">--}}
{{--                                            <i class="material-symbols-outlined">keyboard_arrow_right</i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                                <ul class="pagination mb-0 justify-content-center"></ul>--}}
{{--                            </nav>--}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Card Add -->
            @include('Admin.user.create')
        </div>

        <div class="flex-grow-1"></div>

    </div>
    <!-- Start Main Content Area -->
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.semanticui.min.js"></script>

@endpush
