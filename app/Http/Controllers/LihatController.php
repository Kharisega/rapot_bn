<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LihatController extends Controller
{
    public function index()
    {
        $email = auth()->user()->email;
        $id_kelas = DB::table('student')->where('email', $email)->value('id_kelas'); 
        $kelas = DB::table('kelas')->where('id_kelas', $id_kelas)->value('kelas');
        $id_jurusan = DB::table('student')->where('email', $email)->value('id_jurusan');
        $jurusan = DB::table('jurusan')->where('id_jurusan', $id_jurusan)->value('nama');

        $rencana = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
        ])->paginate();

        $jenis_nilai = DB::table('jenis_nilai')->get();
        return view('pelajar.index', ['rencana' => $rencana, 'jenis_nilai' => $jenis_nilai]);
    }

    public function lihat($id)
    {
        $email = auth()->user()->email;
        $nama_siswa = DB::table('student')->where('email', $email)->value('nama_siswa');
        $id_siswa = DB::table('data_siswa')->where('nama_siswa', $nama_siswa)->value('id_siswa');
        $siswa = DB::table('tabel_nilai')
            ->join('penilaian', 'tabel_nilai.id_penilaian', '=', 'penilaian.id_penilaian')
            ->join('data_siswa', 'tabel_nilai.id_siswa', '=', 'data_siswa.id_siswa')
            ->select('tabel_nilai.*', 'penilaian.*', 'data_siswa.nama_siswa')
            ->where([
                ['tabel_nilai.id_penilaian', $id],
                ['tabel_nilai.id_siswa', $id_siswa]
            ])
            ->get();
        $check = $siswa->all();
        if ($check == []) {
            $siswa = DB::table('penilaian')->where('id_penilaian', $id)->get();
            $data = 0;
            return view('pelajar.show', ['siswa'=>$siswa, 'data' => $data]);
        }

        $data = 1;
        return view('pelajar.show', ['siswa'=>$siswa, 'data' => $data]);
    }

    public function cari(Request $request)
    {
        $email = auth()->user()->email;
        $id_kelas = DB::table('student')->where('email', $email)->value('id_kelas'); 
        $kelas = DB::table('kelas')->where('id_kelas', $id_kelas)->value('kelas');
        $id_jurusan = DB::table('student')->where('email', $email)->value('id_jurusan');
        $jurusan = DB::table('jurusan')->where('id_jurusan', $id_jurusan)->value('nama');

        $rencana = DB::table('penilaian')->where([
            ['kelas', $kelas],
            ['jurusan', $jurusan],
            ['jenis_nilai', $request->jenis_penilaian],
        ])->paginate();

        $jenis_nilai = DB::table('jenis_nilai')->get();
        return view('pelajar.index', ['rencana' => $rencana, 'jenis_nilai' => $jenis_nilai]);
    }
}
