@extends('rencana.layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Penginputan Nilai</h2>
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
   @foreach ($rencana as $u => $rencanaa)
        <p>ID Penilaian : {{ $rencanaa->id_penilaian }}</p>
        <p>Nama Penilaian : {{ $rencanaa->nama_penilaian }}</p>
        <p>Kelas : {{ $rencanaa->kelas }}</p>
        <p>Jurusan : {{ $rencanaa->jurusan }}</p>
        <p>Tanggal Pelaksanaan : {{ $rencanaa->tgl_penilaian }}</p>
        <p>Jenis Penilaian : {{ $rencanaa->jenis_nilai }}</p>
        <p>Tipe Penilaian : {{ $rencanaa->tipe_nilai }}</p>
        <p>Mata Pelajaran : {{ $rencanaa->mapel }}</p>
        <p>E-Mail : {{ $rencanaa->email }}</p>
    @endforeach

<form action="{{ route('nilai.store') }}" method="POST">
    @csrf
    <h3>Siswa Kelas {{ $rencanaa->kelas }}-{{ $rencanaa->jurusan }}</h3>
    <input type="hidden" name="id_penilaian" value="{{ $rencanaa->id_penilaian }}">
    <input type="hidden" name="email" value="{{ $rencanaa->email }}">
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
                <input type="text" name="besar_nilai[]" class="form-control" placeholder="Besar Nilai">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan Nilai :</strong>
                <input type="text" name="ket_nilai[]" class="form-control" placeholder="Keterangan Nilai">
            </div>
        </div>
        
        @endforeach
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection