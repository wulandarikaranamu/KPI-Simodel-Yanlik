@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/cards-statistics.js') }}"></script>
    <script src="{{ asset(mix('assets/js/charts-apex.js')) }}"></script>
@endsection

@section('title', 'Home')

@section('content')
    <h4>Home Page</h4>
    <div class="row">
        <!-- Statistics -->
        <div class="col-lg-12 mb-4 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Pelayanan Publik</h5>
                    <small class="text-muted">Updated 1 month ago</small>
                </div>
                <div class="card-body pt-2">
                    <div class="row gy-3">
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-primary me-3 p-2"><i
                                        class="ti ti-building-skyscraper ti-sm"></i>
                                </div>
                                <div class="card-info">
                                    <h5 class="mb-0">51</h5>
                                    <small>SKPD</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-info me-3 p-2"><i
                                        class="ti ti-building-skyscraper ti-sm"></i>
                                </div>
                                <div class="card-info">
                                    <h5 class="mb-0">15</h5>
                                    <small>Kecamatan</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-danger me-3 p-2"><i class="ti ti-users ti-sm"></i>
                                </div>
                                <div class="card-info">
                                    <h5 class="mb-0">11088</h5>
                                    <small>Pegawai</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="d-flex align-items-center">
                                <div class="badge rounded-pill bg-label-success me-3 p-2"><i
                                        class="ti ti-chart-dots ti-sm"></i></div>
                                <div class="card-info">
                                    <h5 class="mb-0">3,5</h5>
                                    <small>Nilai Rata-rata Pelayanan</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards with few info -->
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h5 class="mb-0 me-2">9</h5>
                        <small>Jumlah Indikator Kebijakan Pelayanan</small>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-label-primary rounded-pill p-2">
                            <i class='ti ti-server ti-sm'></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h5 class="mb-0 me-2">5</h5>
                        <small>Jumlah Indikator Profesionalisme SDM</small>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-label-success rounded-pill p-2">
                            <i class='ti ti-server ti-sm'></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h5 class="mb-0 me-2">6</h5>
                        <small>Jumlah Indikator Sarana Prasarana</small>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-label-danger rounded-pill p-2">
                            <i class='ti ti-server ti-sm'></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h5 class="mb-0 me-2">4</h5>
                        <small>Jumlah Indikator Sistem Informasi Pelayanan Publik</small>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-label-warning rounded-pill p-2">
                            <i class='ti ti-server ti-sm'></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h5 class="mb-0 me-2">4</h5>
                        <small>Jumlah Indikator Konsultasi dan Pengaduan</small>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-label-danger rounded-pill p-2">
                            <i class='ti ti-server ti-sm'></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="card-title mb-0">
                        <h5 class="mb-0 me-2">2</h5>
                        <small>Jumlah Indikator Inovasi</small>
                    </div>
                    <div class="card-icon">
                        <span class="badge bg-label-warning rounded-pill p-2">
                            <i class='ti ti-server ti-sm'></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <!-- Donut Chart -->
        <div class="col-lg-12 col-md-6 col-12 mb-4">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="card-title mb-0">Persentase Nilai Unit Penyelenggara</h5>
                        <small class="text-muted">Persentase Per-SKPD Tahun 2023</small>
                    </div>
                    <div class="dropdown d-none d-sm-flex">
                        <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="ti ti-calendar"></i></button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">2020</a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">2021</a>
                            </li>
                            <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">2022</a></li>
                            <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">2023</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div id="donutChart"></div>
                </div>
            </div>
        </div>
        <!-- /Donut Chart -->
    </div>
@endsection
