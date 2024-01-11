@extends('layouts/layoutMaster')

@section('title', 'Sistem Informasi Pelayanan Publik')

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
        <span class="text-muted fw-light">F01-SKPD /</span> Sistem Informasi Pelayanan Publik
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
                <li class="nav-item"><a class="nav-link active" href="{{ url('sistem-informasi-pelayanan-publik') }}"><i
                            class="ti-xs ti ti-bell me-1"></i> Sistem Informasi Pelayanan Publik</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('konsultasi-dan-pengaduan') }}"><i
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
            <div class="accordion" id="collapsibleSection">
                <h6> Sistem Informasi Pelayanan Publik</h6>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapseduasatu" aria-expanded="true" aria-controls="collapseduasatu">
                            Sistem informasi pelayanan publik untuk informasi
                            publik </button>
                    </h2>
                    <div id="collapseduasatu" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah tersedia sistem informasi pelayanan publik
                                    (SIPP)?</label>
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
                                <label class="form-check-label">Jika Ya, SIPP yang tersedia berupa : (boleh dicentang
                                    lebih dari 1)</label>
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
                                <div class="form-check form-check-inline">
                                    <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                        value="" id="collapsible-address-type-home" checked="" />
                                    <label class="form-check-label" for="collapsible-address-type-home">
                                        SIPP secara Elektronik</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                        value="" id="collapsible-address-type-home" checked="" />
                                    <label class="form-check-label" for="collapsible-address-type-home">
                                        SIPP secara Non Elektronik</label>
                                </div>
                                <label class="form-check-label">SIPP non elektronik tersedia berupa: (boleh dicentang
                                    lebih dari 1)</label>
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
                                <div class="form-check form-check-inline">
                                    <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                        value="" id="collapsible-address-type-home" checked="" />
                                    <label class="form-check-label" for="collapsible-address-type-home">
                                        Lisan (pusat informasi)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                        value="" id="collapsible-address-type-home" checked="" />
                                    <label class="form-check-label" for="collapsible-address-type-home">
                                        Papan pengumuman</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                        value="" id="collapsible-address-type-home" checked="" />
                                    <label class="form-check-label" for="collapsible-address-type-home">
                                        Media cetak</label>
                                </div>
                                <label class="form-check-label">SIPP elektronik tersedia berupa</label>
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
                                <div class="form-check form-check-inline">
                                    <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                        value="" id="collapsible-address-type-home" checked="" />
                                    <label class="form-check-label" for="collapsible-address-type-home">
                                        Internet / Belum Online</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                        value="" id="collapsible-address-type-home" checked="" />
                                    <label class="form-check-label" for="collapsible-address-type-home">
                                        Online / website</label>
                                </div>
                                <label class="form-check-label"> Apakah telah menggunakan sistem Informasi Pelayanan
                                    Publik Nasional?</label>
                                <br>
                                <label class="form-check-label"> isikan akun pengguna pada SIPPN:</label>
                                <div class="col-12">
                                    <label class="form-label" for="collapsible-address">Keterangan</label>
                                    <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                        placeholder="1456, Mall Road"></textarea>
                                </div>
                                <label class="form-check-label"> Berapa jumlah layanan yang sudah diinputkan pada Sistem
                                    Informasi Pelayanan Publik Nasional?</label>
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
                                <div class="col-12">
                                    <label class="form-label" for="collapsible-address">Keterangan</label>
                                    <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                        placeholder="1456, Mall Road"></textarea>
                                </div>

                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Akun pengguna pada
                                        SIPPN</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Screenshot tampilan akun unit
                                        layanan pada SIPPN yang menampilkan jumlah
                                        layanan yang telah diinput pada SIPPN</label>
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
                            data-bs-target="#collapseduadua" aria-expanded="true" aria-controls="collapseduadua">
                            Sistem informasi pelayanan publik pendukung
                            operasional pelayanan </button>
                    </h2>
                    <div id="collapseduadua" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Unsur pendukung sistem informasi pelayanan publik
                                    (dapat lebih dari satu)</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Pengelolaan Pengaduan SP4N-LAPOR</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Survey Kepuasan Masyarakat</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            SDM: Aplikasi atau website pengelola kepegawaian</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            FAQ</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Pengelolaan
                                            keuangan pelayanan publik bagi layanan berbayar</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Atau unsur
                                            pendukung lainnya</label>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Lampirkan foto/screenshot
                                        website</label>
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
                            data-bs-target="#collapseduatiga" aria-expanded="true" aria-controls="collapseduatiga">
                            Kualitas penggunaan SIPP Elektronik </button>
                    </h2>
                    <div id="collapseduatiga" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah telah memiliki SIPP Elektronik?</label>
                                <label class="form-check-label"> Apakah SIPP Elektronik berbasis website/aplikasi mudah
                                    dioperasikan?</label>
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
                                <label class="form-check-label">Apakah SIPP Elektronik berbasis website/aplikasi mudah
                                    diakses?</label>
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
                                <label class="form-check-label">Apakah SIPP Elektronik berbasis website/aplikasi memiliki
                                    navigasi yang memudahkan
                                    pengguna layanan?</label>
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
                                <label class="form-check-label">Apakah SIPP Elektronik berbasis website/aplikasi
                                    menggunakan kanal resmi pemerintah (domain.go.id)?</label>
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
                                <label class="form-check-label">Apakah SIPP Elektronik berbasis website/aplikasi memiliki
                                    fungsi yang kompatibel?</label>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapseduaempat" aria-expanded="true" aria-controls="collapseduaempat">
                            Pemutakhiran data dan informasi kanal digital.
                        </button>
                    </h2>
                    <div id="collapseduaempat" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah terdapat pemutakhiran informasi pelayanan
                                    publik?</label>
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
                                <label class="form-check-label">Berapa lama jangka waktu pemutakhiran informasi pelayanan
                                    publik? (pilih salah satu)</label>
                                <label class="form-check-label"> Jangka Waktu Pemutakhiran </label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Tahunan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Per Enam Bulan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Bulanan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Mingguan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="radio"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Setiap
                                            hari</label>
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
            <a class="nav-link" href="{{ url('sarana-prasarana') }}">Kembali</a>
        </button>
        <button class="btn btn-success btn-next waves-effect waves-light">
            <span class="nav-link" type="submit">Simpan</span>
        </button>
    </div>

@endsection
