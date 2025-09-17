@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.shared-app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl-6">
            <div class="card bg-success border-0 rounded-3 welcome-box style-two mb-4 position-relative">
                <div class="card-body py-38 px-4">
                    <div class="mb-5">
                        <h3 class="text-white fw-semibold">Welcome Back, <span class="text-warning">{{ Auth::user()->name ?? 'Lembaga User' }}!</span></h3>
                        <p class="text-light">Your lembaga management dashboard.</p>
                    </div>

                    <div class="d-flex align-items-center flex-wrap gap-4 gap-xxl-5">
                        <div class="d-flex align-items-center welcome-status-item style-two">
                            <div class="flex-shrink-0">
                                <i class="material-symbols-outlined">business</i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-white fw-semibold mb-0 fs-16">25</h5>
                                <p class="text-light">Total Institutions</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center welcome-status-item style-two">
                            <div class="flex-shrink-0">
                                <i class="material-symbols-outlined icon-bg two">school</i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="text-white fw-semibold mb-0 fs-16">120</h5>
                                <p class="text-light">Programs Managed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/assets/images/welcome-2.gif" class="welcome-2 d-none d-sm-block" alt="welcome">
            </div>
        </div>
        <div class="col-xxl-6">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-4">
                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-4">
                            <span>Active Assessments</span>
                            <h3 class="mb-0 fs-20">18</h3>
                            <div class="py-3">
                                <div class="wh-77 lh-97 text-center m-auto bg-success bg-opacity-25 rounded-circle">
                                    <i class="material-symbols-outlined fs-32 text-success">assignment</i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-12">This Month</span>
                                <i class="material-symbols-outlined text-success">timeline</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-4">
                            <span>Pending Reviews</span>
                            <h3 class="mb-0 fs-20">8</h3>
                            <div class="py-3">
                                <div class="wh-77 lh-97 text-center m-auto bg-warning bg-opacity-25 rounded-circle">
                                    <i class="material-symbols-outlined fs-32 text-warning">pending_actions</i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-12">This Month</span>
                                <i class="material-symbols-outlined text-warning">trending_flat</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-4">
                            <span>Completed</span>
                            <h3 class="mb-0 fs-20">45</h3>
                            <div class="py-3">
                                <div class="wh-77 lh-97 text-center m-auto bg-primary bg-opacity-25 rounded-circle">
                                    <i class="material-symbols-outlined fs-32 text-primary">check_circle</i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fs-12">This Month</span>
                                <i class="material-symbols-outlined text-success">trending_up</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xxl-8">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3 mb-lg-4">
                        <h3 class="mb-0">Institution Performance Overview</h3>
                        <select class="form-select month-select form-control p-0 h-auto border-0 w-110" style="background-position: right 0 center;" aria-label="Default select example">
                            <option selected>Last 6 Month</option>
                            <option value="1">Last 8 Month</option>
                            <option value="2">Last 12 Month</option>
                        </select>
                    </div>

                    <div class="default-table-area style-two">
                        <div class="table-responsive">
                            <table class="table align-middle border-0">
                                <thead>
                                <tr>
                                    <th scope="col">Institution Name</th>
                                    <th scope="col">Programs</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Last Assessment</th>
                                    <th scope="col">Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 fs-14 fw-medium">Universitas Indonesia</h6>
                                        </div>
                                    </td>
                                    <td>25</td>
                                    <td>
                                        <span class="d-inline-block fs-12 bg-success bg-opacity-10 text-success px-2 py-1 rounded-1">Active</span>
                                    </td>
                                    <td class="text-body">March 2024</td>
                                    <td>
                                        <span class="badge bg-success">A</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 fs-14 fw-medium">Institut Teknologi Bandung</h6>
                                        </div>
                                    </td>
                                    <td>18</td>
                                    <td>
                                        <span class="d-inline-block fs-12 bg-warning bg-opacity-10 text-warning px-2 py-1 rounded-1">Under Review</span>
                                    </td>
                                    <td class="text-body">February 2024</td>
                                    <td>
                                        <span class="badge bg-primary">A</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <h6 class="mb-0 fs-14 fw-medium">Universitas Gadjah Mada</h6>
                                        </div>
                                    </td>
                                    <td>22</td>
                                    <td>
                                        <span class="d-inline-block fs-12 bg-success bg-opacity-10 text-success px-2 py-1 rounded-1">Active</span>
                                    </td>
                                    <td class="text-body">January 2024</td>
                                    <td>
                                        <span class="badge bg-success">A</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-4">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3 mb-lg-4">
                        <h3 class="mb-0">Assessment Calendar</h3>
                    </div>
                    <div class="upcoming-events">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <div class="wh-40 bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="material-symbols-outlined fs-18 text-primary">event</i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1 fs-14 fw-medium">Site Visit - UI</h6>
                                <span class="fs-12 text-body">March 25, 2024</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <div class="wh-40 bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="material-symbols-outlined fs-18 text-warning">schedule</i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1 fs-14 fw-medium">Review Meeting - ITB</h6>
                                <span class="fs-12 text-body">March 28, 2024</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="wh-40 bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="material-symbols-outlined fs-18 text-success">assignment_turned_in</i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1 fs-14 fw-medium">Final Report - UGM</h6>
                                <span class="fs-12 text-body">March 30, 2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection