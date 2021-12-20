@extends('layouts.app')

@section('content')
    <h1>Tambah Gangguan Peralatan</h1>
    <div class="row col-md-4">
        <form action="{{ route('gangguan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="barang" class="form-label">Peralatan</label>
                <select class="form-select" name="id_peralatan">
                    <option selected disable>Pilih Barang</option>
                    @foreach ($peralatans as $peralatan)
                        <option value="{{$peralatan->id}}">{{$peralatan->nama_peralatan}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="ciri_ciri_gangguan" class="form-label">Ciri ciri gangguan</label>
                <textarea type="text" class="form-control" name="ciri_ciri_gangguan" id="ciri_ciri_gangguan"></textarea>
            </div>
            <div class="mb-3">
                <label for="dampak_gangguan" class="form-label">Dampak gangguan</label>
                <textarea type="text" class="form-control" name="dampak_gangguan" id="dampak_gangguan"></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal_pengajuan" class="form-label">Tanggal pengajuan</label>
                <input type="datetime-local" class="form-control" name="tanggal_pengajuan" id="tanggal_pengajuan">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection