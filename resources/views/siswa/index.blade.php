@extends('siswa.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Siswa</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('siswa.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ID Siswa</th>
            <th>Nama Siswa</th>
            <th>NISN</th>
            <th>NIS</th>
            <th>Tempat, tanggal lahir</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Status Keluarga</th>
            <th>Status Anak</th>
            <th>Alamat Siswa</th>
            <th>Nomor Telepon Siswa</th>
            <th>Sekolah Asal</th>
            <th>Tanggal Terima</th>
            <th>Nama Ayah</th>
            <th>Nama Ibu</th>
            <th>Alamat Ortu</th>
            <th>Nomor Telepon Ortu</th>
            <th>Pekerjaan Ayah</th>
            <th>Pekerjaan Ibu</th>
            <th>Nama Wali</th>
            <th>Alamat Wali</th>
            <th>Nomor Telepon Wali</th>
            <th>Pekerjaan Wali</th>
            <th>Foto Siswa</th>
            <th>Aksi</th>
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
                <td><img src="{{ $siswi->foto_siswa }}" alt="{{ $siswi->foto_siswa }}"></td>
                <td>
                    <form action="{{ route('siswa.destroy', $siswi->id_siswa) }}" method="POST">
                        <a href="{{ route('siswa.edit',$siswi->id_siswa) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    {!! $siswa->links() !!}

@endsection