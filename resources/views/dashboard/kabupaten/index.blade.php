@extends('dashboard.layouts.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1>Data Kabupaten</h1>
          </div>
          <div class="section-body">
       <div> 
            <a class="btn btn-primary" href="/dashboard/kabupaten/create"> Tambah Data </a>
       </div>
       <br>
      <div class="table-responsive">
        <table class="table table-striped table-sm bg-table">
          <thead>
            <tr>
              <th scope="col">ID </th>
              <th scope="col">Nama Kabupaten </th>
              <th scope="col">Nama Provinsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($kabupaten as $k)
            <tr>
                  <td>{{$k->id_kab}}</td>
                  <td>{{$k->nama_kab}}</td>
                  <td>{{$k->nama_prov}}</td>
                  <td> <a href="/dashboard/kabupaten/{{$k->id_kab}}/edit" class="btn bg-warning text-white">Edit</a>
                       <form class="btn bg-danger" action="/dashboard/kabupaten/{{$k->id_kab}}" method="POST">
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