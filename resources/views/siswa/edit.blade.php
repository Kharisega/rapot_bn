@extends('layout.app')

@section('content')
<div class="container">
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
                <label for="nama">Nama Siswa :</label>
                <input type="text" id="nama" name="nama_siswa" class="form-control" value="{{ $siswa->nama_siswa }}" placeholder="Nama Siswa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nisn">NISN :</label>
                <input type="text" id="nisn" name="nisn" class="form-control" value="{{ $siswa->nisn }}" placeholder="NISN">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nis">NIS :</label>
                <input type="text" id="nis" name="nis" class="form-control" value="{{ $siswa->nis }}" placeholder="NIS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="ttl">Tempat, tanggal lahir :</label>
                <input type="text" id="ttl" name="ttl" class="form-control" value="{{ $siswa->ttl }}" placeholder="Tempat, tanggal lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="jk">Jenis Kelamin :</label>
                <select class="form-control" id="jk" name="jk" value="{{ $siswa->jk }}">
                <option selected class="form-select" aria-label="Disabled select example" disabled>Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="agama">Agama :</label>
                <select class="form-control" id="agama" name="agama" value="{{ $siswa->agama }}">
                <option selected class="form-select" aria-label="Disabled select example" disabled>Agama</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Kong Hu Chu">Kristen</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="skel">Status Keluarga :</label>
                <input type="text" id="skel" name="status_keluarga" class="form-control" value="{{ $siswa->status_keluarga }}" placeholder="Status Keluarga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="sanak">Status Anak :</label>
                <input type="text" id="sanak" name="status_anak" class="form-control" value="{{ $siswa->status_anak }}" placeholder="Status Anak">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="foto">Foto Siswa :</label>
                <input type="file" id="foto" name="foto_siswa" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="almt">Alamat Siswa :</label>
                <input type="text" id="almt" name="alamat_siswa" class="form-control" value="{{ $siswa->alamat_siswa }}" placeholder="Alamat Siswa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="telpsiswa">Nomor Telepon Siswa :</label>
                <input type="text" id="telpsiswa" name="nomor_telp_siswa" class="form-control" value="{{ $siswa->nomor_telp_siswa }}" placeholder="Kelas yang Diampu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="asalsklh">Sekolah Asal :</label>
                <input type="text" id="asalsklh" name="sekolah_asal" class="form-control" value="{{ $siswa->sekolah_asal }}" placeholder="Sekolah Asal">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="tglterima">Tanggal Diterima :</label>
                <input type="date" id="tglterima" name="tanggal_terima" class="form-control" value="{{ $siswa->tanggal_terima }}" placeholder="Tanggal Diterima">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nmayah">Nama Ayah :</label>
                <input type="text" id="nmayah" name="nama_ayah" class="form-control" value="{{ $siswa->nama_ayah }}" placeholder="Nama Ayah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nmibu">Nama Ibu :</label>
                <input type="text" id="nmibu" name="nama_ibu" class="form-control" value="{{ $siswa->nama_ibu }}" placeholder="Nama Ibu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="almtortu">Alamat Ortu :</label>
                <input type="text" id="almtortu" name="alamat_ortu" class="form-control" value="{{ $siswa->alamat_ortu }}" placeholder="Alamat Ortu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="telportu">Nomor Telepon Ortu</label>
                <input type="text" id="telportu" name="nomor_telp_ortu" class="form-control" value="{{ $siswa->nomor_telp_ortu }}" placeholder="Nomor Telepon Orang Tua">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="pekayah">Pekerjaan Ayah :</label>
                <input type="text" id="pekayah" name="pekerjaan_ayah" class="form-control" value="{{ $siswa->pekerjaan_ayah }}" placeholder="Pekerjaan Ayah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="pekibu">Pekerjaan Ibu :</label>
                <input type="text" id="pekibu" name="pekerjaan_ibu" class="form-control" value="{{ $siswa->pekerjaan_ibu }}" placeholder="Pekerjaan Ibu">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nmwali">Nama Wali :</label>
                <input type="text" id="nmwali" name="nama_wali" class="form-control" value="{{ $siswa->nama_wali }}" placeholder="Nama Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="almtwali">Alamat Wali :</label>
                <input type="text" id="almtwali" name="alamat_wali" class="form-control" value="{{ $siswa->alamat_wali }}" placeholder="Alamat Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="telpwali">Nomor Telepon Wali :</label>
                <input type="text" id="telpwali" name="nomor_telp_wali" class="form-control" value="{{ $siswa->nomor_telp_wali }}" placeholder="Nomor Telepon Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="pekwali">Pekerjaan Wali :</label>
                <input type="text" id="pekwali" name="pekerjaan_wali" class="form-control" value="{{ $siswa->pekerjaan_wali }}" placeholder="Pekerjaan Wali">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Edit</button>
        </div>
    </div>

</form>
</div>
@endsection
