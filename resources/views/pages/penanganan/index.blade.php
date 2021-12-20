@extends('layouts.app')

@section('content')
    <h1>Peralatan</h1>
    <table class="table table-bordered data-table" id="peralatan_table">
        <thead>
            <tr>
                <th>No</th>
                <th>ID Peralatan</th>
                <th>Ciri ciri gangguan</th>
                <th>Dampak Gangguan</th>
                <th>Tanggal Pengajuan</th>
                <th>status</th>
                <th width="200px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penanganans as $penanganan)
                <tr>
                    <td></td>
                    <td>{{$penanganan->id_peralatan}}</td>
                    <td>{{$penanganan->ciri_ciri_gangguan}}</td>
                    <td>{{$penanganan->dampak_gangguan}}</td>
                    <td>{{$penanganan->tanggal_pengajuan}}</td>
                    <td>{{$penanganan->status}}</td>
                    <td>
                        {{-- <a href="{{ route('penanganans.show', $penanganan->id)}}" class="btn btn-sm btn-primary">Lihat</a> --}}
                        <a href="{{ route('penanganans.edit', $penanganan->id)}}" class="btn btn-sm btn-warning">Tanganin</a>
                        {{-- <a href="{{ route('penanganans.destroy', $penanganan->id)}}" class="btn btn-sm btn-danger">Hapus</button> --}}
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