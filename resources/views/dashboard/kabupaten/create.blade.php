@extends('dashboard.layouts.main')

@section('container')
<body>
<div class="section-body">
<br>
<br>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">        
        <div class="card" style="width: 50%;">
        <div class="card-body">
        <!-- action buat mengarahkan form ini kemana, diarahkan ke store -->
        <form action="/dashboard/kabupaten/store" method='POST'>
            <!-- crsf buat token, kalo ga pake ini error 419 page expired --> 
            @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID </label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Kabupaten </label>
            <input type="text" class="form-control" name="nama">
        </div>
        <br>
        <select class="form-select" name="id_prov" aria-label="Default select example">
            <option >Pilih Provinsi</option>
                @foreach($provinsi as $p)
            <option value="{{$p->id}}">{{$p->nama}}</option>
                @endforeach
        </select>
<br>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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