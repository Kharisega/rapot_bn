@extends('rencana.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Rencana Penilaian</h2>
            </div>
            <div class="pull-right" @if( $data == 1) hidden @endif>
                <a href="{{ route('rencana.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
        </div>
    </div>

                <div class="pull-left">
                <form action="{{ route('rencana.cari') }}" method="post">
                @csrf
                    <select name="kelas" id="kelas" class="form-control">
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                    <select name="jurusan" id="jurusan" class="form-control">
                        <option value="RPL">RPL</option>
                        <option value="TKRO">TKRO</option>
                        <option value="BKP">BKP</option>
                        <option value="TB">TB</option>
                        <option value="MM">MM</option>
                    </select>
                    <a @if( $data == 1 ) href="{{ route('rencana.admin') }}" @else href="{{ route('rencana.index') }}" @endif class="btn btn-primary">Semua</a>
                    <button type="submit" class="btn btn-block btn-primary">Cari</button>
                </form>
            </div>
            

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-dark table-hover align-middle">
        <tr>
            <th scope="col">No</th>
            <th scope="col">ID Penilaian</th>
            <th scope="col">Nama Penilaian</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Tanggal Penilaian</th>
            <th scope="col">Jenis Penilaian</th>
            <th scope="col">Tipe Penilaian</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">E-Mail</th>
            <th scope="col" @if( $data == 1) hidden @endif>Aksi</th>
        </tr>
        @foreach ($rencana as $i => $rencanaa)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $rencanaa->id_penilaian }}</td>
                <td>{{ $rencanaa->nama_penilaian }}</td>
                <td>{{ $rencanaa->kelas }}</td>
                <td>{{ $rencanaa->jurusan }}</td>
                <td>{{ $rencanaa->tgl_penilaian }}</td>
                <td>{{ $rencanaa->jenis_nilai }}</td>
                <td>{{ $rencanaa->tipe_nilai }}</td>
                <td>{{ $rencanaa->mapel }}</td>
                <td>{{ $rencanaa->email }}</td>
                <td @if( $data == 1) hidden @endif>
                    <form action="{{ route('rencana.destroy', $rencanaa->id_penilaian) }}" method="POST">
                        <a href="{{ route('rencana.edit',$rencanaa->id_penilaian) }}" class="btn btn-success btn-sm w-100">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm w-100">Hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
    </table>

    

@endsection