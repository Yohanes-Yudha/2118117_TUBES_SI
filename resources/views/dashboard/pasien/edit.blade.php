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
        <form action="/dashboard/pasien/{{$user->id}}" method='POST'>  
            @method('PUT')
            <!-- crsf buat token, kalo ga pake ini error 419 page expired --> 
            @csrf
        
        <div class="mb-3">
            <label for="nama" class="form-label">Name</label>
            <input type="text" class="form-control"name="nama" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control"name="email" value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control"name="password" value="{{$user->password}}">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </div>  
        </div>
    </div>



  
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script> -->
    <script src="/js/dashboard.js"></script>
</body>


@endsection