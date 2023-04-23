@extends('Layout.dashboard')
@section('DashboardLayout')
    <div class="post d-flex flex-column-fluid" id="password">
        <div id="password" class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <!--begin::Form-->
                    <form id="password" class="myform" action="#" autocomplete="off">
                        <!--begin::Input group--->
                        <div class="fv-row mb-10">
                            <label class="required form-label fs-6 mb-2">Current Password</label>

                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="current_password" autocomplete="off" />
                        </div>
                        <!--end::Input group--->

                        <!--begin::Input group-->
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-bold fs-6 mb-2 required">
                                    New Password
                                </label>
                                <!--end::Label-->

                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="" name="new_password" autocomplete="off" />

                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>

                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <!--end::Input wrapper-->

                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Hint-->
                            <div class="text-muted">
                                Use 8 or more characters with a mix of letters, numbers & symbols.
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group--->

                        <!--begin::Input group--->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-bold fs-6 mb-2 required">Confirm New Password</label>

                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="confirm_password" autocomplete="off" />
                        </div>
                        <!--end::Input group--->

                        <!--begin::Actions-->
                        <button id="kt_docs_formvalidation_password_submit" type="submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Validation Form
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
    </div>
@endsection
