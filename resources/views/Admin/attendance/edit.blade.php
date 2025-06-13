<div class="modal fade" id="editAttendanceModal-1" tabindex="-1" aria-labelledby="editAttendanceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 1120px;">
        <div class="modal-content p-4 p-md-5">
            <div class="modal-header p-0 border-0">
                <h3 class="mb-0">Edit Attendance</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 pt-4">
                <form action="#" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Nama Kegiatan</label>
                                <input type="text" class="form-control h-55" placeholder="Enter activity name" value="Sosialisasi Akreditasi" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Description</label>
                                <input type="text" class="form-control h-55" placeholder="Enter description" value="Mensosialisasikan kegiatan akreditasi tahun 2025" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Category</label>
                                <select class="form-select form-control h-55" required>
                                    <option value="lembaga" selected>Lembaga</option>
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
                                        <input type="date" class="form-control h-55" value="1993-05-13" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4">
                                        <label class="label text-secondary">End Date</label>
                                        <input type="date" class="form-control h-55" value="2005-05-13" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label class="label text-secondary">Status</label>
                                <select class="form-select form-control h-55" required>
                                    <option value="active">Active</option>
                                    <option value="inactive" selected>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-danger text-white px-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary hover-bg px-3">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
