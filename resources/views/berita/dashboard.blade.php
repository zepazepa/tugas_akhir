@extends("template.dashboard")
@section('index', 'active')

@section("content")
    <div class="container p-3">
        <div class="page-inner">

            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h1 class="fw-bold mb-3">Dashboard</h1>
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-primary btn-round">
                        <span class="btn-label">
                            <i class="fa fa-bookmark"></i>
                        </span>
                        Deteksi Berita</a>
                </div>
            </div>
            <div class="row mb-4 justify-content-center">
                <div class="col-md-4 col-6">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-primary bubble-shadow-small">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Total Berita</p>
                                        <h4 class="card-title">{{ $totalBerita }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                @foreach ($kategoriCount as $k => $v)
                    <div class="col-md-4 col-6">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-icon">
                                        <div class="icon-big text-center icon-info bubble-shadow-small">
                                            <i class="{{ $kategoriIcons[$k]}}"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats ms-3 ms-sm-0">
                                        <div class="numbers">
                                            <p class="card-category">{{ $k}}</p>
                                            <h4 class="card-title">{{  $v}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- Pie Chart Kategori --}}
            <div class="row mb-4 justify-content-around">
                <div class="col-md-5 ">
                    <div class="card">
                        <div class="card-header">
                            <h3>Distribusi Kategori</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="kategoriChart" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 ">
                    <div class="card">
                        <div class="card-header">
                            <h3>Distribusi Sumber</h3>
                        </div>
                        <div class="card-body">
                            <canvas id="sumberChart" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-html-legend"></script>

    <script>
        const kategoriIcons = {!! json_encode($kategoriIcons ?? []) !!};

        const kategoriChart = new Chart(document.getElementById('kategoriChart'), {
            type: 'pie',
            data: {
                labels: {!! json_encode($kategoriCount->keys()) !!},
                datasets: [{
                    data: {!! json_encode($kategoriCount->values()) !!},
                    backgroundColor: [
                        '#007bff', '#28a745', '#ffc107', '#dc3545', '#6f42c1', '#17a2b8'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    },
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            let label = context.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed !== null) {
                                label += context.parsed + ' berita';
                            }
                            return label;
                        }
                    }
                }
            }
        });
        const sumberChart = new Chart(document.getElementById('sumberChart'), {
            type: 'pie',
            data: {
                labels: {!! json_encode($sumberCount->keys()) !!},
                datasets: [{
                    data: {!! json_encode($sumberCount->values()) !!},
                    backgroundColor: ['#cc0000', '#007bff', '#00558a', '#ff5e13', '#b71c1c']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    },
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            let label = context.label || '';
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed !== null) {
                                label += context.parsed + ' berita';
                            }
                            return label;
                        }
                    }
                }
            }
        });


    </script>

@endpush