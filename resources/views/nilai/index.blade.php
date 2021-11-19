@extends('nilai.layouts')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Input Nilai</h2>
            </div>
        </div>
    </div>

                <div class="pull-left">
                <form action="{{ route('nilai.cari') }}" method="post">
                @csrf
                    <select name="kelas" id="kelas" class="form-control">
                        @foreach ($kelas as $u => $kelass)
                            <option value="{{ $kelass->kelas }}">{{ $kelass->kelas }}</option>
                        @endforeach
                    </select>
                    <select name="jurusan" id="jurusan" class="form-control">
                        @foreach ($jurusan as $u => $jurusann)
                            <option value="{{ $jurusann->nama }}">{{ $jurusann->nama }}</option>
                        @endforeach
                    </select>
                    <a href="{{ route('nilai.index') }}" class="btn btn-block btn-primary">Semua</a>
                    <button type="submit" class="btn btn-block btn-primary">Cari</button>
                </form>
            </div>
            

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
            <th>Aksi</th>
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
                <td>
                    
                    <a href="{{ route('nilai.create',$rencanaa->id_penilaian) }}" class="btn btn-primary">Cek Nilai</a>

                    <!-- <form action="{{ route('rencana.edit', $rencanaa->id_penilaian) }}" method="POST">
                        <a href="{{ route('rencana.show',$rencanaa->id_penilaian) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('rencana.edit',$rencanaa->id_penilaian) }}" class="btn btn-primary">Edit</a>

                        @csrf
                        @method('PUT')

                        <button type="submit" class="btn btn-danger">Edit</button>

                    </form> -->
                </td>
            </tr>
            @endforeach
    </table>

    

@endsection