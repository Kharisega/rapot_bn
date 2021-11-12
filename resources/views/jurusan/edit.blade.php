@extends('layout.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Kompetensi Keahlian</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('jurusan.index') }}">Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Edit Gagal</strong> Data yang anda inputkan bermasalah.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('jurusan.update', $jurusan->id_jurusan) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sebutan Kompetensi Keahlian :</strong>
                <input type="text" name="nama" class="form-control" value="{{ $jurusan->nama}}" placeholder="contoh : RPL, BKP">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kepanjangan Kompetensi Keahlian :</strong>
                <input type="text" name="alias" class="form-control" value="{{ $jurusan->alias}}" placeholder="contoh : Rekayasa Perangkat Lunak">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>

</form>
</div>
@endsection
