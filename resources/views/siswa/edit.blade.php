@extends('guru.layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Guru</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('siswa.index') }}">Kembali</a>
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
   
<form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Siswa :</strong>
                <input type="text" name="nama_siswa" class="form-control" value="{{ $siswa->nama_siswa }}" placeholder="Nama Siswa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NISN :</strong>
                <input type="text" name="nisn" class="form-control" value="{{ $siswa->nisn }}" placeholder="NISN">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS :</strong>
                <input type="text" name="nis" class="form-control" value="{{ $siswa->nis }}" placeholder="NIS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat, tanggal lahir :</strong>
                <input type="text" name="ttl" class="form-control" value="{{ $siswa->ttl }}" placeholder="Tempat, tanggal lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                <input type="text" name="jk" class="form-control" value="{{ $siswa->jk }}" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama :</strong>
                <input type="text" name="agama" class="form-control" value="{{ $siswa->agama }}" placeholder="Agama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Keluarga :</strong>
                <input type="text" name="status_keluarga" class="form-control" value="{{ $siswa->status_keluarga }}" placeholder="Status Keluarga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Anak :</strong>
                <input type="text" name="status_anak" class="form-control" value="{{ $siswa->status_anak }}" placeholder="Status Anak">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Foto Siswa :</strong>
                <input type="file" name="foto_siswa" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Siswa :</strong>
                <input type="text" name="alamat_siswa" class="form-control" value="{{ $siswa->alamat_siswa }}" placeholder="Alamat Siswa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon Siswa :</strong>
                <input type="text" name="nomor_telp_siswa" class="form-control" value="{{ $siswa->nomor_telp_siswa }}" placeholder="Kelas yang Diampu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sekolah Asal :</strong>
                <input type="text" name="sekolah_asal" class="form-control" value="{{ $siswa->sekolah_asal }}" placeholder="Sekolah Asal">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Diterima :</strong>
                <input type="date" name="tanggal_terima" class="form-control" value="{{ $siswa->tanggal_terima }}" placeholder="Tanggal Diterima">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ayah :</strong>
                <input type="text" name="nama_ayah" class="form-control" value="{{ $siswa->nama_ayah }}" placeholder="Nama Ayah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ibu :</strong>
                <input type="text" name="nama_ibu" class="form-control" value="{{ $siswa->nama_ibu }}" placeholder="Nama Ibu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Ortu :</strong>
                <input type="text" name="alamat_ortu" class="form-control" value="{{ $siswa->alamat_ortu }}" placeholder="Alamat Ortu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon Ortu</strong>
                <input type="text" name="nomor_telp_ortu" class="form-control" value="{{ $siswa->nomor_telp_ortu }}" placeholder="Nomor Telepon Orang Tua">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan Ayah :</strong>
                <input type="text" name="pekerjaan_ayah" class="form-control" value="{{ $siswa->pekerjaan_ayah }}" placeholder="Pekerjaan Ayah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan Ibu :</strong>
                <input type="text" name="pekerjaan_ibu" class="form-control" value="{{ $siswa->pekerjaan_ibu }}" placeholder="Pekerjaan Ibu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Wali :</strong>
                <input type="text" name="nama_wali" class="form-control" value="{{ $siswa->nama_wali }}" placeholder="Nama Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Wali :</strong>
                <input type="text" name="alamat_wali" class="form-control" value="{{ $siswa->alamat_wali }}" placeholder="Alamat Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon Wali :</strong>
                <input type="text" name="nomor_telp_wali" class="form-control" value="{{ $siswa->nomor_telp_wali }}" placeholder="Nomor Telepon Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan Wali :</strong>
                <input type="text" name="pekerjaan_wali" class="form-control" value="{{ $siswa->pekerjaan_wali }}" placeholder="Pekerjaan Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </div>
   
</form>
@endsection