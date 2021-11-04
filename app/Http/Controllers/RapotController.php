<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RapotController extends Controller
{
    public function index()
    {
        $email = auth()->user()->email;
        $kelas = DB::table('guru')->where('email', $email)->value('kelas');
        $jurusan = DB::table('jurusan')->get();
        $tahun = DB::table('tahun_ajaran')->get();
        $semester = DB::table('semester')->get();
        $mapel = DB::table('guru')->where('email', $email)->value('mapel');
        
        return view('rapot.kasar.index', ['kelas' => $kelas, 'jurusan' => $jurusan, 'tahun' => $tahun, 'semester' => $semester, 'mapel' => $mapel, ]);
    }

    public function show(Request $request)
    {
        $email = auth()->user()->email;
        $mapel = DB::table('guru')->where('email', $email)->value('mapel');
        $kelas = $request->kelas;
        $id_kelas = DB::table('kelas')->where('kelas', $kelas)->value('id_kelas');
        $jurusan = $request->jurusan;
        $id_jurusan = DB::table('jurusan')->where('nama', $jurusan)->value('id_jurusan');
        $tahun = $request->tahun;
        $id_tahun = DB::table('tahun_ajaran')->where('tahun_ajaran', $tahun)->value('id_tahun');
        $semester = $request->semester;
        $id_semester = DB::table('semester')->where('semester', $semester)->value('id_semester');

        $siswa = DB::table('student')
                    ->join('data_siswa', 'student.nama_siswa', '=', 'data_siswa.nama_siswa')
                    ->select('student.*', 'data_siswa.nama_siswa', 'data_siswa.nisn')
                    ->where([
                        ['student.id_kelas', $id_kelas],
                        ['student.id_jurusan', $id_jurusan]
                    ])
                    ->get();

        $tugas_siswa = DB::table('tabel_nilai')
            ->join('penilaian', 'penilaian.id_penilaian', '=', 'tabel_nilai.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa')
            ->where(
                [['penilaian.jenis_nilai', 'Tugas Harian']],
            )
            ->get();

        

        $ulangan_siswa = DB::table('tabel_nilai')
            ->join('penilaian', 'penilaian.id_penilaian', '=', 'tabel_nilai.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa')
            ->where(
                [['penilaian.jenis_nilai', 'Penilaian Harian']],
            )
            ->get();

        $remidi_siswa = DB::table('tabel_nilai')
            ->join('penilaian', 'penilaian.id_penilaian', '=', 'tabel_nilai.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa')
            ->where(
                [['penilaian.jenis_nilai', 'Remedial']],
            )
            ->get();

        $pts_siswa = DB::table('tabel_nilai')
            ->join('penilaian', 'penilaian.id_penilaian', '=', 'tabel_nilai.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa')
            ->where(
                [['penilaian.jenis_nilai', 'Penilaian Tengah Semester']],
            )
            ->get();

        $pas_siswa = DB::table('tabel_nilai')
            ->join('penilaian', 'penilaian.id_penilaian', '=', 'tabel_nilai.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa')
            ->where(
                [['penilaian.jenis_nilai', 'Penilaian Akhir Semester']],
            )
            ->get();

        $keterampilan_siswa = DB::table('tabel_nilai')
            ->join('penilaian', 'penilaian.id_penilaian', '=', 'tabel_nilai.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa')
            ->where(
                [['penilaian.jenis_nilai', 'Keterampilan']],
            )
            ->get();

        $tugas = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['jenis_nilai', 'Tugas Harian']
        ])->count();

        $ulangan = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['jenis_nilai', 'Penilaian Harian']
        ])->count();

        $remidi = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['jenis_nilai', 'Remedial']
        ])->count();

        $keterampilan = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['jenis_nilai', 'Keterampilan']
        ])->count();

        $pts = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['jenis_nilai', 'Penilaian Tengah Semester']
        ])->count();

        $pas = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['jenis_nilai', 'Penilaian Akhir Semester']
        ])->count();

        $coba = DB::table('penilaian')
                    ->select('penilaian.tgl_penilaian')
                    ->where([
                        ['jenis_nilai', 'Tugas Harian'],
                        ['mapel', $mapel]
                    ])
                    ->orderBy('tgl_penilaian', 'asc')
                    ->get();

        $jumlah = DB::table('student')
                    ->join('data_siswa', 'student.nama_siswa', '=', 'data_siswa.nama_siswa')
                    ->select('student.*', 'data_siswa.nama_siswa', 'data_siswa.nisn')
                    ->where([
                        ['student.id_kelas', $id_kelas],
                        ['student.id_jurusan', $id_jurusan]
                    ])
                    ->count();
        
        return view('rapot.kasar.show', [
            'siswa'=>$siswa,
            'mapel'=>$mapel,
            'jurusan'=>$jurusan,
            'kelas'=>$kelas,
            'semester'=>$semester,
            'tahun'=>$tahun,
            'tugas'=>$tugas,
            'ulangan'=>$ulangan,
            'remidi'=>$remidi,
            'keterampilan'=>$keterampilan,
            'pts'=>$pts,
            'pas'=>$pas,
            'jumlah' => $jumlah,
            'tugas_siswa' => $tugas_siswa,
            'ulangan_siswa' => $ulangan_siswa,
            'remidi_siswa' => $remidi_siswa,
            'pas_siswa' => $pas_siswa,
            'pts_siswa' => $pts_siswa,
            'keterampilan_siswa' => $keterampilan_siswa,
        ]);
    }
}
