@extends('layout.app')

@section('content')
<div class="container">
    <div class="mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Semester</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('semester.create') }}" class="btn btn-success">Tambah Data</a>
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
            <th>ID Semester</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
        @foreach ($semester as $i => $semesterr)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $semesterr->id_semester }}</td>
                <td>{{ $semesterr->semester }}</td>
                <td>
                    <form action="{{ route('semester.destroy', $semesterr->id_semester) }}" method="POST">
                        <a href="{{ route('semester.edit',$semesterr->id_semester) }}" class="btn btn-warning btn-sm">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    {!! $semester->links() !!}
</div>
@endsection
