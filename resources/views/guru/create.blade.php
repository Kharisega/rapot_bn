@extends('guru.layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Guru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('guru.index') }}">Kembali</a>
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
   
<form action="{{ route('guru.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIP :</strong>
                <input type="text" name="nip" class="form-control" placeholder="NIP">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama :</strong>
                <input type="text" name="nama_guru" id="nama_guru" class="form-control" placeholder="Nama" onfocusout="setNama()">
                <input type="hidden" name="name" value="" id="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-Mail :</strong>
                <input type="text" name="email" class="form-control" placeholder="E-Mail">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password :</strong>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                <input type="text" name="jk_guru" class="form-control" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat, tanggal lahir :</strong>
                <input type="text" name="ttl_guru" class="form-control" placeholder="Tempat, tanggal lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon :</strong>
                <input type="text" name="telp_guru" class="form-control" placeholder="Nomor Telepon">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat :</strong>
                <input type="text" name="alamat_guru" class="form-control" placeholder="Alamat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto :</strong>
                <input type="file" name="foto_guru" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mata Pelajaran :</strong>
                <input type="text" name="mapel" class="form-control" placeholder="Mata Pelajaran">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas yang Diampu :</strong>
                <input type="text" name="kelas" class="form-control" placeholder="Kelas yang Diampu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status :</strong>
                <input type="text" name="status" class="form-control" placeholder="Status">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas Bimbingan :</strong>
                <input type="text" name="kelas_bimbingan" class="form-control" placeholder="Kelas Bimbingan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
<script>
function setNama() {
    var name = document.getElementById("nama_guru").value;
    document.getElementById("name").value = name;   
}
</script>
@endsection