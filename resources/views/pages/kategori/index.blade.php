@extends('layouts.app')

@section('content')
    <h1>Kategori</h1>
    <a href="{{ route('kategoris.create') }}" type="button" class="btn btn-success mb-3">Tambah Data</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil! </strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif($message = Session::get('error'))
        <div class="alert alert-alert alert-dismissible fade show" role="alert">
            <strong>Gagal! </strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-striped" id="kategori">
        <thead>
            <tr>
                <th width="20px">No</th>
                <th>Nama Kategori</th>
                <th>Jumlah Peralatan</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategoris as $kategori)
                <tr>
                    <td></td>
                    <td>{{$kategori->nama}}</td>
                    <td>{{$total[$kategori->id]}}</td>
                    <td>
                        <a href="{{ route('kategoris.edit', $kategori->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <form class="btn btn-sm" action="{{route('kategoris.destroy', $kategori->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                        {{-- <a href="{{ route('kategoris.destroy', $kategori->id)}}" class="btn btn-sm btn-danger">Hapus</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scriptJS')
    <script>    
        $(document).ready(function() {
            var tableKategori = $('#kategori').DataTable({
                'order': [[1, 'asc']]
            })
            tableKategori.on('order.dt search.dt', function () {
                tableKategori.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
        });
    </script>
@endsection