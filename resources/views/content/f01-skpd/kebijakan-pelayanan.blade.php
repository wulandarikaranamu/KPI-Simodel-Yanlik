@extends('layouts/layoutMaster')

@section('title', 'Kebijakan Pelayanan')

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
        <span class="text-muted fw-light">F01-SKPD /</span> Kebijakan Pelayanan
    </h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-4">
                <li class="nav-item"><a class="nav-link active" href="{{ url('kebijakan-pelayanan') }}"><i
                            class="ti-xs ti ti-users me-1"></i>
                        Kebijakan Pelayanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('profesionalisme-sdm') }}"><i
                            class="ti-xs ti ti-lock me-1"></i> Profesionalisme SDM</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('sarana-prasarana') }}"><i
                            class="ti-xs ti ti-file-description me-1"></i> Sarana Prasarana</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('sistem-informasi-pelayanan-publik') }}"><i
                            class="ti-xs ti ti-bell me-1"></i> Sistem Informasi Pelayanan Publik</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('konsultasi-dan-pengaduan') }}"><i
                            class="ti-xs ti ti-link me-1"></i> Konsultasi dan Pengaduan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('inovasi') }}"><i class="ti-xs ti ti-link me-1"></i>
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
            <h6> Kebijakan Pelayanan </h6>
            <div class="accordion" id="collapsibleSection">
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapsesatu" aria-expanded="true" aria-controls="collapsesatu"> Tersedia
                            Standar
                            Pelayanan (SP) sesuai dengan ketentuan peraturan perundang-undangan yang berlaku </button>
                    </h2>
                    <div id="collapsesatu" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Pelayanan?</label>
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
                                <div class="mb-3 row">
                                    <label class="form-check-label">Berapa jumlah jenis pelayanan yang dimiliki</label>
                                    <div class="col-lg-2 col-md-10">
                                        <input class="form-control" type="number" value="0" id="html5-number-input">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="form-check-label">Berapa jumlah jenis standar pelayanan yang
                                        dibuat</label>
                                    <div class="col-lg-2 col-md-10">
                                        <input class="form-control" type="number" value="0" id="html5-number-input">
                                    </div>
                                </div>
                                <label class="form-check-label">Apakah Standar Pelayanan yang disusun memenuhi 14
                                    komponen?</label>
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
                                <label class="form-check-label">Apakah dalam proses penyusunan Standar Pelayanan telah
                                    melibatkan unsur masyarakat?</label>
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
                                <label class="form-check-label">Apakah Standar Pelayanan telah ditetapka?</label>
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
                                <label class="form-check-label">Apakah Standar Pelayanan yang dimiliki dilakukan
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
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname">Daftar jenis pelayanan yang
                                        diselenggarakan</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname">Dokumen standar pelayanan yang
                                        telah ditetapkan</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname">Berita Acara, Foto,
                                        Notulen</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname">Laporan Pelaksanaan Forum
                                        Konsultasi Publik</label>
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
                            data-bs-target="#collapsedua" aria-expanded="true" aria-controls="collapsedua">
                            Proses
                            penyusunan dan perubahan Standar Pelayanan telah melibatkan unsur masyarakat
                        </button>
                    </h2>
                    <div id="collapsedua" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah dalam penyusunan SP telah melibatkan unsur
                                    masyarakat?</label>
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

                                <label class="form-check-label"> Unsur Masyarakat</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Masyarakat Pengguna Layanan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Ahli/Praktisi/Akademisi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Instansi terkait</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Organisiasi masyarakat Sipil</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Media
                                            Massa</label>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname">Daftar jenis pelayanan yang
                                        diselenggarakan</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname">Dokumen standar pelayanan yang
                                        telah ditetapkan</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname">Berita Acara, Foto,
                                        Notulen</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname">Laporan Pelaksanaan Forum
                                        Konsultasi Publik</label>
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
                            data-bs-target="#collapsetiga" aria-expanded="true" aria-controls="collapsetiga">
                            Jumlah
                            media
                            publikasi untuk komponen service delivery </button>
                    </h2>
                    <div id="collapsetiga" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah Standar Pelayanan dipublikasikan?</label>
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
                                <label class="form-check-label">Apakah SP yang dipublikasikan seluruh 6 komponen service
                                    delivery?</label>
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
                                <label class="form-check-label"> Media Publikasi</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Media Cetak/ Non Elektronik</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Media Elektronik</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Media sosial</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Website</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Media
                                            Aplikasi yang bisa diunduh</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> SIPP
                                            Nasional</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Papan
                                            reklame</label>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto atau screenshot dari
                                        berbagai bentuk/media publikasi Standar Pelayanan
                                        yang dimiliki</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Screenshot publikasi di
                                        SIPPN</label>
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
                            data-bs-target="#collapseempat" aria-expanded="true" aria-controls="collapseempat">
                            Telah
                            dilakukan peninjauan ulang secara berkala terhadap Standar Pelayanan </button>
                    </h2>
                    <div id="collapseempat" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Pernyataan (pilih salah satu jawaban)</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Tidak dilaksanakan peninjauan ulang secara berkala terhadap Standar
                                            Pelayanan.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">Dilakukan
                                            peninjauan ulang 3 tahun atau lebih terhadap seluruh jenis layanan.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">Dilakukan
                                            peninjauan ulang 2 tahun atau lebih terhadap sebagian jenis layanan.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">Dilakukan
                                            peninjauan ulang 2 tahun atau lebih cepat terhadap seluruh jenis
                                            layanan.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">Dilakukan
                                            peninjauan ulang 1 tahun atau lebih cepat terhadap sebagian jenis
                                            layanan.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">Dilakukan
                                            peninjauan ulang 1 tahun atau lebih cepat terhadap seluruh jenis
                                            layanan.</label>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> BA FKP peninjauan SP</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Laporan yang berisi: Berita
                                        Acara Peninjauan Ulang SP, Rencana Aksi, dan
                                        pelaksanaan dari Rencana Aksi</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto Kegiatan</label>
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
                            data-bs-target="#collapselima" aria-expanded="true" aria-controls="collapselima">
                            Pemenuhan
                            siklus Maklumat Pelayanan (ketersediaan, penetapan, dan publikasi) </button>
                    </h2>
                    <div id="collapselima" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah tersedia maklumat pelayanan yang
                                    ditetapkan?</label>
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
                                    <div></div>
                                    <label class="form-check-label">Apakah isi maklumat pelayanan sesuai dengan peraturan
                                        perundangan yang berlaku ?</label>
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
                                    <label class="form-check-label">Apakah maklumat pelayanan dipublikasikan?</label>
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
                                    <label class="form-check-label"> jawaban dapat lebih dari satu</label>
                                    <div class="col mt-2">
                                        <div class="form-check form-check-inline">
                                            <input name="collapsible-address-type" class="form-check-input"
                                                type="checkbox" value="" id="collapsible-address-type-home"
                                                checked="" />
                                            <label class="form-check-label"
                                                for="collapsible-address-type-home">Elektronik</label>
                                        </div>
                                        <div></div>
                                        <div class="form-check form-check-inline">
                                            <input name="collapsible-address-type" class="form-check-input"
                                                type="checkbox" value="" id="collapsible-address-type-home"
                                                checked="" />
                                            <label class="form-check-label" for="collapsible-address-type-home">Non
                                                elektronik</label>
                                        </div>
                                        <div></div>
                                    </div>
                                    <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                            Dukung</b></label>
                                    <div class="col-md-6">
                                        <label class="form-label" for="collapsible-fullname"> Dokumen Pengesahan
                                            Maklumat
                                            Pelayanan</label>
                                        <input type="file" id="collapsible-fullname" class="form-control"
                                            placeholder="John Doe" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="collapsible-fullname"> Foto atau screenshot dari
                                            berbagai bentuk Publikasi Maklumat Pelayanan yang
                                            dimiliki</label>
                                        <input type="file" id="collapsible-fullname" class="form-control"
                                            placeholder="John Doe" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapseenam" aria-expanded="true" aria-controls="collapseenam">
                            SKM
                            yang
                            dilaksanakan sesuai dengan PermenPANRB </button>
                    </h2>
                    <div id="collapseenam" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah Unit Lokus telah melaksanakan Survei Kepuasan
                                    Masyarakat?</label>
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
                                <label class="form-check-label"> Berapa kali dalam satu tahun dilaksanakan SKM?</label>
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
                                <label class="form-check-label"> Berapa nilai rata-rata SKM periode terakhir? Nilai IKM
                                    ___
                                    (Nilai Konversi 100) Periode Pelaksanaan ___ (Contoh: TW IV 2021)</label>
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
                                <label class="form-check-label"> Apakah pelaksanaan SKM sesuai dengan PermenPANRB yang
                                    berlaku?</label>
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
                                <label class="form-check-label"> Apakah hasil SKM dipublikasikan?</label>
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

                                <label class="form-check-label"> jawaban dapat lebih dari satu</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label"
                                            for="collapsible-address-type-home">Elektronik</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">Non
                                            elektronik</label>
                                    </div>
                                    <div></div>
                                    <br>
                                    <div class="row g-3">
                                        <label class="form-check-label"> Apakah hasil SKM dilakukan tindak lanjut?</label>
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
                                                <label class="form-check-label" for="collapsible-address-type-office">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>
                                        <div></div>
                                    </div>
                                    <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                            Dukung</b></label>
                                    <div class="col-md-6">
                                        <label class="form-label" for="collapsible-fullname">Dokumen atau Foto
                                            pelaksanaan
                                            SKM dan media yang
                                            digunakan (misalnya alat bantu SKM elektronik dan/atau kuesioner manual)</label>
                                        <input type="file" id="collapsible-fullname" class="form-control"
                                            placeholder="John Doe" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="collapsible-fullname">Laporan hasil pelaksanaan
                                            SKM</label>
                                        <input type="file" id="collapsible-fullname" class="form-control"
                                            placeholder="John Doe" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapsetujuh" aria-expanded="true" aria-controls="collapsetujuh">
                            Jumlah
                            media
                            publikasi hasil SKM </button>
                    </h2>
                    <div id="collapsetujuh" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Sebutkan media publikasi hasil SKM (jawaban dapat lebih
                                    dari satu)</label>
                                <br>
                                <label class="form-check-label"> Media Publikasi</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Media Cetak/ Non Elektronik</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Media Elektronik</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Media sosial</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Website</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Aplikasi
                                            yang
                                            bisa diunduh</label>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto atau screenshot dari
                                        berbagai bentuk publikasi hasil SKM yang dimiliki.</label>
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
                            data-bs-target="#collapsedelapan" aria-expanded="true" aria-controls="collapsedelapan">
                            Tindak lanjut
                            hasil SKM dan kedalaman ruang lingkup untuk setiap jenis pelayanan </button>
                    </h2>
                    <div id="collapsedelapan" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah sudah dibuat rencana tindak lanjut dari SKM yang
                                    sudah dilaksanakan?</label>
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
                                <label class="form-check-label">Berapa persen rencana tindak lanjut yang direalisasikan
                                    dalam 1 tahun terakhir?</label>
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
                                <label class="form-check-label">Apakah dibuat laporan tindak lanjut yang dilakukan?
                                </label>
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
                                    <label class="form-label" for="collapsible-fullname"> Foto atau screenshot dari
                                        berbagai bentuk publikasi hasil SKM yang dimiliki.</label>
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
                            data-bs-target="#collapsesembilan" aria-expanded="true" aria-controls="collapsesembilan">
                            Kecepatan
                            tindak lanjut hasil SKM seluruh jenis pelayanan </button>
                    </h2>
                    <div id="collapsesembilan" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah hasil SKM ditindaklanjuti?</label>
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
                                <label class="form-check-label">Berapa lama tindak lanjut hasil SKM?</label>
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
                                <label class="form-check-label"> Pernyataan (pilih salah satu jawaban)</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input"
                                            type="checkbox" value="" id="collapsible-address-type-home"
                                            checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            1 tahun setelah laporan SKM terbit</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input"
                                            type="checkbox" value="" id="collapsible-address-type-home"
                                            checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            9 bulan setelah laporan SKM terbit</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input"
                                            type="checkbox" value="" id="collapsible-address-type-home"
                                            checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            6 bulan setelah laporan SKM terbit</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input"
                                            type="checkbox" value="" id="collapsible-address-type-home"
                                            checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Website</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input"
                                            type="checkbox" value="" id="collapsible-address-type-home"
                                            checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> 3 bulan
                                            setelah laporan SKM terbit</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input"
                                            type="checkbox" value="" id="collapsible-address-type-home"
                                            checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> 1 bulan
                                            setelah laporan SKM terbit</label>
                                    </div>
                                    <div></div>
                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Laporan SKM yang memuat
                                        rencana tindak lanjut dan Laporan tindak lanjut</label>
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
        {{-- <button class="btn btn-danger btn-prev waves-effect">
            <a class="nav-link" href="{{ url('sistem-informasi-pelayanan-publik') }}">Kembali</a>
        </button> --}}
        <button class="btn btn-success btn-next waves-effect waves-light">
            <span class="nav-link" type="submit">Simpan</span>
        </button>
    </div>

@endsection
