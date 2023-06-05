@extends('dashboard.layouts.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1> Data Pasien</h1>
          </div>
          <div class="section-body">
       <div> 
       <br>
       <a href="/pasienreport" class="btn bg-danger text-white" >Report</a>
      <div class="table-responsive">
        <table class="table table-striped table-sm bg-table">
          <thead>
            <tr>
              <th scope="col">ID </th>
              <th scope="col">Nama </th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($user as $u)
            <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{ $u->name }}</td>
                  <td>{{ $u->email }}</td>
                  <td>{{ $u->role }}</td>
                  <td> <a href="/dashboard/pasien/{{$u->id}}/edit" class="btn bg-warning text-white">Edit</a>
                       <form class="btn bg-danger" action="/dashboard/pasien/{{$u->id}}" method="POST">
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