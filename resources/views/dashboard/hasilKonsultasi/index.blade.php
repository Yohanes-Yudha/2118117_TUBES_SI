@extends('dashboard.layouts.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1>Data Hasil Konsultasi</h1>
          </div>
          <br>
          <a class="btn btn-danger" href="/hasilkonsulreport"> Report </a>
          <div class="section-body">
       <div> 
       <br>
      <div class="table-responsive">
        <table class="table table-striped table-sm bg-table">
          <thead>
            <tr>
              <th scope="col">ID Konsultasi</th>
              <th scope="col">Nama Dokter</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Hasil Konsultasi</th>
              <th scope="col">Tanggal Konsultasi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($hasilkonsuldb as $h)
            <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$h->nama_dokter}}</td>
                  <td>{{$h->nama_pasien}}</td>
                  <td>{{$h->hasil_konsultasi}}</td>
                  <td>{{$h->created_at}}</td>      
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </section>
@endsection