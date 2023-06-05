@extends('dokter.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1>Data Hasil Konsultasi</h1>
          </div>
          <div class="section-body">
          <div> 
            <a class="btn btn-primary" href="/dokter/create"> Tambah Data </a>
            <a class="btn btn-danger" href="/reporthasil"> Report </a>
       </div>
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
              <th scope="col">Action</th>
             
            </tr>
          </thead>
          <tbody>
            @foreach($user as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama_dokter}}</td>
                <td>{{$item->nama_pasien}}</td>
                <td>{{$item->hasil_konsultasi}}</td>
                <td>{{$item->created_at}}</td>    
                <td> <a href="/dokter/{{$item->id}}/edit" class="btn btn-warning"> 
                       <span data-feather="edit" class="align-text-bottom"></span>Edit</a>
                       <form class="btn bg-danger" action="/dokter/{{$item->id}}" method="POST">
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