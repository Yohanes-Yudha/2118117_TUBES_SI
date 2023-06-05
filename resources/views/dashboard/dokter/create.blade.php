@extends('dashboard.layouts.main')

@section('container') 
<body>
<div class="section-body">
    
<h2>Tambah Data Dokter</h2>
 
<br>
<br>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.css" rel="stylesheet" >



<!-- Custom styles for this template -->
<link href="/css/dashboard.css" rel="stylesheet">


    
        <!-- action buat mengarahkan form ini kemana, diarahkan ke store -->
        <form action="/dashboard/dokter/store" method='POST'>
            <!-- crsf buat token, kalo ga pake ini error 419 page expired --> 
            @csrf   
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control"name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control"name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control"name="password">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" class="form-control"name="role">
        </div>
        <div class="form-group">
                      <label>Masukkan Provinsi</label>
                        <select class="form-control select2"  name="id_prov" id="id_prov">
                        @foreach($provinsi as $p)
                        <option value="{{$p->id}}">{{$p->nama}}</option>
                        @endforeach
                      </select>
        </div>
        <div class="form-group">
                      <label>Masukkan Kabupaten</label>
                        <select class="form-control select2"  name="id_kab" id="id_kab">
                      </select>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </div>  
        </div>
    </div>



  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script> -->
    <script src="/js/dashboard.js"></script>
    <script>
    $(document).ready(function() {
        $('select[name="id_prov"]').on('change', function() {
            var provinsiId = $(this).val();
            if (provinsiId) {
                $.ajax({
                    url: '/get-kabupaten/' + provinsiId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('select[name="id_kab"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="id_kab"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('select[name="id_kab"]').empty();
            }
        });
    });
</script>

</body>
@endsection








