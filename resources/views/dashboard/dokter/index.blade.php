@extends('dashboard.layouts.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1>Data Dokter</h1>
          </div>
      <div class="section-body">
       <br>
      <div class="table-responsive">
        <table class="table table-striped table-sm bg-table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Kabupaten</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <div> 
            <a class="btn btn-primary" href="/dashboard/dokter/create"> Tambah Data </a>
            <a class="btn btn-danger" href="/dokterreport"> Report </a>
          </div>
          <tbody>
            @foreach ($user as $u)
            <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$u->nama_user}}</td>
                  <td>{{$u->email}}</td>
                  <td>{{$u->role}}</td>
                  <td>{{$u->nama_kabupaten}}</td>
                  <td>{{$u->nama_provinsi}}</td>
                  <td> <a href="/dashboard/dokter/{{$u->id}}/edit" class="btn bg-warning text-white"> Edit</a>
                       <form class="btn bg-danger" action="/dashboard/dokter/{{$u->id}}" method="POST">
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