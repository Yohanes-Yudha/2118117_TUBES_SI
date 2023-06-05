@extends('dashboard.layouts.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1>Data Aturan</h1>
          </div>
      <div class="section-body">
       
       <br>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <!-- <th scope="col">ID Aturan</th> -->
              <!-- <th scope="col">Kode Aturan</th> -->
              <th scope="col">ID Penyakit</th> 
              <th scope="col">Nama Penyakit</th>
              <th scope="col">ID Gejala</th>
              <th scope="col">Nama Gejala</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($penyakit as $item)
        <tr>  
        <td>{{$item->id_penyakit}}</td> 
        <td>{{$item->nama_penyakit}}</td>
        <td> 
            @foreach($item->gejalas as $g)
              {{$g->id_gejala}} |
            @endforeach
        </td>
        <td>
            @foreach($item->gejalas as $gejala)
              {{$gejala->nama_gejala}} |
            @endforeach 
        </td>
        <td>
        <a href="/dashboard/aturan/{{$item->id_penyakit}}/edit" class="btn btn-warning"> 
           Edit
        </a>
        <form action="/dashboard/aturan/{{$item->id_penyakit}}" method="POST" style="display: inline">
            @method('delete') 
            @csrf
            <button type="submit" class="btn btn-danger btn-xs d-inline-block">Delete</button>
            <!-- <input class="btn btn-danger" type="submit" value="delete" >  -->
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