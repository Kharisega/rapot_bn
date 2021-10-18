@extends('guru.layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Guru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('guru.index') }}">Kembali</a>
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
   
<form action="{{ route('guru.update', $guru->id_guru) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIP :</strong>
                <input type="text" name="nip" class="form-control" value="{{ $guru->nip }}" placeholder="NIP">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="nama_guru" class="form-control" value="{{ $guru->nama_guru }}" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                <input type="text" name="jk_guru" class="form-control" value="{{ $guru->jk_guru }}" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat, tanggal lahir :</strong>
                <input type="text" name="ttl_guru" class="form-control" value="{{ $guru->ttl_guru }}" placeholder="Tempat, tanggal lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon :</strong>
                <input type="text" name="telp_guru" class="form-control" value="{{ $guru->telp_guru }}" placeholder="Nomor Telepon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat :</strong>
                <input type="text" name="alamat_guru" class="form-control" value="{{ $guru->alamat_guru }}" placeholder="Alamat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto :</strong>
                <input type="file" name="foto_guru" class="form-control">
                <!-- <input type="hidden" name="foto_guru" value="{{ old('foto_guru', $guru->foto_guru) }}"> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mata Pelajaran :</strong>
                <input type="text" name="mapel" class="form-control" value="{{ $guru->mapel }}" placeholder="Mata Pelajaran">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas yang Diampu :</strong>
                <input type="text" name="kelas" class="form-control" value="{{ $guru->kelas }}" placeholder="Kelas yang Diampu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status :</strong>
                <input type="text" name="status" class="form-control" value="{{ $guru->status }}" placeholder="Status">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas Bimbingan :</strong>
                <input type="text" name="kelas_bimbingan" class="form-control" value="{{ $guru->kelas_bimbingan }}" placeholder="Kelas Bimbingan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
   
</form>
@endsection