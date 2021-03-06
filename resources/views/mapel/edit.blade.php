@extends('layout.app')
  
@section('content')
<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Guru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('mapel.index') }}">Kembali</a>
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
   
<form action="{{ route('mapel.update', $mapel->id_mapel) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nama">Nama Mata Pelajaran :</label>
                <input type="text" id="nama" name="nama_mapel" class="form-control" value="{{ $mapel->nama_mapel}}" placeholder="Nama Mata Pelajaran">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="jenis">Jenis Mata Pelajaran :</label>
                <select class="form-control" name="jenis_mapel" value="{{ $mapel->jenis_mapel}}" id="jenis">
                <option selected class="form-select" aria-label="Disabled select example" disabled>Jenis Mata Pelajaran </option>
                <option value="Normatif">Normatif</option>
                <option value="Produktif">Produktif</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="jurusan">Kompetensi Keahlian :</label>
                <select class="form-control" name="jurusan" value="{{ $mapel->jurusan}}" id="jurusan">
                <option selected class="form-select" aria-label="Disabled select example" disabled>Kompetensi Keahlian</option>
                <option value="Umum">Umum</option>
                <option value="RPL">Rekayasa Perangkat Lunak</option>
                <option value="BKP">Bisnis Kontruksi dan Properti</option>
                <option value="TKRO">Teknik Kendaraan Ringan Otomotif</option>
                <option value="TB">Tata Boga</option>
                <option value="MM">Multimedia</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Edit</button>
        </div>
    </div>
   
</form>
@endsection