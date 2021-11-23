@extends('layout.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Nilai</h2>
            </div>
        </div>
    </div>

            <div class="pull-left">
                <form action="{{ route('rapot.show') }}" method="post">
                @csrf
                    <strong>Mapel : {{ $mapel }}</strong>
                    <input type="hidden" name="kelas" id="kelas" class="btn btn-secondary mb-1" value="{{ $kelas }}">
                    <select name="jurusan" id="jurusan" class="btn btn-secondary mb-1">
                    @foreach ($jurusan as $i => $jurusann)
                        <option value="{{ $jurusann->nama }}">{{ $jurusann->nama }}</option>
                    @endforeach
                    </select>
                    <select name="tahun" id="tahun" class="btn btn-secondary mb-1">
                    @foreach ($tahun as $u => $tahunn)
                        <option value="{{ $tahunn->tahun_ajaran }}">{{ $tahunn->tahun_ajaran }}</option>
                    @endforeach
                    </select>
                    <select name="semester" id="semester" class="btn btn-secondary mb-1">
                    @foreach ($semester as $e => $semesterr)
                        <option value="{{ $semesterr->semester }}">{{ $semesterr->semester }}</option>
                    @endforeach
                    </select>
                    <button type="submit" class="btn btn-block btn-primary">Cari</button>
                </form>
            </div>
        </div>


@endsection
