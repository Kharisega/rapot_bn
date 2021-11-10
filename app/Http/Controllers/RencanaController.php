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
        return view('rencana.create');
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
        ]);

        $email = auth()->user()->email;
        $kelas = $request['kelas'];
        $nama_penilaian = $request['nama_penilaian'];
        $jurusan = $request['jurusan'];
        $tgl_penilaian = $request['tgl_penilaian'];
        $jenis_nilai = $request['jenis_nilai'];
        $tipe_nilai = $request['tipe_nilai'];
        $mapel = $request['mapel'];

        $input = DB::table('penilaian')->insert([
            'nama_penilaian' => $nama_penilaian,
            'kelas' => $kelas,
            'jurusan' => $jurusan,
            'tgl_penilaian' => $tgl_penilaian,
            'jenis_nilai' => $jenis_nilai,
            'tipe_nilai' => $tipe_nilai,
            'mapel' => $mapel,
            'email' => $email,
        ]);

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
