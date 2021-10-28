@extends('layout.app')

@section('content')
    <div class="container">
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

                <div class="pull-right">
                    <form action="{{ route('rencana.cari') }}" method="post">
                    @csrf
                        <label class="button">Kelas:</label>
                            <select name="kelas" id="kelas" class="btn btn-primary mb-1">
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select><br>

                        <label class="button">Jurusan:</label>
                            <select name="jurusan" id="jurusan" class="btn btn-primary mb-1">
                                <option value="RPL">RPL</option>
                                <option value="TKRO">TKRO</option>
                                <option value="BKP">BKP</option>
                                <option value="TB">TB</option>
                                <option value="MM">MM</option>
                            </select><br>
                            <br>
                        <a @if( $data == 1 ) href="{{ route('rencana.admin') }}" @else href="{{ route('rencana.index') }}" @endif class="btn btn-primary">Semua</a>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>ID Penilaian</th>
                <th>Nama Penilaian</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Tanggal Penilaian</th>
                <th>Jenis Penilaian</th>
                <th>Tipe Penilaian</th>
                <th>Mata Pelajaran</th>
                <th>E-Mail</th>
                <th @if( $data == 1) hidden @endif>Aksi</th>
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
                            <a href="{{ route('rencana.edit',$rencanaa->id_penilaian) }}" class="btn btn-primary">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Hapus</button>

                        </form>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection
