@extends('layout.app')

@section('content')
<div class="container">
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

<form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nip">NIP :</label>
                <input type="text" name="nip" class="form-control" placeholder="NIP" id="nip">
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
                <label for="jk">Jenis Kelamin :</label>
                <select class="form-control" name='jk_guru' id="jk" required>
                <option selected class="form-select" aria-label="Disabled select example" disabled>Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="ttl">Tempat, tanggal lahir :</label>
                <input type="text" name="ttl_guru" class="form-control" placeholder="Tempat, tanggal lahir" id="ttl">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="notelp">Nomor Telepon :</label>
                <input type="text" name="telp_guru" class="form-control" placeholder="Nomor Telepon" id="notelp">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat_guru" class="form-control" placeholder="Alamat" id="alamat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="image">Foto :</label>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="mapel">Mata Pelajaran :</label>
                <select class="form-control" id="mapel" name="mapel">
                <option selected class="form-select" aria-label="Disabled select example" disabled>Mata Pelajaran</option>
                <option value='Sejarah Indonesia'>Sejarah Indonesia</option>
                <option value='Matematika'>Matematika</option>
                <option value='Bahasa Inggris'>Bahasa Inggris</option>
                <option value='Bahasa Jawa'>Bahasa Jawa</option>
                <option value='Bahasa Indonesia'>Bahasa Indonesia</option>
                <option value='PPKn'>PPKn</option>
                <option value='PKWU'>PKWU</option>
                <option value='Pendidikan Agama Kristen'>Pendidikan Agama Kristen</option>
                <option value='Pendidikan Agama Katolik'>Pendidikan Agama Katolik</option>
                <option value='Pendidikan Agama Islam'>Pendidikan Agama Islam</option>
                <option value='Seni Budaya'>Seni Budaya</option>
                <option value='Fisika'>Fisika</option>
                <option value='Kimia'>Kimia</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="kelas">Kelas yang Diampu :</label>
                <select class="form-control" name='kelas' id="kelas" required>
                <option selected class="form-select" aria-label="Disabled select example" disabled>Kelas yang Diampu</option>
                @foreach ($kelas as $i => $kelass)
                    <option value="{{ $kelass->kelas }}">{{ $kelass->kelas }}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="status">Status :</label>
                <select  class="form-control" name='status' id="status" required>
                <option selected class="form-select" aria-label="Disabled select example" disabled>Status</option>
                <option value='Guru Biasa'>Guru Biasa</option>
                <option value='Wali Kelas'>Wali Kelas</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <label for="kelasbimbingan">Kelas Bimbingan :</label>
            <select  class="form-control" name='kelas_bimbingan' id="kelas_bimbingan" required>
                <option selected class="form-select" aria-label="Disabled select example" disabled>Kelas Bimbingan</option>
                <option value="-">-</option>
                @foreach ($kelas as $u => $kelasss)
                    @foreach ($jurusan as $e => $jurusann)
                        <option value="{{ $kelasss->kelas . " " . $jurusann->nama }}">{{ $kelasss->kelas . " " . $jurusann->nama }}</option>
                    @endforeach
                @endforeach
                </select>
            </div>
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
    var name = document.getElementById("nama_guru").value;
    document.getElementById("name").value = name;
}
</script>
@endsection
