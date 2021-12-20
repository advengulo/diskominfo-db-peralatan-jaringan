@extends('layouts.app')

@section('content')
    <h1>Kategori</h1>
    <a href="{{ route('kategoris.create') }}" type="button" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-bordered data-table" id="kategori_table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                {{-- <th>Jumlah Peralatan</th> --}}
                <th width="200px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategoris as $kategori)
                <tr>
                    <td></td>
                    <td>{{$kategori->nama}}</td>
                    {{-- <td></td> --}}
                    <td>
                        <a href="{{ route('kategoris.edit', $kategori->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('kategoris.destroy', $kategori->id)}}" class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scriptJS')
    <script>    
        $(document).ready(function() {
            var tableKategori = $('#kategori_table').DataTable({
                "scrollX": true,
                // "pageLength": 25,
                // 'columnDefs': [
                //     {
                //     'targets': 3,
                //     'searchable': false,
                //     'orderable': false,
                //     },
                // ],
                'order': [[1, 'asc']],
            });
            tableKategori.on('order.dt search.dt', function () {
                tableKategori.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
        });
    </script>
@endsection