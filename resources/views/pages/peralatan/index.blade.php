@extends('layouts.app')

@section('content')
    <h1>Peralatan</h1>
    <a href="{{ route('peralatans.create') }}" type="button" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-bordered data-table" id="peralatan_table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Alat</th>
                <th>Tahun Pembelian</th>
                <th>Deskripsi Peralatan</th>
                <th>Kategori</th>
                <th>Username</th>
                <th>Password</th>
                <th>Status</th>
                <th width="200px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peralatans as $peralatan)
                <tr>
                    <td></td>
                    <td>{{$peralatan->nama_peralatan}}</td>
                    <td>{{$peralatan->tahun_pembelian}}</td>
                    <td>{{$peralatan->deskripsi_peralatan}}</td>
                    <td>{{$peralatan->kategori->nama}}</td>
                    <td>{{$peralatan->username}}</td>
                    <td>{{$peralatan->password}}</td>
                    <td>
                        @if ($peralatan->status == "Baik")
                            <span class="badge bg-primary">{{$peralatan->status}}</span>
                        @elseif ($peralatan->status == "Rusak Sementara")
                            <span class="badge bg-warning">{{$peralatan->status}}</span>
                        @else
                            <span class="badge bg-danger">{{$peralatan->status}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('peralatans.show', $peralatan->id)}}" class="btn btn-sm btn-primary">Lihat</a>
                        <a href="{{ route('peralatans.edit', $peralatan->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('peralatans.destroy', $peralatan->id)}}" class="btn btn-sm btn-danger">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scriptJS')
    <script>    
        $(document).ready(function() {
            var tablePeralatan = $('#peralatan_table').DataTable({
                "scrollX": true,
                "pageLength": 25,
                'columnDefs': [
                    {
                    'targets': 8,
                    'searchable': false,
                    'orderable': false,
                    },
                ],
                'order': [[1, 'asc']],
            });
            tablePeralatan.on('order.dt search.dt', function () {
                tablePeralatan.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
            }).draw();
        });
    </script>
@endsection