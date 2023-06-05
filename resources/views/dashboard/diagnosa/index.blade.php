@extends('dashboard.layouts.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1>Data Diagnosa</h1>
          </div>
          <a class="btn btn-danger" href="/diagnosareport"> Report </a>
      <div class="section-body">

       <br>
      <div class="table-responsive">
        <table class="table table-striped table-sm bg-table">
          <thead>
            <tr>
              <th scope="col">ID Diagnosa</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Diagnosa Penyakit</th>
              <th scope="col">Tanggal Diagnosa</th>
            </tr>
          </thead>
          <tbody>
          @foreach($data as $a)
            <tr>  
                  <td>{{$loop->iteration}}</td>
                  <td>{{$a->name}}</td>
                  <td>{{$a->nama_penyakit}}</td>
                  <td>{{$a->created_at}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </section>
@endsection