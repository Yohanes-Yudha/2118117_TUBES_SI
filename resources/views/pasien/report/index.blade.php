@extends('pasien.main')
@section('container')
<section class="section">
          <div class="section-header">
            <h1>Diagnosa</h1>
          </div>
<form action="/pasien/report/konsultasi" method="POST">
  @csrf
<select class="form-select" name="dokter" aria-label="Default select example">
  <option >Pilih Dokter</option>
  @foreach($dokter as $d)
  <option value="{{$d->id}}">{{$d->name}}</option>
  @endforeach
</select>
       <br>
        <input type="date" name="tanggal" class="form-control">
        <br>
        <button class="btn btn-primary" type="submit">Konsul</button>
</form>
    <table class="table">
       <tr>
        <td>Nama</td>
        <td>Nama Penyakit</td>
        <td>Tanggal</td>
       </tr>
       @foreach($data as $a)
         <tr>
            <td>{{$a->name}}</td>
            <td>{{$a->nama_penyakit}}</td>
            <td>{{$a->tanggal}}</td>
            
         </tr>
       @endforeach
    </table>
</form>
</section>
@endsection