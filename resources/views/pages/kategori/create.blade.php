@extends('layouts.app')

@section('content')
    <h1>Tambah Kategori</h1>
    <div class="row col-md-4">
        <form action="{{ route('kategoris.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" name="nama" id="nama_kategori">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
@endsection