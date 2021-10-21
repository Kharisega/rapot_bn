<?php

namespace App\Http\Controllers;

use App\Tahun;
use Illuminate\Http\Request;

class TahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun = Tahun::latest()->paginate(5);
        return view('tahun.index', compact('tahun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tahun.create');
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
            'tahun_ajaran'=>'required',
        ]);
        Tahun::create($request->all());
        return redirect()->route('tahun.index')->with('success', "Tahun Ajaran Berhasil di input");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function show(Tahun $tahun)
    {
        return view('tahun.index', compact('tahun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function edit(Tahun $tahun)
    {
        return view('tahun.edit', compact('tahun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tahun $tahun)
    {
        $request->validate([
            'tahun_ajaran'=>'required',
        ]);
        $tahun->update($request->all());
        return redirect()->route('tahun.index')->with('success', "Tahun Ajaran berhasil di update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tahun  $tahun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tahun $tahun)
    {
        $tahun->delete();
        return redirect()->route('tahun.index')->with('success', 'Tahun Ajaran berhasil di hapus');
    }
}
