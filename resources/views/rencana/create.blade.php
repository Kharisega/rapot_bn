@extends('rencana.layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Rencana Penilaian</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rencana.index') }}">Kembali</a>
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
   
<form action="{{ route('rencana.store') }}" method="POST">
    @csrf
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Penilaian :</strong>
                <input type="text" name="nama_penilaian" class="form-control" placeholder="Nama Penilaian">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas :</strong>
                <select name="kelas" id="kelas" class="form-control">
                        @foreach ($kelas as $mp => $kelass)
                            <option value="{{ $kelass }}">{{ $kelass }}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jurusan :</strong>
                <select name="jurusan" id="jurusan" class="form-control">
                    @foreach ($jurusan as $u => $jurusann)
                        <option value="{{ $jurusann->nama }}">{{ $jurusann->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mata Pelajaran :</strong>
                <select name="mapel" id="mapel" class="form-control">
                        @foreach ($mapel as $mp => $mapell)
                            <option value="{{ $mapell }}">{{ $mapell }}</option>
                        @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipe Nilai :</strong>
                <select name="tipe_nilai" id="tipe_nilai" class="form-control">
                    <option value="Pengetahuan">Pengetahuan</option>
                    <option value="Keterampilan">Keterampilan</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Penilaian :</strong>
                <input type="date" name="tgl_penilaian" id="tgl_penilaian" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Nilai :</strong>
                <select name="jenis_nilai" id="jenis_nilai" class="form-control">
                    @foreach ($jenis_nilai as $u => $jenis_nilaii)
                        <option value="{{ $jenis_nilaii->jenis_nilai }}">{{ $jenis_nilaii->jenis_nilai }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahun Ajaran :</strong>
                <select name="tahun_ajaran" id="tahun_ajaran" class="form-control">
                    @foreach ($tahun as $thn => $tahunn)
                        <option value="{{ $tahunn->tahun_ajaran }}">{{ $tahunn->tahun_ajaran }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Semester :</strong>
                <select name="semester" id="semester" class="form-control">
                    @foreach ($semester as $smstr => $semesterr)
                        <option value="{{ $semesterr->semester }}">{{ $semesterr->semester }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection