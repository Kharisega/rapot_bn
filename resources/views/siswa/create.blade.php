@extends('layout.app')

@section('content')
<div class="container">
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

<form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Nama Siswa :</label>
                <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" placeholder="Nama Siswa" onfocusout="setNama()">
                <input type="hidden" name="name" value="" id="name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Kelas :</label>
                <select name="kelas" id="kelas" class="form-control">
                <option selected class="form-select" aria-label="Disabled select example" disabled>- Pilih Salah Satu -</option>
                <!-- <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
                <option value="">- Pilih Salah Satu -</option> -->
                    @foreach ($kelas as $i => $kelass)
                        <option value="{{ $kelass->kelas }}">{{ $kelass->kelas }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Kompetensi Keahlian :</label>
                <select name="jurusan" id="jurusan" class="form-control">
                <option selected class="form-select" aria-label="Disabled select example" disabled>- Pilih Salah Satu -</option>
                <!-- <option value="RPL">RPL</option>
                <option value="BKP">BKP</option>
                <option value="TKRO">TKRO</option>
                <option value="TB">TB</option>
                <option value="MM">MM</option>
                    <option value="">- Pilih Salah Satu -</option> -->
                    @foreach ($jurusan as $u => $jurusann)
                        <option value="{{ $jurusann->nama }}">{{ $jurusann->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>E-Mail :</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Password :</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nisn">NISN :</label>
                <input type="text" id="nisn" name="nisn" class="form-control" placeholder="NISN">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nis">NIS :</label>
                <input type="text" id="nis" name="nis" class="form-control" placeholder="NIS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="ttl">Tempat, tanggal lahir :</label>
                <input type="text" id="ttl" name="ttl" class="form-control" placeholder="Tempat, tanggal lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="jk">Jenis Kelamin :</label>
                <select class="form-control" id="jk" name="jk">
                <option selected class="form-select" aria-label="Disabled select example" disabled>Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="agama">Agama :</label>
                <select class="form-control" id="agama" name="agama">
                <option selected class="form-select" aria-label="Disabled select example" disabled>Agama</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Kristen Katolik">Kristen Katolik</option>
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Kong Hu Chu">Kong Hu Chu</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="skel">Status Keluarga :</label>
                <input type="text" id="skel" name="status_keluarga" class="form-control" placeholder="Status Keluarga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="sanak">Status Anak :</label>
                <input type="text" id="sanak" name="status_anak" class="form-control" placeholder="Status Anak">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="foto_siswa">Foto Siswa :</label>
                <input type="file" name="foto_siswa" id="foto_siswa" class="form-control-file">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="almt">Alamat Siswa :</label>
                <input type="text" id="almt" name="alamat_siswa" class="form-control" placeholder="Alamat Siswa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="telpsiswa">Nomor Telepon Siswa :</label>
                <input type="text" id="telpsiswa" name="nomor_telp_siswa" class="form-control" placeholder="Nomor Telepon Siswa ">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="asalsklh">Sekolah Asal :</label>
                <input type="text" id="asalsklh" name="sekolah_asal" class="form-control" placeholder="Sekolah Asal">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="tglterima">Tanggal Diterima :</label>
                <input type="date" id="tglterima" name="tanggal_terima" class="form-control" placeholder="Tanggal Diterima">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nmayah">Nama Ayah :</label>
                <input type="text" id="nmayah" name="nama_ayah" class="form-control" placeholder="Nama Ayah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nmibu">Nama Ibu :</label>
                <input type="text" id="nmibu" name="nama_ibu" class="form-control" placeholder="Nama Ibu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="almtortu">Alamat Orang Tua :</label>
                <input type="text" id="almtortu" name="alamat_ortu" class="form-control" placeholder="Alamat Orang Tua">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="telportu">Nomor Telepon Orang Tua</label>
                <input type="text" id="telportu" name="nomor_telp_ortu" class="form-control" placeholder="Nomor Telepon Orang Tua">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="pekayah">Pekerjaan Ayah :</label>
                <input type="text" id="pekayah" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="pekibu">Pekerjaan Ibu :</label>
                <input type="text" id="pekibu" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nmwali">Nama Wali :</label>
                <input type="text" id="nmwali" name="nama_wali" class="form-control" placeholder="Nama Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="almtwali">Alamat Wali :</label>
                <input type="text" id="almtwali" name="alamat_wali" class="form-control" placeholder="Alamat Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="telpwali">Nomor Telepon Wali :</label>
                <input type="text" id="telpwali" name="nomor_telp_wali" class="form-control" placeholder="Nomor Telepon Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="pekwali">Pekerjaan Wali :</label>
                <input type="text" id="pekwali" name="pekerjaan_wali" class="form-control" placeholder="Pekerjaan Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
                <button type="reset" class="btn btn-danger mt-3">Reset</button>
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
