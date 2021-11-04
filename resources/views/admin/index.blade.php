@extends('rencana.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data User</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('admin.show') }}" class="btn btn-success">Tambah Data</a>
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
            <th>ID Pengguna</th>
            <th>Nama</th>
            <th>Status</th>
            <th>E-Mail</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $i => $datas)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $datas->id }}</td>
                <td>{{ $datas->name }}</td>
                <td>
                    @if($datas->role_id == 1) Admin @endif
                    @if($datas->role_id == 2) Guru @endif
                    @if($datas->role_id == 3) Murid @endif
                </td>
                <td>{{ $datas->email }}</td>
                <td>{{ $datas->password }}</td>
                <td>
                <form action="{{ route('admin.destroy', $datas->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Hapus</button>

                </form>
                </td>
            </tr>
            @endforeach
    </table>

@endsection