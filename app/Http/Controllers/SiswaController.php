<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::latest()->paginate(5);
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
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
            'nama_siswa' => 'required',
            'nisn' => 'required',
            'ttl' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'status_keluarga' => 'required',
            'status_anak' => 'required',
            'alamat_siswa' => 'required',
            'tanggal_terima' => 'required',
            'nomor_telp_siswa' => 'required',
            'sekolah_asal' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat_ortu' => 'required',
            'nomor_telp_ortu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'nama_wali' => 'required',
            'alamat_wali' => 'required',
            'nomor_telp_wali' => 'required',
            'pekerjaan_wali' => 'required',
            'foto_siswa' => 'required',
        ]);
        Siswa::create($request->all());
        return redirect()->route('siswa.index')->with('success', "Data Berhasil di input");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'nisn' => 'required',
            'ttl' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'status_keluarga' => 'required',
            'status_anak' => 'required',
            'alamat_siswa' => 'required',
            'tanggal_terima' => 'required',
            'nomor_telp_siswa' => 'required',
            'sekolah_asal' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'alamat_ortu' => 'required',
            'nomor_telp_ortu' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'nama_wali' => 'required',
            'alamat_wali' => 'required',
            'nomor_telp_wali' => 'required',
            'pekerjaan_wali' => 'required',
            
        ]);
        $siswa->update($request->all());
        return redirect()->route('siswa.index')->with('success', 'Data Siswa berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data Siswa berhasil dihapus');
    }
}
