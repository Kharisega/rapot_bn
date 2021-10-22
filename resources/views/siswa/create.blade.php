@extends('siswa.layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data Siswa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('siswa.index') }}">Kembali</a>
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
   
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Siswa :</strong>
                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="Nama Siswa" onfocusout="setNama()">
                <input type="hidden" name="name" value="" id="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas :</strong>
                <select name="kelas" id="kelas" class="form-control">
                            <option value="">- Pilih Salah Satu -</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kompetensi Keahlian :</strong>
                <select name="jurusan" id="jurusan" class="form-control">
                            <option value="">- Pilih Salah Satu -</option>
                            <option value="RPL">RPL</option>
                            <option value="BKP">BKP</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TB">TB</option>
                            <option value="MM">MM</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-Mail :</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
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
                <strong>NISN :</strong>
                <input type="text" name="nisn" class="form-control" placeholder="NISN">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS :</strong>
                <input type="text" name="nis" class="form-control" placeholder="NIS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tempat, tanggal lahir :</strong>
                <input type="text" name="ttl" class="form-control" placeholder="Tempat, tanggal lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama :</strong>
                <input type="text" name="agama" class="form-control" placeholder="Agama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Keluarga :</strong>
                <input type="text" name="status_keluarga" class="form-control" placeholder="Status Keluarga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status Anak :</strong>
                <input type="text" name="status_anak" class="form-control" placeholder="Status Anak">
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
                <input type="text" name="alamat_siswa" class="form-control" placeholder="Alamat Siswa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon Siswa :</strong>
                <input type="text" name="nomor_telp_siswa" class="form-control" placeholder="Kelas yang Diampu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Sekolah Asal :</strong>
                <input type="text" name="sekolah_asal" class="form-control" placeholder="Sekolah Asal">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Diterima :</strong>
                <input type="date" name="tanggal_terima" class="form-control" placeholder="Tanggal Diterima">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ayah :</strong>
                <input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Ibu :</strong>
                <input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Ortu :</strong>
                <input type="text" name="alamat_ortu" class="form-control" placeholder="Alamat Ortu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon Ortu</strong>
                <input type="text" name="nomor_telp_ortu" class="form-control" placeholder="Nomor Telepon Orang Tua">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan Ayah :</strong>
                <input type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan Ibu :</strong>
                <input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Wali :</strong>
                <input type="text" name="nama_wali" class="form-control" placeholder="Nama Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Wali :</strong>
                <input type="text" name="alamat_wali" class="form-control" placeholder="Alamat Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nomor Telepon Wali :</strong>
                <input type="text" name="nomor_telp_wali" class="form-control" placeholder="Nomor Telepon Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan Wali :</strong>
                <input type="text" name="pekerjaan_wali" class="form-control" placeholder="Pekerjaan Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
<script>
function setNama() {
    var name = document.getElementById("nama_siswa").value;
    document.getElementById("name").value = name;   
}
</script>
@endsection