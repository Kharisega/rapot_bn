@extends('layout.app')

@section('content')
<div class="container">
    <div class="col-lg-20 margin-tb">
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
                <label for="nip">NIP :</label>
                <input type="text" name="nip" class="form-control" value="{{ $guru->nip }}" placeholder="NIP" id="nip">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" name="nama_guru" class="form-control" value="{{ $guru->nama_guru }}" placeholder="Nama" id="nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="jk">Jenis Kelamin :</label>
                <select name="jk_guru" class="form-control" value="{{ $guru->jk_guru }}"  id="jk">
                <option selected class="form-select" aria-label="Disabled select example" disabled>Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="ttl">Tempat, tanggal lahir :</label>
                <input type="text" name="ttl_guru" class="form-control" value="{{ $guru->ttl_guru }}" placeholder="Tempat, tanggal lahir" id="ttl">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="notelp">Nomor Telepon :</label>
                <input type="text" name="telp_guru" class="form-control" value="{{ $guru->telp_guru }}" placeholder="Nomor Telepon" id="notelp">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat_guru" class="form-control" value="{{ $guru->alamat_guru }}" placeholder="Alamat" id="alamat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="foto">Foto :</label>
                <input type="file" name="foto_guru" class="form-control" id="foto">
                <!-- <input type="hidden" name="foto_guru" value="{{ old('foto_guru', $guru->foto_guru) }}"> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="mapel">Mata Pelajaran :</label>
                <select id="mapel" class="form-control" value="{{ $guru->mapel }}" name='mapel' required>
                <option selected class="form-select" aria-label="Disabled select example" disabled>Mata Pelajaran</option>
                <option >Sejarah Indonesia</option>
                <option >Matematika</option>
                <option >Bahasa Inggris</option>
                <option >Bahasa Jawa</option>
                <option >Bahasa Indonesia</option>
                <option >PPKn</option>
                <option >PKWU</option>
                <option >Pendidikan Agama Kristen</option>
                <option >Pendidikan Agama Katolik</option>
                <option >Pendidikan Agama Islam</option>
                <option >Seni Budaya</option>
                <option >Fisika</option>
                <option >Kimia</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="kelas">Kelas yang Diampu :</label>
                <select id='kelas' class="form-control" value="{{ $guru->kelas }}" name='kelas' required>
                <option selected class="form-select" aria-label="Disabled select example" disabled>Kelas yang Diampu</option>
                <option >X</option>
                <option >XI</option>
                <option >XII</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="status">Status :</label>
                <select id="status" class="form-control" value="{{ $guru->status }}" name='status' required>
                <option selected class="form-select" aria-label="Disabled select example" disabled>Status</option>
                <option >Guru Biasa</option>
                <option >Wali Kelas</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="kelasbimbingan">Kelas Bimbingan :</label>
                <select id="kelasbimbingan" class="form-control" value="{{ $guru->kelas_bimbingan }}" name='kelas_bimbingan'  required>
                <option selected class="form-select" aria-label="Disabled select example" disabled>Kelas Bimbingan</option>
                <option>-</option>
                <option >X RPL</option>
                <option >X BKP</option>
                <option >X TKRO</option>
                <option >X TB</option>
                <option >X MM</option>
                <option >XI RPL</option>
                <option >XI BKP</option>
                <option >XI TKRO</option>
                <option >XI TB</option>
                <option >XI MM</option>
                <option >XII RPL</option>
                <option >XII BKP</option>
                <option >XII TKRO</option>
                <option >XII TB</option>
                <option >XII MM</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Edit</button>
        </div>
    </div>

</form>
</div>
@endsection
