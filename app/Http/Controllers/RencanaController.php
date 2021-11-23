<?php

namespace App\Http\Controllers;

use App\Rencana;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $rencana = Rencana::latest();
        $data = 1;
        return view('rencana.index', [ 'rencana' => $rencana, 'data' => $data]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cari(Request $request)
    {
        $rencana = DB::table('penilaian')->where([
            ['kelas', $request->kelas],
            ['jurusan', $request->jurusan],
        ])->get();

        if (Auth::user()->hasRole('admin')) {
            $data = 1;
        } else {
            $data = 0;
        }
        return view('rencana.index', ['rencana' => $rencana, 'data' => $data]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rencana = DB::table('penilaian')->where('email', auth()->user()->email)->paginate();
        $data = 0;
        return view('rencana.index', ['rencana' => $rencana, 'data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $email = auth()->user()->email;
        $id_guru = DB::table('guru')->where('email', $email)->value('id_guru');
        $jurusan = DB::table('jurusan')->get();
        $tahun = DB::table('tahun_ajaran')->get();
        $semester = DB::table('semester')->get();
        $jenis_nilai = DB::table('jenis_nilai')->get();
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
        
        return view('rencana.create', [
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'jenis_nilai' => $jenis_nilai,
            'mapel' => $mapel,
            'tahun' => $tahun,
            'semester' => $semester,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'nama_penilaian' => 'required',
            'jurusan' => 'required',
            'tgl_penilaian' => 'required',
            'jenis_nilai' => 'required',
            'tipe_nilai' => 'required',
            'mapel' => 'required',
            'tahun_ajaran' => 'required',
            'semester' => 'required',
        ]);

        $email = auth()->user()->email;
        $kelas = $request['kelas'];
        $nama_penilaian = $request['nama_penilaian'];
        $jurusan = $request['jurusan'];
        $tgl_penilaian = $request['tgl_penilaian'];
        $jenis_nilai = $request['jenis_nilai'];
        $tipe_nilai = $request['tipe_nilai'];
        $mapel = $request['mapel'];
        $tahun_ajaran = $request['tahun_ajaran'];
        $semester = $request['semester'];

        $input = DB::table('penilaian')->insert([
            'nama_penilaian' => $nama_penilaian,
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'tgl_penilaian' => $tgl_penilaian,
            'jenis_nilai' => $jenis_nilai,
            'tipe_nilai' => $tipe_nilai,
            'mapel' => $mapel,
            'email' => $email,
            'tahun_ajaran' => $tahun_ajaran,
            'semester' => $semester,
        ]);

        if ($jenis_nilai == 'Penilaian Harian') {

            $remidial = 'Remedial';
            $tambah = DB::table('penilaian')->insert([
                'nama_penilaian' => $nama_penilaian,
                'kelas' => $kelas,
                'jurusan' => $jurusan,
                'tgl_penilaian' => $tgl_penilaian,
                'jenis_nilai' => $remidial,
                'tipe_nilai' => $tipe_nilai,
                'mapel' => $mapel,
                'email' => $email,
                'tahun_ajaran' => $tahun_ajaran,
                'semester' => $semester,
            ]);

        }

        return redirect()->route('rencana.index')->with('success', 'Rencana Penilaian telah berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function show(Rencana $rencana)
    {
        return view('rencana.index', compact('rencana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function edit(Rencana $rencana)
    {
        return view('rencana.edit', compact('rencana'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rencana $rencana)
    {
        $request->validate([
            'kelas' => 'required',
            'nama_penilaian' => 'required',
            'jurusan' => 'required',
            'tgl_penilaian' => 'required',
            'jenis_nilai' => 'required',
            'tipe_nilai' => 'required',
            'email' => 'required',
            'mapel' => 'required',
            'tahun_ajaran' => 'required',
            'semester' => 'required',
        ]);
        $rencana->update($request->all());
        return redirect()->route('rencana.index')->with('success', 'Rencana Penilaian berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rencana  $rencana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rencana $rencana)
    {
        $rencana->delete();
        return redirect()->route('rencana.index')->with('success', 'Rencana Penilaian berhasil dihapus');
    }
}
