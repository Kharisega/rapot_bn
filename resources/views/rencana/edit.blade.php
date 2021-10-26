@extends('rencana.layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Rencana Penilaian</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rencana.index') }}">Kembali</a>
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
   
<form action="{{ route('rencana.update', $rencana->id_penilaian) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Penilaian :</strong>
                <input type="text" name="nama_penilaian" value="{{ $rencana->nama_penilaian }}" class="form-control" placeholder="Nama Penilaian">
                <input type="hidden" name="email" value="{{ $rencana->email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas :</strong>
                <select name="kelas" id="kelas" class="form-control">
                    <option value="X" @if($rencana->kelas == 'X') selected @endif>X</option>
                    <option value="XI" @if($rencana->kelas == 'XI') selected @endif>XI</option>
                    <option value="XII" @if($rencana->kelas == 'XII') selected @endif>XII</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jurusan :</strong>
                <select name="jurusan" id="jurusan" class="form-control">
                    <option value="RPL" @if($rencana->jurusan == 'RPL') selected @endif>RPL</option>
                    <option value="MM" @if($rencana->jurusan == 'MM') selected @endif>MM</option>
                    <option value="TKRO" @if($rencana->jurusan == 'TKRO') selected @endif>TKRO</option>
                    <option value="TB" @if($rencana->jurusan == 'TB') selected @endif>TB</option>
                    <option value="BKP" @if($rencana->jurusan == 'BKP') selected @endif>BKP</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mata Pelajaran :</strong>
                <input type="text" name="mapel" class="form-control" value="{{ $rencana->mapel }}" placeholder="Mata Pelajaran">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Nilai :</strong>
                <input type="text" name="tipe_nilai" class="form-control" value="{{ $rencana->tipe_nilai }}" placeholder="Tipe Nilai">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Penilaian :</strong>
                <input type="date" name="tgl_penilaian" id="tgl_penilaian" value="{{ $rencana->tgl_penilaian }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Nilai :</strong>
                <input type="text" name="jenis_nilai" class="form-control" value="{{ $rencana->jenis_nilai }}" placeholder="Jenis Nilai">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection