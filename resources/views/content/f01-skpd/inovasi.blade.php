@extends('layouts/layoutMaster')

@section('title', 'Inovasi')

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
        <span class="text-muted fw-light">F01-SKPD /</span> Inovasi
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
                <li class="nav-item"><a class="nav-link active" href="{{ url('inovasi') }}"><i
                            class="ti-xs ti ti-link me-1"></i>
                        Inovasi</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('pertanyaan-tambahan') }}"><i
                            class="ti-xs ti ti-link me-1"></i>
                        Pertanyaan Tambahan</a></li>
            </ul>
        </div>
    </div>

    <!-- Collapsible Section -->
    <div class="row my-4">
        <div class="col">
            <div class="accordion" id="collapsibleSection">
                <h6> Inovasi</h6>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingPaymentMethod">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#collapseduasembilan" aria-expanded="false" aria-controls="collapseduasembilan">
                            Inovasi </button>
                    </h2>
                    <div id="collapseduasembilan" class="accordion-collapse collapse" aria-labelledby="headingPaymentMethod"
                        data-bs-parent="#collapsibleSection">
                        <form>
                            <div class="accordion-body">
                                <div class="row g-3">
                                    <label class="form-check-label"> Apakah terdapat inovasi pelayanan publik?</label>
                                    <div class="col mt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="collapsible-address-type" class="form-check-input" type="radio"
                                                value="" id="collapsible-address-type-home" checked="" />
                                            <label class="form-check-label" for="collapsible-address-type-home"> Jika
                                                tersedia inovasi, apa nama inovasi tersebut (diisi di bawah)</label>
                                            <div class="col-12">
                                                <label class="form-label" for="collapsible-address">sebutkan judul
                                                    inovasi tersebut beserta penjelasan singkatnya</label>
                                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                                    placeholder="1456, Mall Road"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="collapsible-address-type" class="form-check-input" type="radio"
                                                value="" id="collapsible-address-type-office" />
                                            <label class="form-check-label" for="collapsible-address-type-office"> Jika
                                                Tidak, apakah ada inisiatif untuk berinovasi?</label>
                                            <div class="col mt-2">
                                                <div class="form-check form-check-inline">
                                                    <input name="collapsible-address-type" class="form-check-input"
                                                        type="radio" value="" id="collapsible-address-type-home"
                                                        checked="" />
                                                    <label class="form-check-label" for="collapsible-address-type-home">
                                                        Tidak
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input name="collapsible-address-type" class="form-check-input"
                                                        type="radio" value=""
                                                        id="collapsible-address-type-office" />
                                                    <label class="form-check-label" for="collapsible-address-type-office">
                                                        Ya, masih proses
                                                        pembelajaran Sebutkan bukti dukung proses pembelajaran (hasil studi
                                                        tiru, referensi, seminar transfer knowledge, dll)</label>
                                                    <div class="col-12">
                                                        <label class="form-label"
                                                            for="collapsible-address">Keterangan</label>
                                                        <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                                            placeholder="1456, Mall Road"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label class="form-check-label">Jika jawaban poin 1 “ya”, sudah berapa lama inovasi
                                        dilaksanakan?</label>
                                    <div class="col mt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="collapsible-address-type" class="form-check-input"
                                                type="radio" value="" id="collapsible-address-type-home"
                                                checked="" />
                                            <label class="form-check-label" for="collapsible-address-type-home"> Lebih
                                                dari 1 tahun
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input name="collapsible-address-type" class="form-check-input"
                                                type="radio" value="" id="collapsible-address-type-office" />
                                            <label class="form-check-label" for="collapsible-address-type-office">
                                                Kurang dari 1 tahun
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="collapsible-address">Sebutkan waktu pertama
                                                kali inovasi dilaksanakan.</label>
                                            <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                                placeholder="1456, Mall Road"></textarea>
                                        </div>
                                    </div>
                                    <label class="form-check-label"> Apakah inovasi sudah diikutsertakan dalam kompetisi
                                        inovasi pelayanan publik?</label>
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
                                    <label class="form-check-label"> Apabila sudah diikutkan dalam kompetisi inovasi
                                        pelayanan publik, sebutkan penghargaan yang diperoleh :</label>
                                    <label class="form-check-label"> Level Kompetisi</label>
                                    <div class="col mt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="collapsible-address-type" class="form-check-input"
                                                type="checkbox" value="" id="collapsible-address-type-home"
                                                checked="" />
                                            <label class="form-check-label" for="collapsible-address-type-home">
                                                Instansi (lokal)</label>
                                            <div class="col-12">
                                                <label class="form-label" for="collapsible-address">Penghargaan</label>
                                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                                    placeholder="1456, Mall Road"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="collapsible-address">Keterangan</label>
                                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                                    placeholder="1456, Mall Road"></textarea>
                                            </div>
                                        </div>
                                        <div></div>
                                        <div class="form-check form-check-inline">
                                            <input name="collapsible-address-type" class="form-check-input"
                                                type="checkbox" value="" id="collapsible-address-type-home"
                                                checked="" />
                                            <label class="form-check-label" for="collapsible-address-type-home">
                                                Nasional</label>
                                            <div class="col-12">
                                                <label class="form-label" for="collapsible-address">Penghargaan</label>
                                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                                    placeholder="1456, Mall Road"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="collapsible-address">Keterangan</label>
                                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                                    placeholder="1456, Mall Road"></textarea>
                                            </div>
                                        </div>
                                        <div></div>
                                        <div class="form-check form-check-inline">
                                            <input name="collapsible-address-type" class="form-check-input"
                                                type="checkbox" value="" id="collapsible-address-type-home"
                                                checked="" />
                                            <label class="form-check-label" for="collapsible-address-type-home">
                                                Internasional</label>
                                            <div class="col-12">
                                                <label class="form-label" for="collapsible-address">Penghargaan</label>
                                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                                    placeholder="1456, Mall Road"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="collapsible-address">Keterangan</label>
                                                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                                    placeholder="1456, Mall Road"></textarea>
                                            </div>
                                        </div>
                                        <div></div>

                                    </div>
                                    <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                            Dukung</b></label>
                                    <div class="col-md-6">
                                        <label class="form-label" for="collapsible-fullname"> Proposal Inovasi Pelayanan
                                            Publik, Dokumentasi pelaksanaan Inovasi (foto, daftar hadir, dll), Bukti
                                            keikutsertaan dan/atau piagam penghargaan yang diperoleh atas inovasi yang
                                            dimiliki dalam suatu kompetisi inovasi pelayanan publik</label>
                                        <input type="file" id="collapsible-fullname" class="form-control"
                                            placeholder="John Doe" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapsetigapuluh" aria-expanded="true" aria-controls="collapsetigapuluh">
                            Tersedia sumber daya yang mendukung
                            keberlanjutan
                            Inovasi Pelayanan Publik. </button>
                    </h2>
                    <div id="collapsetigapuluh" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah terdapat sumber daya yang mendukung keberlanjutan
                                    inovasi?</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> ya </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio"
                                            value="" id="collapsible-address-type-office" />
                                        <label class="form-check-label" for="collapsible-address-type-office"> Tidak
                                        </label>
                                    </div>
                                </div>
                                <label class="form-check-label">Apakah bentuk sumber daya yang mendukung keberlanjutan
                                    inovasi?</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Ya, Sudah
                                            Berbentuk Payung Hukum </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio"
                                            value="" id="collapsible-address-type-office" />
                                        <label class="form-check-label" for="collapsible-address-type-office"> Tidak,
                                            Masih dalam rancangan Payung Hukum</label>
                                    </div>
                                </div>
                                <label class="form-check-label"> Bentuk sumber daya lainnya yang mendukung keberlanjutan
                                    inovasi:</label>
                                <label class="form-check-label"> Sumber daya lainnya
                                    (dapat pilih lebih dari satu)</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Alokasi anggaran terkait keberlanjutan inovasi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Sarana dan prasarana pendukung keberlanjutan inovasi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            SDM yang mendukung keberlanjutan inovasi</label>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- button kembali dan simpan --}}
    <div class="col-12 d-flex justify-content-between">
        <button class="btn btn-danger btn-prev waves-effect">
            <a class="nav-link" href="{{ url('konsultasi-dan-pengaduan') }}">Kembali</a>
        </button>
        <button class="btn btn-success btn-next waves-effect waves-light">
            <span class="nav-link" type="submit">Simpan</span>
        </button>
    </div>

@endsection
