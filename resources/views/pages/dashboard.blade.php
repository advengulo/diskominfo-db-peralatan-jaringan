@extends('layouts.app')

@section('content')
    <h1 class="text-center">Selamat Datang Di Aplikasi Database Peralatan Jaringan</h1>

    <div class="d-flex justify-content-center mt-4">
        <div class="card col-md-4" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Peralatan</h3>
                <h4 class="card-subtitle mb-2 text-muted">{{$total['peralatan']}}</h4>
            </div>
        </div>
        <div class="card col-md-4" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Kategori</h3>
                <h4 class="card-subtitle mb-2 text-muted">{{$total['kategori']}}</h4>
            </div>
        </div>
        <div class="card col-md-4" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Gangguan</h3>
                <h4 class="card-subtitle mb-2 text-muted">{{$total['gangguan']}}</h4>
            </div>
        </div>
    </div>
    
@endsection