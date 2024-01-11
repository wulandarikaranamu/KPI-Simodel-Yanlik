@extends('layouts/layoutMaster')

@section('title', 'Halaman SKPD')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')) }}">
    <link rel="stylesheet"
        href="{{ asset(mix('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/flatpickr/flatpickr.css')) }}" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')) }}">
    <!-- Form Validation -->
    <link rel="stylesheet" href="{{ asset(mix('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')) }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset(mix('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')) }}"></script>
    <!-- Flat Picker -->
    <script src="{{ asset(mix('assets/vendor/libs/moment/moment.js')) }}"></script>
    <script src="{{ asset(mix('assets/vendor/libs/flatpickr/flatpickr.js')) }}"></script>
    <!-- Form Validation -->
    <script src="{{ asset(mix('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')) }}"></script>
    <script src="{{ asset(mix('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')) }})"></script>
    <script src="{{ asset(mix('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')) }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset(mix('assets/js/tables-datatables-pelayanan-publik.js')) }}"></script>
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Pelayanan Publik /</span> (SKPD)
    </h4>


    <!-- Modal to add new record -->
    <div class="offcanvas offcanvas-end" id="add-new-record">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
                <div class="col-sm-12">
                    <label class="form-label" for="basicFullname">Full Name</label>
                    <div class="input-group input-group-merge">
                        <span id="basicFullname2" class="input-group-text"><i class="ti ti-user"></i></span>
                        <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname"
                            placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicPost">Post</label>
                    <div class="input-group input-group-merge">
                        <span id="basicPost2" class="input-group-text"><i class='ti ti-briefcase'></i></span>
                        <input type="text" id="basicPost" name="basicPost" class="form-control dt-post"
                            placeholder="Web Developer" aria-label="Web Developer" aria-describedby="basicPost2" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicEmail">Email</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="ti ti-mail"></i></span>
                        <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email"
                            placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                    </div>
                    <div class="form-text">
                        You can use letters, numbers & periods
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicDate">Joining Date</label>
                    <div class="input-group input-group-merge">
                        <span id="basicDate2" class="input-group-text"><i class='ti ti-calendar'></i></span>
                        <input type="text" class="form-control dt-date" id="basicDate" name="basicDate"
                            aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicSalary">Salary</label>
                    <div class="input-group input-group-merge">
                        <span id="basicSalary2" class="input-group-text"><i class='ti ti-currency-dollar'></i></span>
                        <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary"
                            placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
                </div>
            </form>

        </div>
    </div>
    <!--/ DataTable with Buttons -->

    <!-- Complex Headers -->
    <div class="card">
        <h5 class="card-header">MONITORING DAN EVALUASI PELAYANAN PUBLIK LINGKUP PEMERINTAH KOTA MAKASSAR</h5>
        <div class="card-header">
            <div class="col-2 col-md-2">
                <label class="form-label" for="modalAddressCountry">Pilih Tahun</label>
                <div class="position-relative" data-select2-id="76">
                    <div class="position-relative" data-select2-id="75"><select id="modalAddressCountry"
                            name="modalAddressCountry" class="select2 form-select select2-hidden-accessible"
                            data-allow-clear="true" tabindex="-1" aria-hidden="true"
                            data-select2-id="modalAddressCountry">
                            <option value="" data-select2-id="33">Select</option>
                            <option value="tahun2022" data-select2-id="2022">2022</option>
                            <option value="tahun2023" data-select2-id="2023">2023</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-datatable text-nowrap">
            <table class="dt-complex-header table table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">Nama SKPD</th>
                        <th colspan="6" class="text-center">Aspek</th>
                        <th rowspan="2">Update</th>
                        <th rowspan="2">Nilai</th>
                        <th rowspan="2">Status</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>Kebijakan Pelayanan</th>
                        <th>Profesionalisme SDM</th>
                        <th>Sarana Prasarana</th>
                        <th>Sistem Informasi Pelayanan Publik</th>
                        <th>Konsultasi dan Pengaduan</th>
                        <th>Inovasi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!--/ Complex Headers -->

@endsection
