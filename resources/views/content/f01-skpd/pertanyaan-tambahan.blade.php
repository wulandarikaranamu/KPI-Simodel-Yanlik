@extends('layouts/layoutMaster')

@section('title', 'Pertanyaan Tambahan')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
    <script src="{{ asset('assets/js/form-layouts.js') }}"></script>
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">F01-SKPD /</span> Pertanyaan Tambahan
    </h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-4">
                <li class="nav-item"><a class="nav-link" href="{{ url('kebijakan-pelayanan') }}"><i
                            class="ti-xs ti ti-users me-1"></i>
                        Kebijakan Pelayanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('profesionalisme-sdm') }}"><i
                            class="ti-xs ti ti-lock me-1"></i> Profesionalisme SDM</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('sarana-prasarana') }}"><i
                            class="ti-xs ti ti-file-description me-1"></i> Sarana Prasarana</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('sistem-informasi-pelayanan-publik') }}"><i
                            class="ti-xs ti ti-bell me-1"></i> Sistem Informasi Pelayanan Publik</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('konsultasi-dan-pengaduan') }}"><i
                            class="ti-xs ti ti-link me-1"></i> Konsultasi dan Pengaduan</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('inovasi') }}"><i class="ti-xs ti ti-link me-1"></i>
                        Inovasi</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ url('pertanyaan-tambahan') }}"><i
                            class="ti-xs ti ti-link me-1"></i>
                        Pertanyaan Tambahan</a></li>
            </ul>
        </div>
    </div>

    <!-- Collapsible Section -->
    <div class="row my-4">
        <div class="col">
            <div class="accordion" id="collapsibleSection">
                <h6> PERTANYAAN TAMBAHAN</h6>
                <div class="card accordion-item">

                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingPaymentMethod">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapsetigasatu" aria-expanded="false" aria-controls="collapsetigasatu">
                                Sistem Antrian </button>
                        </h2>
                        <div id="collapsetigasatu" class="accordion-collapse collapse"
                            aria-labelledby="headingPaymentMethod" data-bs-parent="#collapsibleSection">
                            <form>
                                <div class="accordion-body">
                                    <div class="row g-3">
                                        <label class="form-check-label"> Apakah terdapat sistem antrian di unit
                                            pelayanan?</label>
                                        <div class="col mt-2">
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-address-type" class="form-check-input"
                                                    type="radio" value="" id="collapsible-address-type-home"
                                                    checked="" />
                                                <label class="form-check-label" for="collapsible-address-type-home"> ya
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-address-type" class="form-check-input"
                                                    type="radio" value="" id="collapsible-address-type-office" />
                                                <label class="form-check-label" for="collapsible-address-type-office"> Tidak
                                                </label>
                                            </div>
                                        </div>
                                        <label class="form-check-label"> Fasilitas pada sistem antrian :</label>
                                        <br>
                                        <label class="form-check-label"> Sarana</label>
                                        <div class="col mt-2">
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-address-type" class="form-check-input"
                                                    type="checkbox" value="" id="collapsible-address-type-home"
                                                    checked="" />
                                                <label class="form-check-label" for="collapsible-address-type-home">
                                                    Pengeras suara</label>
                                            </div>
                                            <div></div>
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-address-type" class="form-check-input"
                                                    type="checkbox" value="" id="collapsible-address-type-home"
                                                    checked="" />
                                                <label class="form-check-label" for="collapsible-address-type-home">
                                                    Dipandu</label>
                                            </div>
                                            <div></div>
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-address-type" class="form-check-input"
                                                    type="checkbox" value="" id="collapsible-address-type-home"
                                                    checked="" />
                                                <label class="form-check-label" for="collapsible-address-type-home">
                                                    Pengelompokan antrian</label>
                                            </div>
                                            <div></div>
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-address-type" class="form-check-input"
                                                    type="checkbox" value="" id="collapsible-address-type-home"
                                                    checked="" />
                                                <label class="form-check-label" for="collapsible-address-type-home">
                                                    Sitem pendaftaran online</label>
                                            </div>
                                            <div></div>
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-address-type" class="form-check-input"
                                                    type="checkbox" value="" id="collapsible-address-type-home"
                                                    checked="" />
                                                <label class="form-check-label" for="collapsible-address-type-home">
                                                    Nomor antrian</label>
                                            </div>
                                            <div></div>
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-address-type" class="form-check-input"
                                                    type="checkbox" value="" id="collapsible-address-type-home"
                                                    checked="" />
                                                <label class="form-check-label" for="collapsible-address-type-home">
                                                    Monitor
                                                    antrian</label>
                                            </div>
                                            <div></div>
                                            <div class="form-check form-check-inline">
                                                <input name="collapsible-address-type" class="form-check-input"
                                                    type="checkbox" value="" id="collapsible-address-type-home"
                                                    checked="" />
                                                <label class="form-check-label" for="collapsible-address-type-home">
                                                    Lainnya
                                                    … (sebutkan)</label>
                                            </div>
                                            <div></div>
                                            <div class="col-12">
                                                <label class="form-label" for="collapsible-address">Keterangan</label>
                                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                                    placeholder="1456, Mall Road"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- button kembali dan simpan --}}
    <div class="col-12 d-flex justify-content-between">
        <button class="btn btn-danger btn-prev waves-effect">
            <a class="nav-link" href="{{ url('inovasi') }}">Kembali</a>
        </button>
        <button class="btn btn-success btn-next waves-effect waves-light">
            <span class="nav-link" type="submit">Simpan</span>
        </button>
    </div>

@endsection
