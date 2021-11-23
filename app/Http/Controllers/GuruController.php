<?php

namespace App\Http\Controllers;

use App\Guru;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::latest()->paginate(5);
        return view('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = DB::table('jurusan')->get();
        $kelas = DB::table('kelas')->get();
        $mapel = DB::table('mapel')->get();
        return view('guru.create', [
            'jurusan' => $jurusan,
            'kelas' => $kelas,
            'mapel' => $mapel,
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
            'nip' => 'required',
            'nama_guru' => 'required',
            'jk_guru' => 'required',
            'ttl_guru' => 'required',
            'telp_guru' => 'required',
            'alamat_guru' => 'required',
            'foto_guru' => 'required',
            'mapel' => 'required',
            'kelas' => 'required',
            'status' => 'required',
            'kelas_bimbingan' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $user->assignRole('guru')->get();
        Guru::create($request->all());
        return redirect()->route('guru.index')->with('success', "Data Berhasil di input");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        return view('guru.index', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'jk_guru' => 'required',
            'ttl_guru' => 'required',
            'telp_guru' => 'required',
            'alamat_guru' => 'required',
            'mapel' => 'required',
            'kelas' => 'required',
            'status' => 'required',
            'kelas_bimbingan' => 'required',
        ]);
        $guru->update($request->all());
        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();
        return redirect()->route('guru.index')->with('success', 'Data Guru berhasil dihapus');
    }
}
