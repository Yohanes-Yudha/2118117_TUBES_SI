<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Diagnosa</title>
</head>
<center><h1>Data Diagnosa</h1> </center>
<body>
<div class="table-responsive-xl">
  <table border="1" style="width: 100%;" class="table-dark table-striped "> 
  <thead>
            <tr>
              <th scope="col">ID Diagnosa</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Diagnosa Penyakit</th>
              <th scope="col">Tanggal Diagnosa</th>
            </tr>
          </thead>
          <tbody>
          @foreach($Dtdiagnosa as $a)
            <tr>  
                  <td>{{$loop->iteration}}</td>
                  <td>{{$a->name}}</td>
                  <td>{{$a->nama_penyakit}}</td>
                  <td>{{$a->created_at}}</td>
            </tr>
            @endforeach
          </tbody>
    </div>
</body>
</html>