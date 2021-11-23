@extends('layout.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Penilaian yang ada</h2>
            </div>
        </div>
    </div>

            <div class="pull-left">
                <form action="{{ route('lihat.cari') }}" method="post">
                @csrf
                    <select name="jenis_penilaian" id="jenis_penilaian" class="btn btn-secondary mb-1">
                    @foreach ($jenis_nilai as $u => $jenis_nilaii)
                        <option value="{{ $jenis_nilaii->jenis_nilai }}">{{ $jenis_nilaii->jenis_nilai }}</option>
                    @endforeach
                    </select>
                    <a href="{{ route('cek.nilai') }}" class="btn btn-primary">Semua</a>
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
                        <a href="{{ route('lihat.nilai',$rencanaa->id_penilaian) }}" class="btn btn-block btn-primary">Lihat Nilai</a>
                </td>
            </tr>
            @endforeach
    </table>
</div>


@endsection
