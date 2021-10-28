@extends('layout.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Mapel</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('mapel.index') }}">Kembali</a>
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

<form action="{{ route('mapel.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nama">Nama Mata Pelajaran :</label>
                <input type="text" name="nama_mapel" class="form-control" placeholder="Nama Mata Pelajaran" id="nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="jenis">Jenis Mata Pelajaran :</label>
                <select class="form-control" name="jenis_mapel" id="jenis">
                <option selected class="form-select" aria-label="Disabled select example" disabled>Jenis Mata Pelajaran</option>
                <option value="Normatif">Normatif</option>
                <option value="Produktif">Produktif</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="jurusan">Kompetensi Keahlian :</label>
                <select  class="form-control" name='jurusan' id="jurusan" required>
                <option selected class="form-select" aria-label="Disabled select example" disabled>Kompetensi Keahlian</option>
                <option value="Umum">Umum</option>
                <option value="RPL">Rekayasa Perangkat Lunak</option>
                <option value="BKP">Bisnis Kontruksi dan Properti</option>
                <option value="TKRO">Teknik Kendaraan Ringan Otomotif</option>
                <option value="TB">Tata Boga</option>
                <option value="MM">Multimedia</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </div>

</form>
</div>
@endsection
