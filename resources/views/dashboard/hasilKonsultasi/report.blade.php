<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Hasil Konsultasi</title>
</head>
<center><h1>Data Hasil Konsultasi</h1> </center>
<body>
<div class="table-responsive-xl">
  <table border="1" style="width: 100%;" class="table-dark table-striped "> 
  <thead>
            <tr>
              <th scope="col">ID Konsultasi</th>
              <th scope="col">Nama Dokter</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Hasil Konsultasi</th>
              <th scope="col">Tanggal Konsultasi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($Dthasilkonsul as $h)
            <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$h->nama_dokter}}</td>
                  <td>{{$h->nama_pasien}}</td>
                  <td>{{$h->hasil_konsultasi}}</td>
                  <td>{{$h->created_at}}</td>      
            </tr>
            @endforeach
          </tbody>
    </div>
</body>
</html>