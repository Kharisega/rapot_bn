<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\User;
use App\Student;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $jurusan = DB::table('jurusan')->get();
        $kelas = DB::table('kelas')->get();
        return view('siswa.create', [
            'jurusan' => $jurusan,
            'kelas' => $kelas,
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
            'foto_siswa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $image = $request->file('foto_siswa');
        $nameImage = $request->file('foto_siswa')->getClientOriginalName();

        $thumbImage = Image::make($image->getRealPath())->resize(85, 85);
        $thumbPath = public_path() . '/fotosiswa/' . $nameImage;
        $thumbImage = Image::make($thumbImage)->save($thumbPath);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $nama_siswa = $request['nama_siswa'];
        $id_kelas = DB::table('kelas')->where('kelas', $request->kelas)->value('id_kelas');
        $id_jurusan = DB::table('jurusan')->where('nama', $request->jurusan)->value('id_jurusan');
        $tahun = DB::table('tahun_ajaran')->orderBy('created_at', 'desc')->value('id_tahun');
        $semester = DB::table('semester')->where('semester', 'Ganjil')->value('id_semester');
        $email = $request['email'];

        $student = DB::table('student')->insert([
            'nama_siswa' => $nama_siswa,
            'id_kelas' => $id_kelas,
            'id_jurusan' => $id_jurusan,
            'id_semester' => $semester,
            'id_tahun' => $tahun,
            'email' => $email,
        ]);

        $user->assignRole('siswa')->get();
        Siswa::create(
            [
                'nama_siswa' => $request['nama_siswa'],
                'nisn' => $request['nisn'],
                'ttl' => $request['ttl'],
                'jk' => $request['jk'],
                'agama' => $request['agama'],
                'status_keluarga' => $request['status_keluarga'],
                'status_anak' => $request['status_anak'],
                'alamat_siswa' => $request['alamat_siswa'],
                'tanggal_terima' => $request['tanggal_terima'],
                'nomor_telp_siswa' => $request['nomor_telp_siswa'],
                'sekolah_asal' => $request['sekolah_asal'],
                'nama_ayah' => $request['nama_ayah'],
                'nama_ibu' => $request['nama_ibu'],
                'alamat_ortu' => $request['alamat_ortu'],
                'nomor_telp_ortu' => $request['nomor_telp_ortu'],
                'pekerjaan_ayah' => $request['pekerjaan_ayah'],
                'pekerjaan_ibu' => $request['pekerjaan_ibu'],
                'nama_wali' => $request['nama_wali'],
                'alamat_wali' => $request['alamat_wali'],
                'nomor_telp_wali' => $request['nomor_telp_wali'],
                'pekerjaan_wali' => $request['pekerjaan_wali'],
                'foto_siswa' => $nameImage,
        ]);
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
