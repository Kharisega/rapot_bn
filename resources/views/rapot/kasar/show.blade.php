@extends('rencana.layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Daftar Nilai</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cek.nilai') }}">Kembali</a>
        </div>
    </div>
</div>

        <p>Mapel : {{ $mapel }}</p>
        <p>Kelas : {{ $kelas }}/{{ $jurusan }}</p>
        <p>Semester : {{ $semester }}</p>
        <p>Tahun Pelajaran : {{ $tahun }}</p>

        <table class="table table-bordered">
            <tr>
                <td rowspan="4">No</td>
                <td rowspan="4">NIS</td>
                <td rowspan="4">NAMA</td>
            </tr>
            <tr>
                <td colspan="{{ $tugas + ($ulangan*3) + 4}}">PENGETAHUAN</td>
                <td colspan="{{ $keterampilan }}" rowspan="2">KETERAMPILAN</td>
                <td rowspan="3">KET</td>
            </tr>
            <tr>
                <td colspan="{{ $tugas }}">Penugasan</td>
                <td colspan="{{ ($ulangan*3) }}">Penilaian Harian</td>
                <td rowspan="2">R Tgs</td>
                <td rowspan="2">R PH</td>
                <td rowspan="2">PTS</td>
                <td rowspan="2">PAS</td>
            </tr>
            <tr>
                @for ($i=0; $i < $tugas; $i++)
                    <td>T{{$i+1}}</td>
                @endfor
            
                @for ($i=0; $i < $ulangan; $i++)
                    <td>P{{$i+1}}</td>
                    <td>Rmd</td>
                    <td>NA</td>
                @endfor

                @for ($i=0; $i < $keterampilan; $i++)
                    <td>K{{$i+1}}</td>
                @endfor
            </tr>
            @foreach ($siswa as $i => $siswaa)
            <tr>
                <td>{{ $i+1 }}</td>
                <td>{{ $siswaa->nisn }}</td>
                <td>{{ $siswaa->nama_siswa }}</td>
                <?php
                    $avetugas = 0;
                    $aveulangan = 0;
                ?>
                @for ($i=0; $i < ($tugas*$jumlah); $i++) 
                    @if ($tugas_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                        <td>{{ $tugas_siswa[$i]->besar_nilai }}</td>
                        <?php
                        $avetugas = $avetugas + $tugas_siswa[$i]->besar_nilai;
                        ?>
                    @endif
                @endfor
                
                @for ($i=0; $i < ($ulangan*$jumlah); $i++) 
                    @if ($ulangan_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                        <td>{{ $ulangan_siswa[$i]->besar_nilai }}</td>
                    @endif
                @endfor
                @for ($i=0; $i < ($remidi*$jumlah); $i++) 
                    @if ($remidi_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                        @if ($remidi_siswa[$i]->besar_nilai == null)
                            <td> - </td>
                        @else 
                            <td>{{ $remidi_siswa[$i]->besar_nilai }}</td>
                        @endif
                        @if ($remidi_siswa[$i] >= '75')
                            <td>{{ $remidi_siswa[$i]->besar_nilai }}</td>
                            <?php
                                $aveulangan = $aveulangan + $remidi_siswa[$i]->besar_nilai;
                            ?>
                        @endif
                    @endif
                @endfor
                <td>{{ $rtugas = round($avetugas / $tugas) }}</td>
                <td>{{ $rulangan = round($aveulangan / $ulangan) }}</td>
                @for ($i=0; $i < ($pts*$jumlah); $i++) 
                    @if ($pts_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                        <td>{{ $pts_siswa[$i]->besar_nilai }}</td>
                    @endif
                @endfor
                @for ($i=0; $i < ($pas*$jumlah); $i++) 
                    @if ($pas_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                        <td>{{ $pas_siswa[$i]->besar_nilai }}</td>
                    @endif
                @endfor
                @for ($i=0; $i < ($keterampilan*$jumlah); $i++) 
                    @if ($keterampilan_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                        <td>{{ $keterampilan_siswa[$i]->besar_nilai }}</td>
                    @endif
                @endfor
                <td></td>
            </tr>
            @endforeach
        </table>
@endsection