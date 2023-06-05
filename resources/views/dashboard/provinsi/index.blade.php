@extends('dashboard.layouts.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1>Data Provinsi</h1>
          </div>
          <div class="section-body">
       <div> 
            <a class="btn btn-primary" href="/dashboard/provinsi/create"> Tambah Data </a>
       </div>
       <br>
      <div class="table-responsive">
        <table class="table table-striped table-sm bg-table">
          <thead>
            <tr>
              <th scope="col">ID </th>
              <th scope="col">Nama Provinsi</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($provinsi as $p)
            <tr>
                  <td>{{$p->id}}</td>
                  <td>{{$p->nama}}</td>
                  <td> <a href="/dashboard/provinsi/{{$p->id}}/edit" class="btn bg-warning text-white">Edit</a>
                       <form class="btn bg-danger" action="/dashboard/provinsi/{{$p->id}}" method="POST">
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