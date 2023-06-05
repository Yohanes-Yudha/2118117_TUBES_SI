@extends('dashboard.layouts.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1>Data Konsultasi</h1>
          </div>
          <div class="section-body">
       <div> 
            <a class="btn btn-danger" href="/konsulreport"> Report </a>
       </div>
       <br>
      <div class="table-responsive">
        <table class="table table-striped table-sm bg-table">
          <thead>
            <tr>
              <th scope="col">ID </th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Nama Dokter</th>
              <th scope="col">Tanggal Konsultasi</th>
            </tr>
          </thead>
          <tbody>
          @foreach($konsultasi as $u)
            <tr>
                  <td>{{$u->id}}</td>
                  <td>{{$u->nama_pasien}}</td>
                  <td>{{$u->nama_dokter}}</td>
                  <td>{{$u->tanggal}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </section>
@endsection