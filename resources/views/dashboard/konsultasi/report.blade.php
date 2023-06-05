<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Konsultasi</title>
</head>
<center><h1>Data Konsultasi</h1> </center>
<body>
<div class="table-responsive-xl">
  <table border="1" style="width: 100%;" class="table-dark table-striped "> 
  <thead>
            <tr>
              <th scope="col">ID </th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Nama Dokter</th>
              <th scope="col">Tanggal Konsultasi</th>
            </tr>
          </thead>
          <tbody>
          @foreach($Dtkonsul as $u)
            <tr>
                  <td>{{$u->id}}</td>
                  <td>{{$u->nama_pasien}}</td>
                  <td>{{$u->nama_dokter}}</td>
                  <td>{{$u->tanggal}}</td>
            </tr>
            @endforeach
          </tbody>
    </div>
</body>
</html>