@extends('layouts/layoutMaster')

@section('title', 'Profesionalisme SDM')

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
        <span class="text-muted fw-light">F01-SKPD /</span> Profesionalisme SDM
    </h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-4">
                <li class="nav-item"><a class="nav-link" href="{{ url('kebijakan-pelayanan') }}"><i
                            class="ti-xs ti ti-users me-1"></i>
                        Kebijakan Pelayanan</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ url('profesionalisme-sdm') }}"><i
                            class="ti-xs ti ti-lock me-1"></i> Profesionalisme SDM</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('sarana-prasarana') }}"><i
                            class="ti-xs ti ti-file-description me-1"></i> Sarana Prasarana</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('sistem-informasi-pelayanan-publik') }}"><i
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
                <h6> Profesionalisme SDM </h6>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapsesepuluh" aria-expanded="true" aria-controls="collapsesepuluh">
                            Tersedia
                            waktu pelayanan yang memudahkan pengguna layanan </button>
                    </h2>
                    <div id="collapsesepuluh" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah tersedia waktu pelayanan yang memudahkan pengguna
                                    layanan?</label>
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
                                <label class="form-check-label">Bagaimana pelaksanaan poin nomor 1 tersebut?</label>
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
                                <label class="form-check-label"> Boleh memilih lebih dari satu</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Memiliki kebijakan jam pelayanan/kerja</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Tidak ada jeda pelayanan yang berarti istirahat pegawai dilakukan secara
                                            bergilir (shift) yang dapat dibuktikan dari publikasi jam layanan kepada
                                            masyarakat.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Penambahan waktu layanan di luar jam pelayanan yang sudah ditentukan (masih di
                                            hari kerja).</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Penambahan waktu layanan di luar hari kerja namun dalam kondisi tertentu (Misal:
                                            Pembukaan CPNS, LAPOR SPT Tahunan).</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Layanan 24
                                            Jam: layanan yang merupakan inti pelayanan atau pendaftaran.</label>
                                    </div>
                                    <div></div>
                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Surat perintah lembur (nota
                                        dinas/memo/dll), Surat Tugas pemberian pelayanan pada hari libur, dan Foto
                                        kegiatan.</label>
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
                            data-bs-target="#collapsesebelas" aria-expanded="true" aria-controls="collapsesebelas">
                            Tersedia Kode
                            Etik dan Kode Perilaku Pelaksana dan/atau Budaya Pelayanan di lingkungan instansi.
                        </button>
                    </h2>
                    <div id="collapsesebelas" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah sudah tersedia Aturan Perilaku dan Kode Etik
                                    Pelaksana
                                    Pelayanan?</label>
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
                                <label class="form-check-label"> Aturan Perilaku dan Kode Etik Pelaksana Pelayanan
                                    meliputi:</label>
                                <label class="form-check-label"> Pernyataan (dapat dipilih lebih dari satu)</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Nilai dasar hak dan kewajiban</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Larangan KKN</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Larangan diskriminasi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Sanksi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label"
                                            for="collapsible-address-type-home">Penghargaan</label>
                                    </div>
                                    <div></div>
                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Dokumen kode etik dan kode
                                        perilaku.</label>
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
                            data-bs-target="#collapseduabelas" aria-expanded="true" aria-controls="collapseduabelas">
                            Tersedia
                            mekanisme yang dibangun unit kerja untuk menjaga dan meningkatkan
                            motivasi kerja Pelaksana pelayanan. </button>
                    </h2>
                    <div id="collapseduabelas" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah tersedia mekanisme yang dibangun Unit Kerja untuk
                                    menjaga
                                    dan meningkatkan motivasi kerja?</label>
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
                                <label class="form-check-label"> Bagaimana mekanisme yang dibangun Unit Kerja untuk
                                    menjaga dan
                                    meningkatkan motivasi kerja pelaksana pelayanan?</label>
                                <br>
                                <label class="form-check-label"> Jenis Mekanisme Peningkatan Motivasi Kerja (dapat dipilih
                                    lebih dari satu)</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Pemberian penghargaan.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Pemberian kesempatan untuk mengikuti diklat.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Pengembangan kapasitas melalui kesempatan mengikuti program beasiswa.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Program konseling.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Program
                                            team/capacity building.</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Mekanisme
                                            lainnya yang dapat meningkatkan motivasi kerja pegawai.</label>
                                    </div>
                                    <div></div>
                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Dokumentasi/foto pelaksanaan
                                        program/kegiatan</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Peraturan</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Video</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Informasi lainnya yang
                                        relevan.</label>
                                    <input type="file" id="collapsible-fullname" class="form-control"
                                        placeholder="John Doe" />
                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Bukti dukung yang disampaikan
                                        paling tidak dalam jangka waktu 1 tahun terakhir.</b></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapsetigabelas" aria-expanded="true" aria-controls="collapsetigabelas">
                            Tersedia
                            kriteria pemberian penghargaan bagi pelaksana layanan yang berprestasi. </button>
                    </h2>
                    <div id="collapsetigabelas" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah kriteria yang digunakan dalam pemberian
                                    penghargaan?</label>
                                <br>
                                <label class="form-check-label"> Dapat dipilih lebih dari satu</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Kehadiran</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Kinerja</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Kerja Sama</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Inovatif/Kreativ</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Penampilan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Tidak
                                            Pernah menerima komplain dari pengguna layanan</label>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> SK yang mengatur mengenai
                                        pemberian penghargaan.</label>
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
                            data-bs-target="#collapseempatbelas" aria-expanded="true" aria-controls="collapseempatbelas">
                            Budaya
                            Layanan </button>
                    </h2>
                    <div id="collapseempatbelas" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Bagaimana budaya pelayanan yang diterapkan oleh unit
                                    layanan dan diperlihatkan oleh Pelaksana layanan?</label>
                                <br>
                                <label class="form-check-label"> Dapat dipilih lebih dari satu</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Mengenakan pakaian seragam</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Mengenakan identitas nama</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            PIN/atribut/logo unit pelayanan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Aturan penerapan 5S (Senyum, salam, sapa, sopan dan santun)</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Nilai-nilai budaya layanan</label>
                                    </div>
                                    <div></div>
                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> bukti dukung (pegawai
                                        menerapkan budaya pelayanan).</label>
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
            <a class="nav-link" href="{{ url('kebijakan-pelayanan') }}">Kembali</a>
        </button>
        <button class="btn btn-success btn-next waves-effect waves-light">
            <span class="nav-link" type="submit">Simpan</span>
        </button>
    </div>

@endsection
