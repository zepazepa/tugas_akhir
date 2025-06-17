@extends("template.dashboard")
@section('berita','active')
@section("content")
    <div class="container ml-3 my-4 px-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Daftar Berita</h2>

            <form method="GET" action="{{ route('berita.index') }}">
                <label for="perPage">Tampilkan:</label>
                <select name="perPage" id="perPage" onchange="this.form.submit()" class="form-select d-inline-block w-auto ms-2">
                    <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                    <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>100</option>
                    <option value="200" {{ $perPage == 200 ? 'selected' : '' }}>200</option>
                </select>
                <label for="direction">Secara:</label>
                <select name="direction" id="direction" onchange="this.form.submit()" class="form-select d-inline-block w-auto ms-2">
                    <option value="asc" {{ $direction == 'asc' ? 'selected' : '' }}>Ascending ↑</option>
                    <option value="desc" {{ $direction == 'desc' ? 'selected' : '' }}>Descending ↓</option>
                </select>
            </form>
        </div>
        <table class="table table-striped shadow" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Sumber</th>
                    <th>Link</th>
                    <th>Ditambahkan Pada</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach($berita as $b)
                    <tr>
                        <td>{{ $b->id }}</td>
                        <td>{{ $b->judul }}</td>
                        <td>{{ $b->kategori }}</td>
                        <td>{{ $b->sumber }}</td>
                        <td>
                            <a href="{{ $b->link }}" class="btn btn-primary">Link</a>
                        </td>
                        <td>{{ $b->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $berita->links() }}
        </div>

    </div>


@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#beritaTable').DataTable({
        responsive: true
    });
});
</script>
@endpush
