@extends('layouts.app')

@section('content')
    <h1>Tambah Peralatan</h1>
    <div class="row col-md-4">
        <form action="{{ route('peralatans.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select class="form-select" name="kategori_id">
                    <option selected disable>Pilih kategori Peralatan</option>
                    @foreach ($kategoris as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama_peralatan" class="form-label">Nama Peralatan</label>
                <input type="text" class="form-control" name="nama_peralatan" id="nama_peralatan">
            </div>
            <div class="mb-3">
                <label for="tahun_pembelian" class="form-label">Tahun Pembelian</label>
                <input type="date" class="form-control" name="tahun_pembelian" id="tahun_pembelian">
            </div>
            <div class="mb-3">
                <label for="deskripsi_peralatan" class="form-label">Deskripsi Peralatan</label>
                <textarea type="text" class="form-control" name="deskripsi_peralatan" id="deskripsi_peralatan"></textarea>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection