@extends('layout.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Tahun Ajaran</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('tahun.index') }}">Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tahun.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="ta">Tahun Ajaran :</label >
                <input type="text" id="ta" name="tahun_ajaran" class="form-control" placeholder="Tahun Ajaran">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
                <button type="reset" class="btn btn-danger mt-3">Reset</button>
        </div>
    </div>

</form>
</div>
@endsection
