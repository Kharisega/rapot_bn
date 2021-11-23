<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Rencana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function cari(Request $request)
    {
        $rencana = DB::table('penilaian')->where([
            ['kelas', $request->kelas],
            ['jurusan', $request->jurusan],
        ])->get();

        return view('nilai.index', ['rencana' => $rencana]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = DB::table('kelas')->get();
        $jurusan = DB::table('jurusan')->get();
        $rencana = DB::table('penilaian')->where('email', auth()->user()->email)->paginate();
        return view('nilai.index', ['rencana' => $rencana, 'kelas' => $kelas, 'jurusan' => $jurusan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {
        $rencana = DB::table('penilaian')->where('id_penilaian', $request)->get();
        $ambilkelas = $rencana->pluck('kelas');
        $ambiljurusan = $rencana->pluck('jurusan');
        $kelas = DB::table('kelas')->where('kelas', $ambilkelas)->value('id_kelas');
        $jurusan = DB::table('jurusan')->where('nama', $ambiljurusan)->value('id_jurusan');

        $siswa = DB::table('student')->where([
            ['id_kelas', $kelas],
            ['id_jurusan', $jurusan],
        ])->get();

        $nilai = DB::table('penilaian')
            ->leftJoin('tabel_nilai', 'penilaian.id_penilaian', '=', 'tabel_nilai.id_penilaian')
            ->leftJoin('data_siswa', 'tabel_nilai.id_siswa', '=', 'data_siswa.id_siswa')
            ->select('tabel_nilai.*', 'penilaian.*', 'data_siswa.nama_siswa')
            ->where('penilaian.id_penilaian', $request)
            ->get();

        // dd($siswa);
        // dd([$nilai, $siswa]);
        return view('nilai.create', ['siswa' => $siswa, 'rencana' => $rencana, 'nilai' => $nilai,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $no_id = $request->no_id;
        $id_penilaian = $request->id_penilaian;
        $email = $request->email;
        $nama_siswa = $request->nama_siswa;
        $besar_nilai = $request->besar_nilai;
        $ket_nilai = $request->ket_nilai;


        for ($i=0; $i < count($no_id); $i++) { 
            $id_siswa = DB::table('data_siswa')->where('nama_siswa', $nama_siswa[$i])->value('id_siswa');
            $id_guru = DB::table('guru')->where('email', $email)->value('id_guru');
            $processexist = DB::table('tabel_nilai')
                ->where([
                    ['id_penilaian', $id_penilaian],
                    ['id_siswa', $id_siswa],
                    ['id_guru', $id_guru]
                ])
                ->first();
            
            if($processexist == null){
                $id_siswa = DB::table('data_siswa')->where('nama_siswa', $nama_siswa[$i])->value('id_siswa');
                $id_guru = DB::table('guru')->where('email', $email)->value('id_guru');
                
                $datasave = [
                    'id_penilaian'=>$id_penilaian,
                    'id_siswa'=>$id_siswa,
                    'besar_nilai'=>$besar_nilai[$i],
                    'ket_nilai'=>$ket_nilai[$i],
                    'id_guru'=>$id_guru,
                ];

                $insert = DB::table('tabel_nilai')->insert($datasave);
            } else {
                $id_siswa = DB::table('data_siswa')->where('nama_siswa', $nama_siswa[$i])->value('id_siswa');
                $id_guru = DB::table('guru')->where('email', $email)->value('id_guru');
                
                $datasave = [
                    'id_penilaian'=>$id_penilaian,
                    'id_siswa'=>$id_siswa,
                    'besar_nilai'=>$besar_nilai[$i],
                    'ket_nilai'=>$ket_nilai[$i],
                    'id_guru'=>$id_guru,
                ];

                
                Nilai::where([
                    ['id_siswa', $id_siswa],
                    ['id_penilaian', $id_penilaian],
                ])->update($datasave);
            }
            
        }

        $rencana = DB::table('penilaian')->where('email', auth()->user()->email)->paginate();
        $kelas = DB::table('kelas')->get();
        $jurusan = DB::table('jurusan')->get();
        return view('nilai.index', ['rencana' => $rencana, 'kelas' => $kelas, 'jurusan' => $jurusan]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show($lihat)
    {
        $siswa = DB::table('tabel_nilai')
            ->join('penilaian', 'tabel_nilai.id_penilaian', '=', 'penilaian.id_penilaian')
            ->join('data_siswa', 'tabel_nilai.id_siswa', '=', 'data_siswa.id_siswa')
            ->select('tabel_nilai.*', 'penilaian.*', 'data_siswa.nama_siswa')
            ->where('tabel_nilai.id_penilaian', $lihat)
            ->get();

        $check = $siswa->all();
        if ($check == []) {
            $siswa = DB::table('penilaian')->where('id_penilaian', $lihat)->get();
            $data = 0;
            return view('nilai.show', ['siswa'=>$siswa, 'data' => $data]);
        }

        $data = 1;
        return view('nilai.show', ['siswa'=>$siswa, 'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit($lihat)
    {
        $siswa = DB::table('tabel_nilai')
            ->join('penilaian', 'tabel_nilai.id_penilaian', '=', 'penilaian.id_penilaian')
            ->join('data_siswa', 'tabel_nilai.id_siswa', '=', 'data_siswa.id_siswa')
            ->select('tabel_nilai.*', 'penilaian.*', 'data_siswa.nama_siswa')
            ->where('tabel_nilai.id_penilaian', $lihat)
            ->get();

        return view('nilai.edit', ['siswa'=>$siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $no_id = $request->no_id;
        $id_penilaian = $request->id_penilaian;
        $email = $request->email;
        $nama_siswa = $request->nama_siswa;
        $besar_nilai = $request->besar_nilai;
        $ket_nilai = $request->ket_nilai;


        for ($i=0; $i < count($no_id); $i++) { 

            $id_siswa = DB::table('data_siswa')->where('nama_siswa', $nama_siswa[$i])->value('id_siswa');
            $id_guru = DB::table('guru')->where('email', $email)->value('id_guru');
            
            $datasave = [
                'id_penilaian'=>$id_penilaian,
                'id_siswa'=>$id_siswa,
                'besar_nilai'=>$besar_nilai[$i],
                'ket_nilai'=>$ket_nilai[$i],
                'id_guru'=>$id_guru,
            ];

            
            Nilai::where([
                ['id_siswa', $id_siswa],
                ['id_penilaian', $id_penilaian],
            ])->update($datasave);
        }
        
        $rencana = DB::table('penilaian')->where('email', auth()->user()->email)->paginate();
        return view('nilai.index', ['rencana' => $rencana]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
