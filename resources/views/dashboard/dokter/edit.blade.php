@extends('dashboard.layouts.main')

@section('container') 
<body>
<div class="section-body">
<br>
<br>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">        
        <div class="card" style="width: 50%;">
        <div class="card-body">
        <!-- action buat mengarahkan form ini kemana-->
        <form action="/dashboard/dokter/{{$user->id}}" method="POST">
            @method('put')
            <!-- crsf buat token, kalo ga pake ini error 419 page expired --> 
            @csrf
      
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control"name="email" value="{{$user->email}}" >
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" class="form-control"name="role" value="{{$user->role}}" >
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



  
    </main>
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