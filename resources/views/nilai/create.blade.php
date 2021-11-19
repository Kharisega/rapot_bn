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
<?php
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}?>
   @foreach ($rencana as $u => $rencanaa)
        <p>ID Penilaian : {{ $rencanaa->id_penilaian }}</p>
        <p>Nama Penilaian : {{ $rencanaa->nama_penilaian }}</p>
        <p>Kelas : {{ $rencanaa->kelas }}</p>
        <p>Jurusan : {{ $rencanaa->jurusan }}</p>
        <p>Tanggal Pelaksanaan : {{ tgl_indo($rencanaa->tgl_penilaian) }}</p>
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
            <table class="table table-bordered table-dark table-striped table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Besar Nilai</th>
                        <th>Keterangan Nilai</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($siswa as $i => $siswaa)
                    <tr>
                        <th>{{ $i + 1 }}</th>
                        <td>{{ $siswaa->nama_siswa }}</td>
                        <input type="hidden" value="{{ $siswaa->nama_siswa }}" name="nama_siswa[]">
                        <input type="hidden" value="{{ ++$i }}" name="no_id[]">
                        @for ($u=0; $u < count($siswa); $u++)
                            @if (isset($nilai[$u]))
                                @if ($nilai[$u]->nama_siswa == $siswaa->nama_siswa)
                                    <td>
                                        <input type="number" value="{{ $nilai[$u]->besar_nilai }}" name="besar_nilai[]" style="width:65px;" id="besar_nilai" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" value="{{ $nilai[$u]->ket_nilai }}" name="ket_nilai[]" style="width:150px;" id="ket_nilai" class="form-control">
                                    </td>
                                @elseif ($nilai[$u]->besar_nilai == null)
                                    <td>
                                        <input type="number" name="besar_nilai[]" style="width:65px;" id="besar_nilai" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="ket_nilai[]" style="width:150px;" id="ket_nilai" class="form-control">
                                    </td>
                                @endif
                            @else
                                @if ($i > count($nilai))
                                    @if (isset($nilai[$u]))
                                        <!-- ... -->
                                    @elseif (count($nilai) != 1)
                                    <td>
                                        <input type="number" name="besar_nilai[]" style="width:65px;" id="besar_nilai" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="ket_nilai[]" style="width:150px;" id="ket_nilai" class="form-control">
                                    </td>
                                    @endif
                                @endif
                            @endif
                        @endfor
                    </tr>
                @endforeach
                </tbody>
            </table>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
   
</form>
@endsection