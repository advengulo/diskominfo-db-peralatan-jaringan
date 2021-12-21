@extends('layouts.app')

@section('content')
    <h1>Tangani Gangguan</h1>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                    <label for="barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="barang" value="{{$penanganan->gangguan->peralatan->nama_peralatan}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="ciri_ciri_gangguan" class="form-label">Ciri ciri gangguan</label>
                    <textarea type="text" class="form-control" id="ciri_ciri_gangguan" disabled>{{$penanganan->gangguan->ciri_ciri_gangguan}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="dampak_gangguan" class="form-label">Dampak gangguan</label>
                    <textarea type="text" class="form-control" id="dampak_gangguan" disabled>{{$penanganan->gangguan->dampak_gangguan}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="tanggal_pengajuan" class="form-label">Tanggal pengajuan</label>
                    <input type="datetime-local" class="form-control" value="{{$penanganan->gangguan->tanggal_pengajuan}}" id="tanggal_pengajuan" disabled>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form action="{{ route('penanganan.update', $penanganan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="waktu_penanganan" class="form-label">Waktu Penanganan</label>
                    <input type="datetime-local" class="form-control" name="waktu_penanganan" id="waktu_penanganan">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="mb-3">
                    <label for="tindakan" class="form-label">Tindakan</label>
                    <textarea type="text" class="form-control" name="tindakan" id="tindakan"></textarea>
                </div>
                <div class="mb-3">
                    <label for="hasil" class="form-label">Peralatan</label>
                    <select class="form-select" name="hasil" id="hasil">
                        <option value="1">Normal</option>
                        <option value="2">Rusak</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="rekomendasi" class="form-label">Rekomendasi</label>
                    <input type="text" class="form-control" name="rekomendasi" id="rekomendasi">
                </div>
                <button type="submit" class="btn btn-primary">Tangani</button>
            </form>
        </div>
    </div>
@endsection