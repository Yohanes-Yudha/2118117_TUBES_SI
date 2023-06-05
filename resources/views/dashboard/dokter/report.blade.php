<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Dokter</title>
</head>
<center><h1>Data Dokter</h1> </center>
<body>
<div class="table-responsive-xl">
  <table border="1" style="width: 100%;" class="table-dark table-striped "> 
    <thead>
    <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>
              <th scope="col">Provinsi</th>
              <th scope="col">Kabupaten</th>
       

            </tr>
    </thead>
    <tbody>
    @foreach ($DtDokter as $u)
            <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $u->nama_user }}</td>
                  <td>{{ $u->email }}</td>
                  <td>{{ $u->role }}</td>
                  <td>{{$u->nama_kabupaten}}</td>
                  <td>{{$u->nama_provinsi}}</td>
            </tr>
     @endforeach
    </tbody> 
    </div>
</body>
</html>