@extends('pasien.main')
@section('container')
<section class="section">
          <div class="section-header">
            <h1>Pilih Dokter Anda</h1>
          </div>
<form action="/pasien/report/{{$data->id}}" class="section-body" method="POST">
    @csrf
    <div class="mb-3">
            <label for="id_gejala" class="form-label">ID GEJALA</label>
            <input type="text" class="form-control" name="id_gejala" value="{{$gejala->id_gejala}}">
        </div>
        <div class="mb-3">
            <label for="id_gejala" class="form-label">KODE GEJALA</label>
            <input type="text" class="form-control" name="id_gejala" value="{{$gejala->kode_gejala}}">
        </div>
        <div class="mb-3">
            <label for="nama_gejala" class="form-label">NAMA GEJALA</label>
            <input type="text" class="form-control"name="nama_gejala" value="{{$gejala->nama_gejala}}" >
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    <button class="btn btn-primary mt-3">Submit</button>
</form>
</section>
@endsection