@extends('layouts/layoutMaster')

@section('title', 'Sarana Prasarana-V2')

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
        <span class="text-muted fw-light">F01-SKPD /</span> Sarana Prasarana-V2
    </h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-4">
                <li class="nav-item"><a class="nav-link " href="{{ url('kebijakan-pelayanan-v2') }}"><i
                            class="ti-xs ti ti-users me-1"></i>
                        Kebijakan Pelayanan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('profesionalisme-sdm-v2') }}"><i
                            class="ti-xs ti ti-lock me-1"></i> Profesionalisme SDM</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ url('sarana-prasarana-v2') }}"><i
                            class="ti-xs ti ti-file-description me-1"></i> Sarana Prasarana</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('sistem-informasi-pelayanan-publik-v2') }}"><i
                            class="ti-xs ti ti-bell me-1"></i> Sistem Informasi Pelayanan Publik</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ url('konsultasi-dan-pengaduan-v2') }}"><i
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

    <!-- Sarana Prasarana-v2 -->
    <div class="row my-4">
        <div class="col">
            <div class="accordion" id="collapsibleSection">
                <h6> Sarana Prasarana</h6>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingDeliveryAddress">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#collapselimabelas" aria-expanded="true" aria-controls="collapselimabelas">
                            Tersedia tempat parkir dengan fasilitas
                            pendukung.
                        </button>
                    </h2>
                    <div id="collapselimabelas" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah tersedia tempat parkir kendaraan bermotor bagi
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
                                <label class="form-check-label">Apakah terdapat fasilitas parkir :</label>
                                <br>
                                <label class="form-check-label"> Dapat dipilih lebih dari satu</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Ketersediaan parkir roda dua dan roda empat</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Petugas parkir</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            CCTV</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Penitipan jaket/helm</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Pelindung
                                            (Kanopi/atap bahan lain)</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Drive
                                            Thru</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Lainnya …
                                            (sebutkan)</label>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="collapsible-address">Keterangan</label>
                                        <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                            placeholder="1456, Mall Road"></textarea>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto tempat parkir dan seluruh
                                        fasilitas parkir yang ada</label>
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
                            data-bs-target="#collapseenambelas" aria-expanded="true" aria-controls="collapseenambelas">
                            Kelayakan fasilitas ruang tunggu pelayanan
                        </button>
                    </h2>
                    <div id="collapseenambelas" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Sebutkan fasilitas kenyamanan ruang tunggu di Unit
                                    Saudara</label>
                                <br>
                                <label class="form-check-label"><b>Fasilitas Wajib</b></label>

                                <label class="form-check-label"> Dapat dipilih lebih dari satu</label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Kursi Tunggu</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Pendingin/Sirkulasi Ruangan</label>
                                    </div>
                                    <div></div>
                                    <label class="form-check-label"><b>Fasilitas Tambahan</b></label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Air Minum</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Bahan bacaan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> pengisi
                                            daya baterai alat komunikasi/charger booth</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            televisi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            hotspot/wifi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Lainnya …
                                            (sebutkan)</label>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="collapsible-address">Keterangan</label>
                                        <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                            placeholder="1456, Mall Road"></textarea>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto/Video fasilitas ruang
                                        tunggu/data dukung</label>
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
                            data-bs-target="#collapsetujuhbelas" aria-expanded="true" aria-controls="collapsetujuhbelas">
                            Tersedia sarana toilet pengguna layanan yang
                            layak
                            pakai. </button>
                    </h2>
                    <div id="collapsetujuhbelas" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah tersedia toilet untuk pengguna layanan?</label>
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
                                <label class="form-check-label">Sebutkan fasilitas pada toilet :</label>

                                <label class="form-check-label"><b> Fasilitas Toilet </b></label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Ketersediaan toilet pria dan wanita</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Wastafel</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Toiletries (tissue, sabun, tempat sampah)</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Air Bersih</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Monev
                                            intensitas petugas membersihkan toilet</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Lainnya …
                                            (sebutkan)</label>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="collapsible-address">Keterangan</label>
                                        <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                            placeholder="1456, Mall Road"></textarea>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto/Video fasilitas ruang
                                        tunggu/data dukung</label>
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
                            data-bs-target="#collapsedelapanbelas" aria-expanded="true"
                            aria-controls="collapsedelapanbelas"> Tersedia sarana prasarana bagi pengguna
                            layanan
                            klompok rentan </button>
                    </h2>
                    <div id="collapsedelapanbelas" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Sebutkan sarana prasarana bagi pengguna layanan kelompok
                                    rentan di unit Saudara!</label>
                                <label class="form-check-label"><b>Sarana Prasarana</b></label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Kursi roda/tongkat/kruk</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Pintu masuk yang mudah diakses</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Step lobby/ramp/jalan landai dengan pegangan rambat</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Lift khusus disertai huruf braille (apabila lokasi layanan berada di lantai 2.
                                            Apabila di lantai 1, tetap dipilih)</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Selasar
                                            yang menghubungkan semua ruangan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Toilet
                                            khusus</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Loket
                                            khusus</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Ruang
                                            tunggu khusus</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Guiding
                                            block</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Parkir
                                            khusus yang mudah diakses</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Alat bantu
                                            tuna netra/tuna rungu (huruf braille)</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Arena
                                            bermain anak</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Ruang
                                            Laktasi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Fasilitas
                                            lain sebagai pendukung layanan bagi kelompok
                                            rentan (petugas pemandu, petugas yang mampu berbahasa
                                            isyarat)</label>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto/Video fasilitas ruang
                                        tunggu/data dukung</label>
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
                            data-bs-target="#collapsesembilanbelas" aria-expanded="true"
                            aria-controls="collapsesembilanbelas"> Tersedia sarana prasarana penunjang
                        </button>
                    </h2>
                    <div id="collapsesembilanbelas" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> Apakah tersedia sarana prasarana penunjang berikut di
                                    unit pelayanan Saudara? </label>

                                <label class="form-check-label"> <b>Sarana Prasarana</b></label>
                                <div class="col mt-2">
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Fotocopy/ATK</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            P3K</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            APAR</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            kantin untuk pengguna layanan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Ruang
                                            Ibadah</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Area
                                            merokok di luar ruang pelayanan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Jalu
                                            evakuasi / titik kumpul</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Ruang
                                            Laktasi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Tempat
                                            sampah</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            CCTV</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Lainnya …
                                            (Sebutkan)</label>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="collapsible-address">Keterangan</label>
                                        <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                            placeholder="1456, Mall Road"></textarea>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto/Video sarpras
                                        penunjang/data dukung</label>
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
                            data-bs-target="#collapseduapuluh" aria-expanded="true" aria-controls="collapseduapuluh">
                            Fasilitas pada Sarana Front Office (FO) bagian
                            Informasi di unit layanan. </button>
                    </h2>
                    <div id="collapseduapuluh" class="accordion-collapse collapse show"
                        data-bs-parent="#collapsibleSection">
                        <div class="accordion-body">
                            <div class="row g-3">
                                <label class="form-check-label"> <b>Sarana FO</b></label>
                                <div class="col mt-2">
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
                                            Meja /kursi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Layar /display informasi</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home">
                                            Bahan cetak informasi layanan</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> MRegister
                                            tamu
                                            (manual/elektronik)</label>
                                    </div>
                                    <div></div>
                                    <div class="form-check form-check-inline">
                                        <input name="collapsible-address-type" class="form-check-input" type="checkbox"
                                            value="" id="collapsible-address-type-home" checked="" />
                                        <label class="form-check-label" for="collapsible-address-type-home"> Lainnya …
                                            (Sebutkan)</label>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="collapsible-address">Keterangan</label>
                                        <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2"
                                            placeholder="1456, Mall Road"></textarea>
                                    </div>
                                    <div></div>

                                </div>
                                <label class="form-label" for="collapsible-fullname"><b>Lampiran Bukti
                                        Dukung</b></label>
                                <div class="col-md-6">
                                    <label class="form-label" for="collapsible-fullname"> Foto/Video sarpras
                                        penunjang/data dukung</label>
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
            <a class="nav-link" href="{{ url('profesionalisme-sdm-v2') }}">Kembali</a>
        </button>
        <button class="btn btn-success btn-next waves-effect waves-light">
            <span class="nav-link" type="submit">Simpan</span>
        </button>
    </div>
@endsection
