@extends('guru.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Guru</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('guru.create') }}" class="btn btn-success">Tambah Data</a>
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
            <th>ID Guru</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat, tanggal lahir</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Mata Pelajaran</th>
            <th>Kelas yang diampu</th>
            <th>Status</th>
            <th>Kelas Bimbingan</th>
        </tr>
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
                        <a href="{{ route('guru.edit',$gur->id_guru) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    {!! $guru->links() !!}

@endsection