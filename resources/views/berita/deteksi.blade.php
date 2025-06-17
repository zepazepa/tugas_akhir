@extends("template.dashboard")
@section('deteksi', 'active')

@section("content")
    <div class="container">
        <div class="page-inner">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Masukkan Text Berita</h3>
                    <p class="text-muted">Minimal 100 kata</p>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs nav-line nav-color-secondary" id="line-tab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <a class="nav-link active" id="manual-tab" data-bs-toggle="pill" href="#manual" role="tab"
                                aria-controls="pills-manual" aria-selected="false" tabindex="-1">Manual</a>
                        </li>
                        <li class="nav-item " role="presentation">
                            <a class="nav-link " id="crawl-tab" data-bs-toggle="pill" href="#crawl" role="tab"
                                aria-controls="pills-crawl" aria-selected="true">Crawl Web</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3 mb-3" id="line-tabContent">
                        <div class="tab-pane fade active show" id="manual" role="tabpanel" aria-labelledby="manual-tab">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="text_berita">Teks Berita</label>
                                    <textarea class="form-control" id="text_berita" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Deteksi</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="crawl" role="tabpanel" aria-labelledby="crawl-tab">
                            <form action="" method="POST">
                                @csrf
                                <div class="form-group border rounded">
                                    <label>Sumber</label><br>
                                    <div class="d-flex">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rdoSumber"
                                                id="cnn" value="cnn" checked>
                                            <label class="form-check-label" for="cnn">
                                                CNN Indonesia
                                            </label>
                                        </div>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rdoSumber"
                                                id="detik" value="detik">
                                            <label class="form-check-label" for="detik">
                                                DETIk
                                            </label>
                                        </div>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rdoSumber"
                                                id="kompas" value="kompas">
                                            <label class="form-check-label" for="kompas">
                                                KOMPAS
                                            </label>
                                        </div>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rdoSumber"
                                                id="liputan6" value="liputan6">
                                            <label class="form-check-label" for="liputan6">
                                                LIPUTAN6
                                            </label>
                                        </div>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rdoSumber"
                                                id="tempo" value="tempo">
                                            <label class="form-check-label" for="tempo">
                                                TEMPO
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="link">Link Berita</label>
                                    <input type="text" class="form-control" id="link"></input>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">DETEKSI</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
