@extends('rencana.layouts')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Daftar Nilai</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rapot.index') }}">Kembali</a>
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
                <td colspan="{{ $tugas + ($ulangan*3) + ($pas == 0 ? ($tugas == 0 ? 6 : 5) : 4)}}">PENGETAHUAN</td>
                <td colspan="{{ $keterampilan }}" rowspan="2">KETERAMPILAN</td>
                <td rowspan="3">KET</td>
            </tr>
            <tr>
                <td colspan="{{ $tugas }}">Penugasan</td>
                <td colspan="{{ ($ulangan == 0 ? 1 : ($ulangan*3)) }}">Penilaian Harian</td>
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

                @if ($tugas == 0)
                    <td>Tidak ada Penilaian Tugas</td>
                @else
                    <?php $kuku = 0; $var = 0; ?>
                    @for ($i=0; $i < ($tugas*$jumlah); $i++)
                        @if (isset($tugas_siswa[$i]))
                            @if ($tugas_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                                <td>{{ $tugas_siswa[$i]->besar_nilai }}</td>
                            <?php
                                $avetugas = $avetugas + $tugas_siswa[$i]->besar_nilai;
                                $var = 1;
                            ?>
                            @endif
                        @else
                            <?php $kuku++; ?>
                            @if ($kuku > $tugas)
                                @if ($var == 0)
                                    <?php
                                        $x = 1;
                                        while($x <= $tugas) {
                                            echo "<td>0</td>";
                                            $x++;
                                        }
                                        ?>
                                    @else
                                    <td>0</td>
                                @endif
                            @endif
                        @endif  
                    @endfor
                @endif
                
                @if ($ulangan == 0)
                    <td>Tidak ada Penilaian yang diadakan</td>
                @else
                    <?php $kiki = 0; ?>
                    @for ($i=0; $i < ($ulangan*$jumlah); $i++)
                        @if (isset($ulangan_siswa[$i]))
                            @if ($ulangan_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                                <td>{{ $ulangan_siswa[$i]->besar_nilai }}</td>
                                @if ($ulangan_siswa[$i]->besar_nilai >= 75)
                                    <td>0</td>
                                    <td>{{ $ulangan_siswa[$i]->besar_nilai }}</td>
                                    <?php
                                        $aveulangan = $aveulangan + $ulangan_siswa[$i]->besar_nilai;
                                    ?>
                                @else
                                    <?php $angka = 0; ?>
                                    @while ($angka < $remed)
                                        @if (isset($remidi_siswa[$angka]))
                                            @if ($remidi_siswa[$angka]->nama_siswa == $siswaa->nama_siswa)
                                                @if ($remidi_siswa[$angka]->id_penilaian == ($ulangan_siswa[$i]->id_penilaian + 1))
                                                    <td>{{ $remidi_siswa[$angka]->besar_nilai }}</td>
                                                    <td>{{ $remidi_siswa[$angka]->besar_nilai }}</td>
                                                    <?php
                                                        $aveulangan = $aveulangan + $remidi_siswa[$angka]->besar_nilai;
                                                    ?>
                                                @else
                                                    <td>0</td>
                                                    <td>{{ $ulangan_siswa[$i]->besar_nilai }}</td>
                                                    <?php
                                                        $aveulangan = $aveulangan + $ulangan_siswa[$i]->besar_nilai;
                                                    ?>
                                                @endif
                                            @endif
                                        @else
                                            <td>0</td>
                                            <td>{{ $ulangan_siswa[$i]->besar_nilai }}</td>
                                            <?php
                                                $aveulangan = $aveulangan + $ulangan_siswa[$i]->besar_nilai;
                                            ?>
                                        @endif
                                        <?php $angka++; ?>
                                    @endwhile
                                @endif
                            @endif
                        @else
                            <?php $kiki++; ?>
                            @if ($kiki > $tugas)
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            @endif
                        @endif
                    @endfor
                @endif

                
                @if ($tugas && $ulangan)
                <td>{{ $rtugas = round($avetugas / $tugas) }}</td>
                <td>{{ $rulangan = round($aveulangan / $ulangan) }}</td>
                @else
                <td>Tidak ada tugas</td>
                <td>Tidak ada ulangan</td>
                @endif
                
                @if ($pts == 0)
                    <td>Tidak ada Penilaian Tengah Semester</td>
                @else
                    <?php $keke = 0; ?>
                    @for ($i=0; $i < ($pts*$jumlah); $i++) 
                        @if (isset($pts_siswa[$i]))
                            @if ($pts_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                                <td>{{ $pts_siswa[$i]->besar_nilai }}</td>
                            @endif
                        @else
                            <?php $keke++; ?>
                            @if ($keke > $tugas)
                                <td>0</td>
                            @endif
                        @endif
                    @endfor
                @endif
                
                @if ($pas == 0)
                    <td>Tidak ada Penilaian Akhir Semester</td>
                @else
                    <?php $koko = 0; ?>
                    @for ($i=0; $i < ($pas*$jumlah); $i++) 
                        @if (isset($pas_siswa[$i]))
                            @if ($pas_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                                <td>{{ $pas_siswa[$i]->besar_nilai }}</td>
                            @endif
                        @else
                            <?php $koko++; ?>
                            @if ($koko > $tugas)
                                <td>0</td>
                            @endif
                        @endif
                    @endfor
                @endif

                @if ($keterampilan == 0)
                    <td>Tidak ada Penilaian Keterampilan</td>
                @else
                    <?php $kaka = 0; ?>
                    @for ($i=0; $i < ($keterampilan*$jumlah); $i++)
                        @if (isset($keterampilan_siswa[$i]))
                            @if ($keterampilan_siswa[$i]->nama_siswa == $siswaa->nama_siswa)
                                <td>{{ $keterampilan_siswa[$i]->besar_nilai }}</td>
                            @endif
                        @else
                            <?php $kaka++; ?>
                            @if ($kaka > $tugas)
                                <td>0</td>
                            @endif
                        @endif
                    @endfor
                @endif

                <td></td>
            </tr>
            @endforeach
        </table>
@endsection