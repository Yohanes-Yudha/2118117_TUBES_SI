@extends('dashboard.layouts.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1>Data Penyakit</h1>
          </div>
      <div class="section-body">
        <div> 
            <a class="btn btn-primary" href="/dashboard/penyakit/create"> Tambah Data </a>
       </div>
       <br>
      <div class="table-responsive">
        <table class="table table-striped table-sm bg-table">
          <thead>
            <tr>
              <th scope="col">ID_Penyakit</th>
              <th scope="col">Kode Penyakit</th>
              <th scope="col">Nama Penyakit</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($penyakit as $p)
            <tr>
                  <td>{{$loop->iteration }}</td>
                  <td>{{$p->kode_penyakit }}</td>
                  <td>{{$p->nama_penyakit}}</td>
                  <td>{{$p->deskripsi}}</td>
                  <td> <a href="/dashboard/penyakit/{{$p->id_penyakit}}/edit" class="btn btn-warning">Edit</a>
                       <form class="btn bg-danger" action="/dashboard/penyakit/{{$p->id_penyakit}}" method="POST">
                        @method('delete') 
                        @csrf
                       <input class="btn btn-danger" type="submit" value="delete" > 
                       <span data-feather="trash" class="align-text-bottom"></span> 
                       </form>   
                  </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </section>
@endsection