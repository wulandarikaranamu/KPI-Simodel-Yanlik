@extends('layouts/layoutMaster')

@section('title', 'Konsultasi dan Pengaduan-V2')

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
        <span class="text-muted fw-light">F01-SKPD /</span> Konsultasi dan Pengaduan-V2
    </h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-4">
                <li class="nav-item"><a class="nav-link " href="{{ url('kebijakan-pelayanan-v2') }}"><i
                            class="ti-xs ti ti-users me-1"></i>
                        Kebijakan Pelayanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('profesionalisme-sdm-v2') }}"><i
                            class="ti-xs ti ti-lock me-1"></i> Profesionalisme SDM</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('sarana-prasarana-v2') }}"><i
                            class="ti-xs ti ti-file-description me-1"></i> Sarana Prasarana</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('sistem-informasi-pelayanan-publik-v2') }}"><i
                            class="ti-xs ti ti-bell me-1"></i> Sistem Informasi Pelayanan Publik</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ url('konsultasi-dan-pengaduan-v2') }}"><i
                            class="ti-xs ti ti-link me-1"></i> Konsultasi dan Pengaduan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('inovasi-v2') }}"><i
                            class="ti-xs ti ti-link me-1"></i>
                        Inovasi</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('pertanyaan-tambahan-v2') }}"><i
                            class="ti-xs ti ti-link me-1"></i>
                        Pertanyaan Tambahan</a></li>
            </ul>
        </div>
    </div>

    <!-- Konsultasi dan Pengaduan-v2 -->
    <div class="row my-4">
        <div class="col">
            <div class="accordion" id="collapsibleSection">
                <h6> Konsultasi dan Pengaduan</h6>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapsedualima" aria-expanded="true" aria-controls="collapsedualima">
                            Fasilitas sarana & prasarana konsultasi dan
                            pengaduan: </button>
                    </h2>
                    <div id="collapsedualima" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Sarana dan Prasarana konsultasi dan pengaduan
                                    (dapat pilih dari satu)</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Kotak saran/pengaduan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Ruang khusus</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Petugas khusus</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Air minum / makanan ringan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Pengaduan
                                        </label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Publikasi
                                            informasi terkait mekanisme konsultasi dan pengaduan
                                            (poster/spanduk/leaflet/buku/dokumen/bahan cetak lain)</label>
                                    </div>
                                    <div></div>
                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto sarana/ media konsultasi
                                        dan pengaduan yang tersedia dan SK Petugas Khusus</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapseduaenam" aria-expanded="true" aria-controls="collapseduaenam">
                            Tersedia sarana konsultasi dan pengaduan yang
                            terdapat pada Unit Lokus: </button>
                    </h2>
                    <div id="collapseduaenam" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Tersedia sarana konsultasi dan pengaduan yang terdapat
                                    pada Unit Lokus:</label>
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
                                <label class="form-check-label"> Sarana konsultasi dan pengaduan yang dimiliki</label>
                                <label class="form-check-label"> Sarana</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Tatap Muka</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Menyatu dengan front office</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Terpisah dengan front office</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Daring</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Email</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            SMS/telepn/Aplikasi Percakapan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Media
                                            social (Instagram, Facebook, dan Twitter)</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Website
                                            pengaduan mandiri</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Aplikasi
                                            mobile pengaduan mandiri</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> SP4N
                                            LAPOR!</label>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto sarana/ media konsultasi
                                        dan pengaduan yang tersedia, Data SP4N-LAPOR!, dan Surat Keputusan</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapseduatujuh" aria-expanded="true" aria-controls="collapseduatujuh">
                            Tersedia akuntabilitas hasil konsultasi dan/atau
                            pengaduan. </button>
                    </h2>
                    <div id="collapseduatujuh" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah terdapat dokumentasi hasil konsultasi dan
                                    pengaduan?</label>
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
                                <label class="form-check-label">Apakah hasil konsultasi dan pengaduan diarsipkan?</label>
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
                                <label class="form-check-label">Apakah hasil konsultasi dan pengaduan dituangkan dalam
                                    laporan?</label>
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
                                <label class="form-check-label">Apakah hasil konsultasi dan pengaduan dilakukan
                                    monev?</label>
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
                                <label class="form-check-label">Apakah hasil konsultasi dan pengaduan
                                    ditindaklanjuti?</label>
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
                                <label class="form-check-label">Apakah hasil konsultasi dan pengaduan
                                    dipublikasikan?</label>
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
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Dokumentasi kegiatan
                                        konsultasi dan pengaduan, screenshot dokumentasi pada website, aplikasi mobil dan
                                        SP4N-LAPOR!, dan Laporan berkala</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapseduadelapan" aria-expanded="true" aria-controls="collapseduadelapan">
                            Berapa persen(%) pengaduan yang masuk
                            ditindaklanjuti
                            hingga selesai dalam satu tahun yang lalu (Januari-Desember)? </button>
                    </h2>
                    <div id="collapseduadelapan" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Jumlah konsultasi dan pengaduan yang masuk
                                    seluruhnya</label>
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
                                <label class="form-check-label">Jumlah konsultasi dan pengaduan yang ditindaklanjuti
                                    seluruhnya hingga selesai</label>
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
                                <label class="form-check-label">Jumlah konsultasi dan pengaduan yang masuk ke dalam
                                    SP4N-LAPOR</label>
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
                                <label class="form-check-label">Jumlah konsultasi dan pengaduan yang ditindaklanjuti
                                    hingga selesai dalam SP4N-LAPOR</label>
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
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Dokumentasi konsultasi dan
                                        pengaduan serta tindak lanjutnya, dan Screenshot tampilan pada SP4N- LAPOR! yang
                                        menunjukkan jumlah konsultasi dan pengaduan yang masuk dan yang telah ditindak
                                        lanjuti</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
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
            <a class="nav-link" href="{{ url('sistem-informasi-pelayanan-publik-v2') }}">Kembali</a>
        </button>
        <button class="btn btn-success btn-next waves-effect waves-light">
            <span class="nav-link" type="submit">Simpan</span>
        </button>
    </div>
@endsection
