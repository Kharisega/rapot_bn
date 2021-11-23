@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Kompetensi Keahlian</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('jurusan.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-dark table-striped  align-middle">
        <tr>
            <th>No</th>
            <th>ID Kompetensi Keahlian</th>
            <th>Sebutan Kompetensi Keahlian</th>
            <th>Kepanjangan Kompetensi Keahlian</th>
            <th>Aksi</th>
        </tr>
        @foreach ($jurusan as $i => $jurusann)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $jurusann->id_jurusan }}</td>
                <td>{{ $jurusann->nama }}</td>
                <td>{{ $jurusann->alias }}</td>
                <td>
                    <form action="{{ route('jurusan.destroy', $jurusann->id_jurusan) }}" method="POST">
                        <a href="{{ route('jurusan.edit',$jurusann->id_jurusan) }}" class="btn btn-warning btn-sm">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    {!! $jurusan->links() !!}
</div>
@endsection
