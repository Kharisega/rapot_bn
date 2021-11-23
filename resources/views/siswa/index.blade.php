@extends('layout.app')

@section('content')
    <div class="container">
        <div class="mb-3">
                <div class="-lg-20 margin-tb alert text-left mt-3">
                    <div class="pull-left">
                        <h2>Data Siswa</h2>
                    </div>
                    <div class="text-left">
                        <a href="{{ route('siswa.create') }}" class="btn btn-success">Tambah Data</a>
                    </div>
                </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="table-responsive">
                <p>{{ $message }}</p>
            </div>
        @endif

    <table class="table table-bordered">
        <tr class="table-success">
            <th scope="col">No</th>
            <th scope="col">ID Siswa</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">NISN</th>
            <th scope="col">NIS</th>
            <th scope="col">Tempat, tanggal lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Status Keluarga</th>
            <th scope="col">Status Anak</th>
            <th scope="col">Alamat Siswa</th>
            <th scope="col">Nomor Telepon Siswa</th>
            <th scope="col">Sekolah Asal</th>
            <th scope="col">Tanggal Terima</th>
            <th scope="col">Nama Ayah</th>
            <th scope="col">Nama Ibu</th>
            <th scope="col">Alamat Ortu</th>
            <th scope="col">Nomor Telepon Ortu</th>
            <th scope="col">Pekerjaan Ayah</th>
            <th scope="col">Pekerjaan Ibu</th>
            <th scope="col">Nama Wali</th>
            <th scope="col">Alamat Wali</th>
            <th scope="col">Nomor Telepon Wali</th>
            <th scope="col">Pekerjaan Wali</th>
            <th scope="col">Foto Siswa</th>
            <th scope="col">Aksi</th>
        </tr>
        @foreach ($siswa as $i => $siswi)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $siswi->id_siswa }}</td>
                <td>{{ $siswi->nama_siswa }}</td>
                <td>{{ $siswi->nisn }}</td>
                <td>{{ $siswi->nis }}</td>
                <td>{{ $siswi->ttl }}</td>
                <td>{{ $siswi->jk }}</td>
                <td>{{ $siswi->agama }}</td>
                <td>{{ $siswi->status_keluarga }}</td>
                <td>{{ $siswi->status_anak }}</td>
                <td>{{ $siswi->alamat_siswa }}</td>
                <td>{{ $siswi->nomor_telp_siswa }}</td>
                <td>{{ $siswi->sekolah_asal }}</td>
                <td>{{ $siswi->tanggal_terima }}</td>
                <td>{{ $siswi->nama_ayah }}</td>
                <td>{{ $siswi->nama_ibu }}</td>
                <td>{{ $siswi->alamat_ortu }}</td>
                <td>{{ $siswi->nomor_telp_ortu }}</td>
                <td>{{ $siswi->pekerjaan_ayah }}</td>
                <td>{{ $siswi->pekerjaan_ibu }}</td>
                <td>{{ $siswi->nama_wali }}</td>
                <td>{{ $siswi->alamat_wali }}</td>
                <td>{{ $siswi->nomor_telp_wali }}</td>
                <td>{{ $siswi->pekerjaan_wali }}</td>
                <td><img src="{{url('/fotosiswa/') . '/' . $siswi->foto_siswa}}" alt="{{ $siswi->foto_siswa }}"></td>
                <td>
                    <form action="{{ route('siswa.destroy', $siswi->id_siswa) }}" method="POST">
                        <a href="{{ route('siswa.edit',$siswi->id_siswa) }}" class="btn btn-success btn-sm mb-9 w-5">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm mb-9 w-5">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    {!! $siswa->links() !!}
</div>
@endsection
