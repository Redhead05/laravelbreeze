<div class="modal fade" id="attendanceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 1120px;">
        <div class="modal-content p-4 p-md-5">
            <div class="modal-header p-0 border-0">
                <h3 class="mb-0">Add A New Attendance</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 pt-4">
                <form action="#">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Nama Kegiatan</label>
                                <input type="text" class="form-control h-55" placeholder="Enter activity name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Description</label>
                                <input type="text" class="form-control h-55" placeholder="Enter description" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Category</label>
                                <select class="form-select form-control h-55" required>
                                    <option selected>Pilih</option>
                                    <option value="lembaga">Lembaga</option>
                                    <option value="dinas">Dinas</option>
                                    <option value="banpdm">BANPDM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="label text-secondary">Start Date</label>
                                        <input type="date" class="form-control h-55" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="label text-secondary">End Date</label>
                                        <input type="date" class="form-control h-55" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer border-0 p-0 gap-2">
                <button type="button" class="btn btn-danger text-white px-3 m-0" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary hover-bg px-3 m-0">
                    <i class="ri-add-line"></i>
                    <span>Add Attendance</span>
                </button>
            </div>
        </div>
    </div>
</div>
