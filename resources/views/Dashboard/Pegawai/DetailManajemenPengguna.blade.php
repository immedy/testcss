@extends('Layout.dashboard')
@section('DashboardLayout')
{{-- <div class="modal fade " tabindex="-1" id="dataModal" role="dialog" aria-labelledby="dataModal" aria-hidden="true">
    <div class="modal-dialog border border-danger"> --}}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pegawai</h5>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="fv-row mb-3">
                        <label class="text-dark fw-bolder text-hover-primary fs-6">Nama Pegawai</label>
                        <input type="text" name="nama" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="" value="{{ $user->id }}" required />
                        <!--end::Input-->
                    </div>
                    <div class="fv-row mb-3">
                        <label class="text-dark fw-bolder text-hover-primary fs-6">Nama Pegawai</label>
                        <input type="text" name="nama" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="" value="{{ $user->username }}" required />
                        <!--end::Input-->
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Keluar</button>
                        <button type="submit" class="btn btn-primary"><span class="indicator-label">
                                Simpan
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection