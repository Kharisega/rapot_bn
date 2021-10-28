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

<form action="{{ route('guru.store') }}" method="POST">
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
                <label for="foto">Foto :</label>
                <input type="file" name="foto_guru" class="form-control" id="foto">
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
                <option value='X'>X</option>
                <option value='XI'>XI</option>
                <option value='XII'>XII</option>
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
                <option value='X RPL'>X RPL</option>
                <option value='X BKP'>X BKP</option>
                <option value='X TKRO'>X TKRO</option>
                <option value='X TB'>X TB</option>
                <option value='X MM'>X MM</option>
                <option value='XI RPL'>XI RPL</option>
                <option value='XI BKP'>XI BKP</option>
                <option value='XI TKRO'>XI TKRO</option>
                <option value='XI TB'>XI TB</option>
                <option value='XI MM'>XI MM</option>
                <option value='XII RPL'>XII RPL</option>
                <option value='XII BKP'>XII BKP</option>
                <option value='XII TKRO'>XII TKRO</option>
                <option value='XII TB'>XII TB</option>
                <option value='XII MM'>XII MM</option>
                </select>
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
                <button type="reset" class="btn btn-danger mt-3">Reset</button>
        </div>

        <!-- <div class="d-grid gap-2 col-6 mx-auto text-center">
            <button class="btn btn-success" type="button">Simpan</button>
            <button class="btn btn-danger" type="button">Reset</button>
        </div> -->
    </div>

</form>
<script>
function setNama() {
    var name = document.getElementById("nama_guru").value;
    document.getElementById("name").value = name;
}
</script>
@endsection
