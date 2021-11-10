@extends('layout.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Pengeditan Nilai</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('nilai.index') }}">Kembali</a>
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
        <p>ID Penilaian : {{ $siswa[0]->id_penilaian }}</p>
        <p>Nama Penilaian : {{ $siswa[0]->nama_penilaian }}</p>
        <p>Kelas : {{ $siswa[0]->kelas }}</p>
        <p>Jurusan : {{ $siswa[0]->jurusan }}</p>
        <p>Tanggal Pelaksanaan : {{ $siswa[0]->tgl_penilaian }}</p>
        <p>Jenis Penilaian : {{ $siswa[0]->jenis_nilai }}</p>
        <p>Tipe Penilaian : {{ $siswa[0]->tipe_nilai }}</p>
        <p>Mata Pelajaran : {{ $siswa[0]->mapel }}</p>
        <p>E-Mail : {{ $siswa[0]->email }}</p>

        <strong> Nama Siswa beserta Nilai : </strong>
    <form action="{{ route('ubah.update') }}" method="POST">
    @csrf
    @method('PUT')
    <h3>Siswa Kelas {{ $siswa[0]->kelas }}-{{ $siswa[0]->jurusan }}</h3>
    <input type="hidden" name="id_penilaian" value="{{ $siswa[0]->id_penilaian }}">
    <input type="hidden" name="email" value="{{ $siswa[0]->email }}">
    <div class="row">
    @foreach ($siswa as $i => $siswaa)
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Siswa :</strong>
                <p>{{ $siswaa->nama_siswa }}</p>
                <input type="hidden" value="{{ $siswaa->nama_siswa }}" name="nama_siswa[]">
                <input type="hidden" value="{{ ++$i }}" name="no_id[]">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Besar Nilai :</strong>
                <input type="text" name="besar_nilai[]" class="form-control" value="{{ $siswaa->besar_nilai }}" placeholder="Besar Nilai">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan Nilai :</strong>
                <input type="text" name="ket_nilai[]" class="form-control" value="{{ $siswaa->ket_nilai }}" placeholder="Keterangan Nilai">
            </div>
        </div>

        @endforeach
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
@endsection
