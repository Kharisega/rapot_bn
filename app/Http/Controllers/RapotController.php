<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RapotController extends Controller
{
    public function index()
    {
        $email = auth()->user()->email;
        $id_guru = DB::table('guru')->where('email', $email)->value('id_guru');
        $jurusan = DB::table('jurusan')->get();
        $tahun = DB::table('tahun_ajaran')->get();
        $semester = DB::table('semester')->get();
        $id_mapel = DB::table('guru_has_mapel')->select('id_mapel')->where('id_guru', $id_guru)->get();
        $id_kelas = DB::table('guru_has_kelas')->select('id_kelas')->where('id_guru', $id_guru)->get();
        
        $mapel = [];
        foreach ($id_mapel as $key => $mapell) {
            array_push($mapel, DB::table('mapel')->where('id_mapel', $mapell->id_mapel)->value('nama_mapel'));
        }

        $kelas = [];
        foreach ($id_kelas as $key => $kelass) {
            array_push($kelas, DB::table('kelas')->where('id_kelas', $kelass->id_kelas)->value('kelas'));
        }
        
        return view('rapot.kasar.index', [
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'tahun' => $tahun,
            'semester' => $semester,
            'mapel' => $mapel,
         ]);
    }

    public function show(Request $request)
    {
        // dd($request);
        $email = auth()->user()->email;
        $mapel = $request->mapel;
        $kelas = $request->kelas;
        $tahun = $request->tahun;
        $semester = $request->semester;
        $id_kelas = DB::table('kelas')->where('kelas', $kelas)->value('id_kelas');
        $jurusan = $request->jurusan;
        $id_jurusan = DB::table('jurusan')->where('nama', $jurusan)->value('id_jurusan');
        $id_tahun = DB::table('tahun_ajaran')->where('tahun_ajaran', $tahun)->value('id_tahun');
        $id_semester = DB::table('semester')->where('semester', $semester)->value('id_semester');

        $siswa = DB::table('student')
                    ->join('data_siswa', 'student.nama_siswa', '=', 'data_siswa.nama_siswa')
                    ->select('student.*', 'data_siswa.nama_siswa', 'data_siswa.nisn')
                    ->where([
                        ['student.id_kelas', $id_kelas],
                        ['student.id_jurusan', $id_jurusan]
                    ])
                    ->get();
                        

        $tugas_siswa = DB::table('penilaian')
            ->leftJoin ('tabel_nilai', 'tabel_nilai.id_penilaian', '=', 'penilaian.id_penilaian')
            ->leftJoin ('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa', 'penilaian.jenis_nilai', 'penilaian.id_penilaian')
            ->where([
                ['penilaian.jenis_nilai', 'Tugas Harian'],
                ['penilaian.kelas', $kelas],
                ['penilaian.jurusan', $jurusan],
                ['penilaian.mapel', $mapel],
                ['penilaian.tahun_ajaran', $tahun],
                ['penilaian.semester', $semester],
            ])
            ->get();

            // dd($tugas_siswa);

        $ulangan_siswa = DB::table('penilaian')
            ->leftJoin ('tabel_nilai', 'tabel_nilai.id_penilaian', '=', 'penilaian.id_penilaian')
            ->leftJoin ('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa', 'penilaian.jenis_nilai', 'penilaian.id_penilaian', 'penilaian.nama_penilaian')
            ->where([
                ['penilaian.jenis_nilai', 'Penilaian Harian'],
                ['penilaian.kelas', $kelas],
                ['penilaian.jurusan', $jurusan],
                ['penilaian.mapel', $mapel],
                ['penilaian.tahun_ajaran', $tahun],
                ['penilaian.semester', $semester],
            ])
            ->get();    

        $remidi_siswa = DB::table('penilaian')
            ->rightJoin('tabel_nilai', 'tabel_nilai.id_penilaian', '=', 'penilaian.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa', 'penilaian.id_penilaian')
            ->where(
                [['penilaian.jenis_nilai', 'Remedial'],
                ['penilaian.kelas', $kelas],
                ['penilaian.jurusan', $jurusan],
                ['penilaian.mapel', $mapel],
                ['penilaian.tahun_ajaran', $tahun],
                ['penilaian.semester', $semester],
            ])
            ->get();

        $remed = DB::table('penilaian')
            ->rightJoin('tabel_nilai', 'tabel_nilai.id_penilaian', '=', 'penilaian.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa', 'penilaian.nama_penilaian')
            ->where(
                [['penilaian.jenis_nilai', 'Remedial'],
                ['penilaian.kelas', $kelas],
                ['penilaian.jurusan', $jurusan],
                ['penilaian.mapel', $mapel],
                ['penilaian.tahun_ajaran', $tahun],
                ['penilaian.semester', $semester],
                ])
            ->count();

        $pts_siswa = DB::table('tabel_nilai')
            ->rightJoin('penilaian', 'penilaian.id_penilaian', '=', 'tabel_nilai.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa')
            ->where(
                [['penilaian.jenis_nilai', 'Penilaian Tengah Semester'],
                ['penilaian.kelas', $kelas],
                ['penilaian.jurusan', $jurusan],
                ['penilaian.mapel', $mapel],
                ['penilaian.tahun_ajaran', $tahun],
                ['penilaian.semester', $semester],
                ])
            ->get();

        $pas_siswa = DB::table('tabel_nilai')
            ->rightJoin('penilaian', 'penilaian.id_penilaian', '=', 'tabel_nilai.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa')
            ->where(
                [['penilaian.jenis_nilai', 'Penilaian Akhir Semester'],
                ['penilaian.kelas', $kelas],
                ['penilaian.jurusan', $jurusan],
                ['penilaian.mapel', $mapel],
                ['penilaian.tahun_ajaran', $tahun],
                ['penilaian.semester', $semester],
                ])
            ->get();

        $keterampilan_siswa = DB::table('tabel_nilai')
            ->rightJoin('penilaian', 'penilaian.id_penilaian', '=', 'tabel_nilai.id_penilaian')
            ->join('data_siswa', 'data_siswa.id_siswa', '=', 'tabel_nilai.id_siswa')
            ->select('tabel_nilai.besar_nilai', 'data_siswa.nama_siswa')
            ->where(
                [['penilaian.jenis_nilai', 'Keterampilan'],
                ['penilaian.kelas', $kelas],
                ['penilaian.jurusan', $jurusan],
                ['penilaian.mapel', $mapel],
                ['penilaian.tahun_ajaran', $tahun],
                ['penilaian.semester', $semester],
                ])
            ->get();

        $tugas = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['tahun_ajaran', $tahun],
            ['semester', $semester],
            ['jenis_nilai', 'Tugas Harian']
        ])->count();

        // dd($tugas);

        $ulangan = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['tahun_ajaran', $tahun],
            ['semester', $semester],
            ['jenis_nilai', 'Penilaian Harian']
        ])->count();

        $remidi = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['tahun_ajaran', $tahun],
            ['semester', $semester],
            ['jenis_nilai', 'Remedial']
        ])->count();

        $keterampilan = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['tahun_ajaran', $tahun],
            ['semester', $semester],
            ['jenis_nilai', 'Keterampilan']
        ])->count();

        $pts = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['tahun_ajaran', $tahun],
            ['semester', $semester],
            ['jenis_nilai', 'Penilaian Tengah Semester']
        ])->count();

        $pas = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['mapel', $mapel],
            ['tahun_ajaran', $tahun],
            ['semester', $semester],
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

        // dd([
        //     'siswa'=>$siswa,
        //     'mapel'=>$mapel,
        //     'jurusan'=>$jurusan,
        //     'kelas'=>$kelas,
        //     'semester'=>$semester,
        //     'tahun'=>$tahun,
        //     'tugas'=>$tugas,
        //     'ulangan'=>$ulangan,
        //     'remidi'=>$remidi,
        //     'keterampilan'=>$keterampilan,
        //     'pts'=>$pts,
        //     'pas'=>$pas,
        //     'jumlah' => $jumlah,
        //     'tugas_siswa' => $tugas_siswa,
        //     'ulangan_siswa' => $ulangan_siswa,
        //     'remidi_siswa' => $remidi_siswa,
        //     'remed' => $remed,
        //     'pas_siswa' => $pas_siswa,
        //     'pts_siswa' => $pts_siswa,
        //     'keterampilan_siswa' => $keterampilan_siswa,
        // ]);
        
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
            'remed' => $remed,
            'pas_siswa' => $pas_siswa,
            'pts_siswa' => $pts_siswa,
            'keterampilan_siswa' => $keterampilan_siswa,
        ]);
    }
}
