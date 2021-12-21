@extends('layouts.app')

@section('content')
    <h1>Daftar gangguan</h1>
    <table class="table table-striped" id="peralatan_table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Peralatan</th>
                <th>Ciri ciri gangguan</th>
                <th>Dampak Gangguan</th>
                <th>Tanggal Pengajuan</th>
                <th>status</th>
                <th>Waktu Penanganan</th>
                <th>Nama</th>
                <th>Tindakan</th>
                <th>Hasil</th>
                <th>Rekomendasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penanganans as $penanganan)
                <tr>
                    <td></td>
                    <td>{{$penanganan->gangguan->peralatan->nama_peralatan}}</td>
                    <td>{{$penanganan->gangguan->ciri_ciri_gangguan}}</td>
                    <td>{{$penanganan->gangguan->dampak_gangguan}}</td>
                    <td>{{$penanganan->gangguan->tanggal_pengajuan}}</td>
                    <td>
                        @if ($penanganan->gangguan->status == true)
                            <span class="badge rounded-pill bg-success">Close</span>
                        @else
                            <span class="badge rounded-pill bg-danger">Open</span>
                        @endif
                    </td>
                    <td>{{$penanganan->waktu_penanganan}}</td>
                    <td>{{$penanganan->nama}}</td>
                    <td>{{$penanganan->tindakan}}</td>
                    <td>{{$penanganan->hasil}}</td>
                    <td>{{$penanganan->rekomendasi}}</td>
                    <td>
                        @if ($penanganan->gangguan->status == true)
                            <span class="btn btn-sm btn-success">Selesai</span>
                        @else
                            <a href="{{ route('penanganan.edit', $penanganan->id)}}" class="btn btn-sm btn-warning">Tangani</a>
                        @endif
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
                    'targets': 6,
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