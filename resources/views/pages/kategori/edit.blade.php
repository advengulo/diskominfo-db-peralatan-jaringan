@extends('layouts.app')

@section('content')
    <h1>Edit Kategori</h1>
    <div class="row col-md-4">
        <form action="{{ route('kategoris.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" value="{{$kategori->nama}}" name="nama" id="nama_kategori">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection