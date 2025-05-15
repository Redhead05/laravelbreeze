@extends('Admin.layout.app')

@section('content')
    <!-- Start Main Content Area -->
    <div class="container-fluid">
            <div class="main-content-container overflow-hidden">
{{--                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">--}}
{{--                    <h3 class="mb-0">Transaction</h3>--}}

{{--                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">--}}
{{--                        <ol class="breadcrumb align-items-center mb-0 lh-1">--}}
{{--                            <li class="breadcrumb-item">--}}
{{--                                <a href="#" class="d-flex align-items-center text-decoration-none">--}}
{{--                                    <i class="ri-home-4-line fs-18 text-primary me-1"></i>--}}
{{--                                    <span class="text-secondary fw-medium hover">Dashboard</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb-item active" aria-current="page">--}}
{{--                                <span class="fw-medium">Finance</span>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb-item active" aria-current="page">--}}
{{--                                <span class="fw-medium">Transaction</span>--}}
{{--                            </li>--}}
{{--                        </ol>--}}
{{--                    </nav>--}}
{{--                </div>--}}

                <div class="card bg-white border-0 rounded-3 mb-4">
                    <div class="card-body p-0">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-4">
                            <h3 class="mb-0">Transaction History</h3>
                            <div class="d-flex flex-wrap gap-2">
                                <button class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="ri-add-line d-none d-sm-inline-block"></i>
                                    <span>Add Transaction</span>
                                </button>
                                <select class="form-select month-select form-control w-135 bg-border-color border-color bg-transparent" aria-label="Default select example">
                                    <option selected="">Last 30 days</option>
                                    <option value="1">Last 90 days</option>
                                    <option value="1">Last 1 year</option>
                                </select>
                            </div>
                        </div>

                        <div class="default-table-area style-two transaction-history-large">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                </div>
                                                <span class="ms-1"><span class="fs-12 fw-bold">Transaction</span> ID</span>
                                            </div>
                                        </th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">#TID0015</span>
                                            </div>
                                        </td>
                                        <td>2024-10-01</td>
                                        <td>Payment from Client</td>
                                        <td class="text-primary">$5,000</td>
                                        <td>Income</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-success bg-opacity-10 text-success px-2 py-1 rounded-1">Completed</span>
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
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">#TID0099</span>
                                            </div>
                                        </td>
                                        <td>2024-09-28</td>
                                        <td>Office Supplies</td>
                                        <td class="text-primary">$10,000</td>
                                        <td>Expense</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-warning bg-opacity-10 text-warning px-2 py-1 rounded-1">Pending</span>
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
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">#TID0145</span>
                                            </div>
                                        </td>
                                        <td>2024-09-25</td>
                                        <td>Website Maintenance</td>
                                        <td class="text-primary">$35,000</td>
                                        <td>Expense</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-warning bg-opacity-10 text-warning px-2 py-1 rounded-1">Pending</span>
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
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">#TID0247</span>
                                            </div>
                                        </td>
                                        <td>2024-09-22</td>
                                        <td>Payment from Client</td>
                                        <td class="text-primary">$2,000</td>
                                        <td>Income</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-success bg-opacity-10 text-success px-2 py-1 rounded-1">Completed</span>
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
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">#TID0299</span>
                                            </div>
                                        </td>
                                        <td>2024-09-20</td>
                                        <td>Advertising Campaign</td>
                                        <td class="text-primary">$15,500</td>
                                        <td>Expense</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-success bg-opacity-10 text-success px-2 py-1 rounded-1">Completed</span>
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
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">#TID0312</span>
                                            </div>
                                        </td>
                                        <td>2024-09-12</td>
                                        <td>Office Renovation</td>
                                        <td class="text-primary">$4,000</td>
                                        <td>Expense</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-success bg-opacity-10 text-success px-2 py-1 rounded-1">Completed</span>
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
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">#TID0320</span>
                                            </div>
                                        </td>
                                        <td>2024-09-10</td>
                                        <td>Payment from Client</td>
                                        <td class="text-primary">$3,000</td>
                                        <td>Income</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-success bg-opacity-10 text-success px-2 py-1 rounded-1">Completed</span>
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
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">#TID0351</span>
                                            </div>
                                        </td>
                                        <td>2024-09-08</td>
                                        <td>Marketing Campaign</td>
                                        <td class="text-primary">$1,500</td>
                                        <td>Expense</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-warning bg-opacity-10 text-warning px-2 py-1 rounded-1">Pending</span>
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
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">#TID0360</span>
                                            </div>
                                        </td>
                                        <td>2024-09-05</td>
                                        <td>Payment from Client</td>
                                        <td class="text-primary">$6,500</td>
                                        <td>Income</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-success bg-opacity-10 text-success px-2 py-1 rounded-1">Completed</span>
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
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                </div>
                                                <span class="ms-1 text-secondary">#TID0365</span>
                                            </div>
                                        </td>
                                        <td>2024-09-01</td>
                                        <td>Software Subscription</td>
                                        <td class="text-primary">$400</td>
                                        <td>Expense</td>
                                        <td>
                                            <span class="d-inline-block fs-12 bg-success bg-opacity-10 text-success px-2 py-1 rounded-1">Completed</span>
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
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap p-4">
                                <span class="fs-12 fw-medium">Showing 10 of 30 Results</span>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination mb-0 justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link icon" href="transaction.html" aria-label="Previous">
                                                <i class="material-symbols-outlined">keyboard_arrow_left</i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link active" href="transaction.html">1</a></li>
                                        <li class="page-item"><a class="page-link" href="transaction.html">2</a></li>
                                        <li class="page-item"><a class="page-link" href="transaction.html">3</a></li>
                                        <li class="page-item"><a class="page-link" href="transaction.html">4</a></li>
                                        <li class="page-item">
                                            <a class="page-link icon" href="transaction.html" aria-label="Next">
                                                <i class="material-symbols-outlined">keyboard_arrow_right</i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Card Add -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="max-width: 1120px;">
                        <div class="modal-content p-4 p-md-5">
                            <div class="modal-header p-0 border-0">
                                <h3 class="mb-0">Add A New Transaction</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-0 pt-4">
                                <form action="">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="label text-secondary">Transaction ID</label>
                                                <input type="text" class="form-control h-55" placeholder="Enter name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="label text-secondary">Date</label>
                                                <input type="date" class="form-control h-55">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="label text-secondary">Description</label>
                                                <input type="text" class="form-control h-55" placeholder="Enter Transaction Description">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="label text-secondary">Amount</label>
                                                <input type="number" class="form-control h-55" placeholder="Enter Amount">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="label text-secondary">Type</label>
                                                <select class="form-select form-control h-55" aria-label="Default select example">
                                                    <option selected>Select Type: Income/Expense</option>
                                                    <option value="1">Income</option>
                                                    <option value="2">Expense</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="label text-secondary">Status</label>
                                                <select class="form-select form-control h-55" aria-label="Default select example">
                                                    <option selected>Select Type: Completed/Pending</option>
                                                    <option value="1">Completed</option>
                                                    <option value="2">Pending</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="label text-secondary">Payment Method</label>
                                                <input type="text" class="form-control h-55" placeholder="Enter Payment Method: Bank Transfer, Cash, Card">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <label class="label text-secondary">Action</label>
                                                <select class="form-select form-control h-55" aria-label="Default select example">
                                                    <option selected>Select Type: Action</option>
                                                    <option value="1">View</option>
                                                    <option value="2">Edit</option>
                                                    <option value="2">Delete</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="mb-4">
                                                <label class="label text-secondary">Notes <span class="text-body fw-normal">[Optional Notes]</span></label>
                                                <textarea rows="5" class="form-control" placeholder="Write any additional note here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer border-0 p-0 gap-2">
                                <button type="button" class="btn btn-danger text-white px-3 m-0" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary hover-bg px-3 m-0">
                                    <i class="ri-add-line"></i>
                                    <span>Add A Transaction</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex-grow-1"></div>

    </div>
    <!-- Start Main Content Area -->
@endsection
