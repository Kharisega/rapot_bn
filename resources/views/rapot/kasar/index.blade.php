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
                    <select name="kelas" id="kelas" class="form-control">
                        @foreach ($kelas as $mp => $kelass)
                            <option value="{{ $kelass }}">{{ $kelass }}</option>
                        @endforeach
                    </select>
                    <select name="mapel" id="mapel" class="form-control">
                        @foreach ($mapel as $mp => $mapell)
                            <option value="{{ $mapell }}">{{ $mapell }}</option>
                        @endforeach
                    </select>
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