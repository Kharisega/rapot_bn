@extends('layout.app')

@section('content')
<div class="container">
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
        <p>ID Penilaian : {{ $siswa[0]->id_penilaian }}</p>
        <p>Nama Penilaian : {{ $siswa[0]->nama_penilaian }}</p>
        <p>Kelas : {{ $siswa[0]->kelas }}</p>
        <p>Jurusan : {{ $siswa[0]->jurusan }}</p>
        <p>Tanggal Pelaksanaan : {{ $siswa[0]->tgl_penilaian }}</p>
        <p>Jenis Penilaian : {{ $siswa[0]->jenis_nilai }}</p>
        <p>Tipe Penilaian : {{ $siswa[0]->tipe_nilai }}</p>
        <p>Mata Pelajaran : {{ $siswa[0]->mapel }}</p>
        <p>E-Mail : {{ $siswa[0]->email }}</p>


        @if ($data == 0)
            <div class="alert alert-info">
                <p>Mohon Maaf Nilai siswa belum dimasukkan, Silahkan Memasukkan nilai terlebih dahulu!</p>
            </div>
        @endif

        @if ($data == 1)
        <strong> Nama Siswa beserta Nilai : </strong>
        <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>ID Siswa</th>
                    <th>Nama Siswa</th>
                    <th>Besar Nilai</th>
                    <th>Keterangan Nilai</th>
                </tr>
            @foreach ($siswa as $i => $siswaa)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $siswaa->id_siswa }}</td>
                    <td>{{ $siswaa->nama_siswa }}</td>
                    <td>{{ $siswaa->besar_nilai }}</td>
                    <td>{{ $siswaa->ket_nilai }}</td>
                </tr>
            @endforeach
        </table>
        @endif
    </div>
@endsection
