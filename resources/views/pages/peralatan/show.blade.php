@extends('layouts.app')

@section('content')
    <h1>Detail Peralatan</h1>
    <a href="#" type="button" class="btn btn-info mb-3">Pindahkan Barang</a>

    <div class="row">
        <div class="col-md-6">
            <h5>Informasi Utama</h5>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                    <div class="col-md-6" style="font-weight: bold">Nama Barang</div>
                    <div class="col-md-6">{{$peralatan->nama_peralatan}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="col-md-6" style="font-weight: bold">Tahun Pembelian</div>
                        <div class="col-md-6">{{$peralatan->tahun_pembelian}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="col-md-6" style="font-weight: bold">Kategori</div>
                        <div class="col-md-6">{{$peralatan->kategori->nama}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="col-md-6" style="font-weight: bold">Username</div>
                        <div class="col-md-6">{{$peralatan->username}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="col-md-6" style="font-weight: bold">Password</div>
                        <div class="col-md-6">{{$peralatan->password}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="col-md-6" style="font-weight: bold">Deskripsi Barang</div>
                        <div class="col-md-6">{{$peralatan->deskripsi_peralatan}}</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5>Informasi Tambahan</h5>
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                    <div class="col-md-6" style="font-weight: bold">Nama Barang</div>
                    <div class="col-md-6">{{$peralatan->nama_peralatan}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="col-md-6" style="font-weight: bold">Tahun Pembelian</div>
                        <div class="col-md-6">{{$peralatan->tahun_pembelian}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="col-md-6" style="font-weight: bold">Kategori</div>
                        <div class="col-md-6">{{$peralatan->kategori->nama}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="col-md-6" style="font-weight: bold">Username</div>
                        <div class="col-md-6">{{$peralatan->username}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="col-md-6" style="font-weight: bold">Password</div>
                        <div class="col-md-6">{{$peralatan->password}}</div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="col-md-6" style="font-weight: bold">Deskripsi Barang</div>
                        <div class="col-md-6">{{$peralatan->deskripsi_peralatan}}</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection