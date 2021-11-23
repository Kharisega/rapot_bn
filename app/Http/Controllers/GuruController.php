<?php

namespace App\Http\Controllers;

use App\Guru;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Post;
use Illuminate\Support\Facades\DB;
use Image;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = DB::table('guru')
            ->join('guru_has_mapel', 'guru.id_guru', '=', 'guru_has_mapel.id_guru')
            ->join('mapel', 'guru_has_mapel.id_mapel', '=', 'mapel.id_mapel')
            ->join('guru_has_kelas', 'guru.id_guru', '=', 'guru_has_kelas.id_guru')
            ->join('kelas', 'guru_has_kelas.id_kelas', '=', 'kelas.id_kelas')
            ->select(DB::raw('guru.*, GROUP_CONCAT(DISTINCT(nama_mapel)) as nama_mapel, GROUP_CONCAT(DISTINCT(kelas)) as kelas'))
            ->groupBy('id_guru', 
                    'nip',
                    'nama_guru',
                    'email',
                    'jk_guru',
                    'ttl_guru',
                    'telp_guru',
                    'alamat_guru',
                    'foto_guru',
                    'status',
                    'kelas_bimbingan',
                    'created_at',
                    'updated_at')
            ->get();
        return view('guru.index', ['guru'=> $guru]);
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
        // dd($request);
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'jk_guru' => 'required',
            'ttl_guru' => 'required',
            'telp_guru' => 'required',
            'alamat_guru' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'mapel' => 'required',
            'kelas' => 'required',
            'status' => 'required',
            'kelas_bimbingan' => 'required',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $image = $request->file('image');
        $nameImage = $request->file('image')->getClientOriginalName();

        $thumbImage = Image::make($image->getRealPath())->resize(85, 85);
        $thumbPath = public_path() . '/fotoguru/' . $nameImage;
        $thumbImage = Image::make($thumbImage)->save($thumbPath);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $user->assignRole('guru')->get();
        Guru::create([
            'nip' => $request['nip'],
            'email' => $request['email'],
            'nama_guru' => $request['nama_guru'],
            'jk_guru' => $request['jk_guru'],
            'ttl_guru' => $request['ttl_guru'],
            'telp_guru' => $request['telp_guru'],
            'alamat_guru' => $request['alamat_guru'],
            'foto_guru' => $nameImage,  
            'status' => $request['status'],
            'kelas_bimbingan' => $request['kelas_bimbingan'],
        ]);

        $id_guru = DB::table('guru')->where('nama_guru', $request['nama_guru'])->value('id_guru');

        for ($i=0; $i < count($request['mapel']); $i++) { 
            $id_mapel = DB::table('mapel')->where('nama_mapel', $request['mapel'][$i])->value('id_mapel');
            
            $datasave = [
                'id_guru'=>$id_guru,
                'id_mapel'=>$id_mapel,
            ];

            $insert = DB::table('guru_has_mapel')->insert($datasave);
        }

        for ($i=0; $i < count($request['kelas']); $i++) { 
            $id_kelas = DB::table('kelas')->where('kelas', $request['kelas'][$i])->value('id_kelas');
            
            $datasave = [
                'id_guru'=>$id_guru,
                'id_kelas'=>$id_kelas,
            ];

            $insert = DB::table('guru_has_kelas')->insert($datasave);
        }

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
        $jurusan = DB::table('jurusan')->get();
        $kelas = DB::table('kelas')->get();
        $mapel = DB::table('mapel')->get();
        $id_mapel = DB::table('guru_has_mapel')->select('id_mapel')->where('id_guru', $guru->id_guru)->get();
        $id_kelas = DB::table('guru_has_kelas')->select('id_kelas')->where('id_guru', $guru->id_guru)->get();

        $mapelku = [];
        foreach ($id_mapel as $key => $mapell) {
            array_push($mapelku, DB::table('mapel')->where('id_mapel', $mapell->id_mapel)->value('nama_mapel'));
        }

        $kelasku = [];
        foreach ($id_kelas as $key => $kelass) {
            array_push($kelasku, DB::table('kelas')->where('id_kelas', $kelass->id_kelas)->value('kelas'));
        }

        return view('guru.edit', ['guru' => $guru, 'kelas'=>$kelas, 'jurusan'=>$jurusan, 'kelasku' => $kelasku, 'mapelku' => $mapelku, 'mapel' => $mapel]);
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
        // dd($request);
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
        $id_guru = DB::table('guru')->where('nama_guru', $request['nama_guru'])->value('id_guru');

        for ($i=0; $i < count($request['mapel']); $i++) { 
            $id_mapel = DB::table('mapel')->where('nama_mapel', $request['mapel'][$i])->value('id_mapel');
            $processexist = DB::table('guru_has_mapel')
                ->where([
                    ['id_guru', $id_guru],
                    ['id_mapel', $id_mapel]
                ])
                ->first();
            
                if ($processexist == null) {
                    $datasave = [
                        'id_guru'=>$id_guru,
                        'id_mapel'=>$id_mapel,
                    ];
        
                    $insert = DB::table('guru_has_mapel')->insert($datasave);   
                }
        }

        for ($i=0; $i < count($request['kelas']); $i++) { 
            $id_kelas = DB::table('kelas')->where('kelas', $request['kelas'][$i])->value('id_kelas');
            $processexist = DB::table('guru_has_kelas')
                ->where([
                    ['id_guru', $id_guru],
                    ['id_kelas', $id_kelas]
                ])
                ->first();
            if ($processexist == null) {
                $datasave = [
                    'id_guru'=>$id_guru,
                    'id_kelas'=>$id_kelas,
                ];
    
                $insert = DB::table('guru_has_kelas')->insert($datasave);
            }
            
        }
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
