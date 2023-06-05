@extends('pasien.main')
@section('container')
<section class="section">
          <div class="section-header">
            <h1>Konsultasi</h1>
          </div>
   
    <table class="table">
       <tr>
        <td>Nama Dokter</td>
        <td>Tanggal</td>
       </tr>
       @foreach($konsultasi as $k)
       <tr>
        <td>{{$k->name}}</td>
        <td>{{$k->tanggal}}</td>
       </tr>
       @endforeach
    </table>

</section>
@endsection