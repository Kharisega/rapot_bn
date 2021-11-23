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

     <div class="row ml-4">
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
                <select name="jk_guru" class="form-control" id="jk">
                <option selected class="form-select" aria-label="Disabled select example" disabled>Jenis Kelamin</option>
                <option value="Laki-Laki" @if($guru->jk_guru == 'Laki-laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if($guru->jk_guru == 'Perempuan') selected @endif>Perempuan</option>
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
                <input type="file" name="image" value="{{ old('foto_guru', $guru->foto_guru) }}" class="form-control" id="foto">
                <!-- <input type="hidden" name="foto_guru" value="{{ old('foto_guru', $guru->foto_guru) }}"> -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 ml-4">
            <div class="form-group">
                <label for="mapel">Mata Pelajaran :</label><br>
                @foreach ($mapel as $ul => $mapell)
                    @foreach ($mapelku as $mplku => $mmapel)
                        <input type="checkbox" class="form-check-input" name="mapel[]" value='{{$mapell->nama_mapel}}' {{  ($mapelku[$mplku] == $mapell->nama_mapel ? ' checked' : '') }}>{{$mapell->nama_mapel}}<br>
                    @endforeach
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 ml-4">
            <div class="form-group">
                <label for="kelas">Kelas yang Diampu :</label> <br>
                @foreach ($kelas as $i => $kelass)
                    @foreach ($kelasku as $klsku => $kkelas)
                        <input type="checkbox" class="form-check-input" name="kelas[]" value='{{$kelass->kelas}}' {{  ($kelasku[$klsku] == $kelass->kelas ? ' checked' : '') }}>{{$kelass->kelas}}<br>
                    @endforeach
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="status">Status :</label>
                <select id="status" class="form-control" name='status' required>
                <option class="form-select" aria-label="Disabled select example" disabled>Status</option>
                <option @if($guru->status == 'Guru Biasa') selected @endif>Guru Biasa</option>
                <option @if($guru->status == 'Wali Kelas') selected @endif>Wali Kelas</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="kelasbimbingan">Kelas Bimbingan :</label>
                <select  class="form-control" name='kelas_bimbingan' id="kelas_bimbingan" required>
                <option selected class="form-select" aria-label="Disabled select example" disabled>Kelas Bimbingan</option>
                <option value="-" @if($guru->kelas_bimbingan == '-') selected @endif>-</option>
                @foreach ($kelas as $u => $kelasss)
                    @foreach ($jurusan as $e => $jurusann)
                        <option value="{{ $kelasss->kelas . " " . $jurusann->nama }}" @if($guru->kelas_bimbingan == $kelasss->kelas . " " . $jurusann->nama) selected @endif>{{ $kelasss->kelas . " " . $jurusann->nama }}</option>
                    @endforeach
                @endforeach
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
