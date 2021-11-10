@extends('rencana.layouts')

@section('content')
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
                    <input type="text" name="kelas" id="kelas" class="form-control" value="{{ $kelas }}" disabled       >
                    <input type="hidden" name="kelas" id="kelas" class="form-control" value="{{ $kelas }}">
                    <select name="jurusan" id="jurusan" class="form-control">
                    @foreach ($jurusan as $i => $jurusann)
                        <option value="{{ $jurusann->nama }}">{{ $jurusann->nama }}</option>
                    @endforeach
                    </select>
                    <select name="tahun" id="tahun" class="form-control">
                    @foreach ($tahun as $u => $tahunn)
                        <option value="{{ $tahunn->tahun_ajaran }}">{{ $tahunn->tahun_ajaran }}</option>
                    @endforeach
                    </select>
                    <select name="semester" id="semester" class="form-control">
                    @foreach ($semester as $e => $semesterr)
                        <option value="{{ $semesterr->semester }}">{{ $semesterr->semester }}</option>
                    @endforeach
                    </select>
                    <button type="submit" class="btn btn-block btn-primary">Cari</button>
                </form>
            </div>
            

    
@endsection