@extends('dashboard.layouts.main')

@section('container')

<section class="section">
          <div class="section-header">
            <h1>Data Gejala</h1>
          </div>
          <div class="section-body">
          <div> 
            <a class="btn btn-primary" href="/dashboard/gejala/create"> Tambah Data </a>
       </div>
       <br>
      <div class="table-responsive">
        <table class="table table-striped table-sm bg-table">
          <thead>
            <tr>
              <th scope="col">ID_Gejala</th>
              <th scope="col">Kode Gejala</th>
              <th scope="col">Nama Gejala</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($gejala as $g)
            <tr>
                  <td>{{$g->id_gejala }}</td>
                  <td>{{$g->kode_gejala }}</td>
                  <td>{{$g->nama_gejala }}</td>
                  <td> <a href="/dashboard/gejala/{{$g->id_gejala}}/edit" class="btn btn-warning ">Edit</a>
                       <form class="btn bg-danger p=10px" action="/dashboard/gejala/{{$g->id_gejala}}" method="POST">
                        @csrf
                        @method('delete')
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