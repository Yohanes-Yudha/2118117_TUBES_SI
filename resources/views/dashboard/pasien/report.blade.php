<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Pasien</title>
</head>
<center><h1>Data Pasien</h1> </center>
<body>
<div class="table-responsive-xl">
  <table border="1" style="width: 100%;" class="table-dark table-striped "> 
    <thead>
      <tr>
        <th scope="col">ID </th>
        <th scope="col">Nama </th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
      </tr>
    </thead>
    <tbody>
    @foreach($DtPasien as $item)
      <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name }}</td>
            <td>{{$item->email }}</td>
            <td>{{$item->role }}</td>
            
      </tr>
     @endforeach
    </tbody> 
    </div>
</body>
</html>