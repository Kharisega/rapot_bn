@extends('tahun.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Tahun Ajaran</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('tahun.create') }}" class="btn btn-success">Tambah Data</a>
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
            <th>Tahun Ajaran</th>
            <th>Aksi</th>
        </tr>
        @foreach ($tahun as $i => $tahunn)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $tahunn->id_tahun }}</td>
                <td>{{ $tahunn->tahun_ajaran }}</td>
                <td>
                    <form action="{{ route('tahun.destroy', $tahunn->id_tahun) }}" method="POST">
                        <a href="{{ route('tahun.edit',$tahunn->id_tahun) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    {!! $tahun->links() !!}

@endsection