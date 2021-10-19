@extends('mapel.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Mapel</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('mapel.create') }}" class="btn btn-success">Tambah Data</a>
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
            <th>ID Mata Pelajaran</th>
            <th>Nama Mata Pelajaran</th>
            <th>Jenis Mata Pelajaran</th>
            <th>Kompetensi Keahlian</th>
            <th>Aksi</th>
        </tr>
        @foreach ($mapel as $i => $mata)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $mata->id_mapel }}</td>
                <td>{{ $mata->nama_mapel }}</td>
                <td>{{ $mata->jenis_mapel }}</td>
                <td>{{ $mata->jurusan }}</td>
                <td>
                    <form action="{{ route('mapel.destroy', $mata->id_mapel) }}" method="POST">
                        <a href="{{ route('mapel.edit',$mata->id_mapel) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    {!! $mapel->links() !!}

@endsection