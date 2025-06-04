@foreach($users as $user)
    <div class="modal fade" id="editModal-{{ $user->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 1120px;">
            <div class="modal-content p-4 p-md-5">
                <div class="modal-header p-0 border-0">
                    <h3 class="mb-0">Edit User</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 pt-4">
                    <form action="#" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Register Number Employee</label>
                                    <input type="number" class="form-control h-55" value="{{ $user->id }}" disabled>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Name</label>
                                    <input type="text" name="name" class="form-control h-55" value="{{ $user->name }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Email</label>
                                    <input type="email" name="email" class="form-control h-55" value="{{ $user->email }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Role</label>
                                    <select name="role" class="form-select form-control h-55" required>
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="asesor" {{ $user->role == 'asesor' ? 'selected' : '' }}>Asesor</option>
                                        <option value="keuangan" {{ $user->role == 'keuangan' ? 'selected' : '' }}>Keuangan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Status</label>
                                    <select name="status" class="form-select form-control h-55" required>
                                        <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Home Address</label>
                                    <input type="text" name="home_address" class="form-control h-55" value="{{ $user->home_address }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Home City</label>
                                    <input type="text" name="home_city" class="form-control h-55" value="{{ $user->home_city }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Work Address</label>
                                    <input type="text" name="work_address" class="form-control h-55" value="{{ $user->work_address }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Work City</label>
                                    <input type="text" name="work_city" class="form-control h-55" value="{{ $user->work_city }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Phone Number 1</label>
                                    <input type="tel" name="phone_number_1" class="form-control h-55" value="{{ $user->phone_number_1 }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label class="label text-secondary">Phone Number 2</label>
                                    <input type="tel" name="phone_number_2" class="form-control h-55" value="{{ $user->phone_number_2 }}">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0 p-0 gap-2">
                            <button type="button" class="btn btn-danger text-white px-3 m-0" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary hover-bg px-3 m-0">
                                <i class="ri-save-line"></i>
                                <span>Save Changes</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
