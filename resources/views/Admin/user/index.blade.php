@extends('Admin.layout.app')
@push('style')
    <script src="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css"></script>

@endpush

@section('content')
    <!-- Start Main Content Area -->
    <div class="container-fluid">
        <div class="main-content-container overflow-hidden">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-0">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-4">
                        <div class="mb-3">
                            <label for="entriesSelect" class="form-label">Show entries:</label>
                            <select id="entriesSelect" class="form-select w-auto d-inline-block">
                                <option value="10" selected>10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="ri-add-line d-none d-sm-inline-block"></i>
                                <span>Add New User</span>
                            </button>
                            <form class="position-relative table-src-form me-0" onsubmit="return false;">
                                <input type="text" class="form-control rounded-2" placeholder="Search here...." id="searchInput">
                                <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y text-secondary">search</i>
                            </form>
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

                                                <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2" data-bs-toggle="modal" data-bs-target="#editModal-{{ $user->id }}">
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
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Card Add -->
            @include('Admin.user.create')
            @include('Admin.user.edit')
        </div>

        <div class="flex-grow-1"></div>

    </div>
    <!-- Start Main Content Area -->
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.semanticui.min.js"></script>
    <script>
        $(document).ready(function () {

            let table = $('#UserTable').DataTable({
                "lengthMenu": [10, 20, 50, 100],
                "searching": true,
                "lengthChange": true,

                "dom": 'rt', // hide everything except table and processing
                "pageLength": 10,
                "paging": true,
                "info": false,

            });
            $('#searchInput').on('keyup', function () {
                // console.log(`Kontol isinya ${this.value}`);
                table.search(this.value).draw();
            });
            $('#entriesSelect').on('change', function () {
                let value = parseInt($(this).val(), 10); // Parse the selected value as an integer
                table.page.len(value).draw(); // Update the number of rows displayed
            });
            $(document).on('click', '.pagination a.page-link', function (e) {
                e.preventDefault();
                const page = parseInt($(this).data('page'), 10);
                if (!isNaN(page)) {
                    table.page(page).draw('page');
                }
            });
            // init page pas render pertama
            updatePaginationUI(table);

            // init render SETELAH entriesSelect berubah
            table.on('draw', function () {
                updatePaginationUI(table); // ← THIS makes your custom pagination dynamic
            });
        });

        function updatePaginationUI(table) {
            const info = table.page.info(); // Get page info
            const currentPage = info.page;
            const totalPages = info.pages;
            const totalRecords = info.recordsDisplay;
            const startIndex = info.start + 1;
            const endIndex = info.end;

            // Update "Showing X of Y Results"
            $('.showing-wrap span').text(`Showing ${endIndex} of ${totalRecords} Results`);

            // Build pagination HTML
            let paginationHtml = '';

            // Previous button
            paginationHtml += `
                <li class="page-item ${currentPage === 0 ? 'disabled' : ''}">
                    <a class="page-link icon " href="#" data-page="${currentPage - 1}">
                        <i class="material-symbols-outlined">keyboard_arrow_left</i>
                    </a>
                </li>
            `;

            // Page numbers
            for (let i = 0; i < totalPages; i++) {
                paginationHtml += `
                    <li class="page-item">
                        <a class="page-link ${i === currentPage ? 'active' : ''}" href="#" data-page="${i}">${i + 1}</a>
                    </li>
                `;
            }

            // Next button
            paginationHtml += `
                <li class="page-item ${currentPage === totalPages - 1 ? 'disabled' : ''}">
                    <a class="page-link icon" href="#" data-page="${currentPage + 1}">
                        <i class="material-symbols-outlined">keyboard_arrow_right</i>
                    </a>
                </li>
            `;

            // Inject into DOM
            $('.pagination').html(paginationHtml);
        }
    </script>

@endpush
