<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 1120px;">
        <div class="modal-content p-4 p-md-5">
            <div class="modal-header p-0 border-0">
                <h3 class="mb-0">Add A New User</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 pt-4">
                <form action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Register Number Employee </label>
                                <input type="number" class="form-control h-55" placeholder="User ID" value="12345" disabled>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Name</label>
                                <input type="text" class="form-control h-55" placeholder="Enter name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Email</label>
                                <input type="email" class="form-control h-55" placeholder="Enter email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Role</label>
                                <select class="form-select form-control h-55" aria-label="Default select example">
                                    <option selected>Select Type: Action</option>
                                    <option value="1">admin</option>
                                    <option value="2">asesor</option>
                                    <option value="3">persuratan</option>
                                    <option value="4">keuangan</option>
                                    <option value="5">pppk</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Status</label>
                                <select class="form-select form-control h-55" aria-label="Default select example">
                                    <option selected>Select Type: Active/Inactive</option>
                                    <option value="1">active</option>
                                    <option value="2">inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Home Address</label>
                                <input type="text" class="form-control h-55" placeholder="Enter home address" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Home City</label>
                                <input type="text" class="form-control h-55" placeholder="Enter home city" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Work Address</label>
                                <input type="text" class="form-control h-55" placeholder="Enter work address" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Work City</label>
                                <input type="text" class="form-control h-55" placeholder="Enter work city" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Gender</label>
                                <select class="form-select form-control h-55" required>
                                    <option selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Type Asesor</label>
                                <select class="form-select form-control h-55" required>
                                    <option selected>Select Type</option>
                                    <option value="spk">SPK</option>
                                    <option value="reguler">Reguler</option>
                                    <option value="pkbm">PKBM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Phone Number 1</label>
                                <input type="tel" class="form-control h-55" placeholder="Enter phone number 1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Phone Number 2</label>
                                <input type="tel" class="form-control h-55" placeholder="Enter phone number 2">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer border-0 p-0 gap-2">
                <button type="button" class="btn btn-danger text-white px-3 m-0" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary hover-bg px-3 m-0">
                    <i class="ri-add-line"></i>
                    <span>Add A User</span>
                </button>
            </div>
        </div>
    </div>
</div>
