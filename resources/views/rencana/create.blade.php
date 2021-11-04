@extends('rencana.layouts')
  
@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Rencana Penilaian</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rencana.index') }}">Kembali</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('rencana.store') }}" method="POST">
    @csrf
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="np">Nama Penilaian :</label>
                <input type="text" id="np" name="nama_penilaian" class="form-control" placeholder="Nama Penilaian">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="kelas">Kelas :</label>
                <select name="kelas" id="kelas" class="form-control">
                    <option selected class="form-select" aria-label="Disabled select example" disabled>- Pilih Salah Satu -</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="jurusan">Jurusan :</label>
                <select name="jurusan" id="jurusan" class="form-control">
                    <option selected class="form-select" aria-label="Disabled select example" disabled>- Pilih Salah Satu -</option>
                    <option value="RPL">RPL</option>
                    <option value="MM">MM</option>
                    <option value="TKRO">TKRO</option>
                    <option value="TB">TB</option>
                    <option value="BKP">XII</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="mapel">Mata Pelajaran :</label>
                <input type="text" id="mapel" name="mapel" class="form-control" placeholder="Mata Pelajaran">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="tn">Tipe Nilai :</label>
                <input type="text" id="tn" name="tipe_nilai" class="form-control" placeholder="Tipe Nilai">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="tgl_penilaian">Tanggal Penilaian :</label>
                <input type="date"  name="tgl_penilaian" id="tgl_penilaian" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="jn">Jenis Nilai :</label>
                <input type="text" id="jn" name="jenis_nilai" class="form-control" placeholder="Jenis Nilai">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
                <button type="reset" class="btn btn-danger mt-3">Reset</button>
        </div>
    </div>
   
</form>
@endsection