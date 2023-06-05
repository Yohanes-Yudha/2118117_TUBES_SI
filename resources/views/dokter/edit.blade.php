@extends('dokter.main')

@section('container')
<body>
<div class="section-body">
<br>
<br>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">        
        <div class="card" style="width: 50%;">
        <div class="card-body">
        <!-- action buat mengarahkan form ini kemana, diarahkan ke store -->
        <form action="/dokter/{{$hasilkonsul->id}}" method='POST'>
            @method('put')
            <!-- crsf buat token, kalo ga pake ini error 419 page expired --> 
            @csrf
        <br>
        <div class="form-group">
                <label for="nama_dokter">Nama Dokter</label>
                <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="{{$hasilkonsul->nama_dokter}}">
            </div>
            <div class="form-group">
                <label for="nama_pasien">Nama Pasien</label>
                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="{{$hasilkonsul->nama_pasien}}">
            </div>
            <div class="form-group">
                <label for="hasil_konsultasi">Hasil Konsultasi</label>
                <textarea class="form-control" id="hasil_konsultasi" name="hasil_konsultasi">{{$hasilkonsul->hasil_konsultasi}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        
        
        </form>
        </div>  
        </div>
    </div>



  
    </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script> -->
    <script src="/js/dashboard.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="{{asset('assets/modules/select2/dist/js/select2.full.min.js')}}"></script>
</script>
</body>
            

@endsection