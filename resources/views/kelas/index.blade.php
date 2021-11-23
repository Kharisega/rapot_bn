@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Kelas</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('kelas.create') }}" class="btn btn-success">Tambah Data</a>
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
            <th>ID Kelas</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        @foreach ($kelas as $i => $kelass)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $kelass->id_kelas }}</td>
                <td>{{ $kelass->kelas }}</td>
                <td>
                    <form action="{{ route('kelas.destroy', $kelass->id_kelas) }}" method="POST">
                        <a href="{{ route('kelas.edit', $kelass->id_kelas) }}" class="btn btn-warning btn-sm">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    {!! $kelas->links() !!}
</div>
@endsection
