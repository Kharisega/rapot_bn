@extends('layout.app')

@section('content')
<div class="container">
        <div class="col-lg-20 margin-tb alert alert-primary text-center mt-3">
            <div class="pull-left">
                <h2>Data Guru</h2>
            </div>
            <div class="text-right">
                <a href="{{ route('guru.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
        </div>

    @if ($message = Session::get('success'))
        <div class="table-responsive">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-dark table-hover align-middle">
        <tr >
                <th scope="col">No</th>
                <th scope="col">ID Guru</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat, tanggal lahir</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Foto</th>
                <th scope="col">Mata Pelajaran</th>
                <th scope="col">Kelas yang diampu</th>
                <th scope="col">Status</th>
                <th scope="col">Kelas Bimbingan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        </td>
        @foreach ($guru as $i => $gur)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $gur->id_guru }}</td>
                <td>{{ $gur->nip }}</td>
                <td>{{ $gur->nama_guru }}</td>
                <td>{{ $gur->jk_guru }}</td>
                <td>{{ $gur->ttl_guru }}</td>
                <td>{{ $gur->telp_guru }}</td>
                <td>{{ $gur->alamat_guru }}</td>
                <td><img src="{{ $gur->foto_guru }}" alt="{{ $gur->foto_guru }}"></td>
                <td>{{ $gur->mapel }}</td>
                <td>{{ $gur->kelas }}</td>
                <td>{{ $gur->status }}</td>
                <td>{{ $gur->kelas_bimbingan }}</td>
                <td>
                    <form action="{{ route('guru.destroy', $gur->id_guru) }}" method="POST">
                        <a href="{{ route('guru.edit',$gur->id_guru) }}" class="btn btn-success btn-sm">Edit</a>    

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    {!! $guru->links() !!}
</div>
@endsection
