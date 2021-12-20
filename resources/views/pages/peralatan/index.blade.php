@extends('layouts.app')

@section('content')
    <h1>Peralatan</h1>
    <a href="{{ route('peralatans.create') }}" type="button" class="btn btn-success mb-3">Tambah Data</a>
    <table class="table table-bordered data-table">
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
                    <td>{{$peralatan->status}}</td>
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