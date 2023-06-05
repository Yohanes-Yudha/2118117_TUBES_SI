


@extends('dashboard.layouts.main')

@section('container')
<section class="section">
          <div class="section-header">
            <h1>Tambah Data Penyakit</h1>
          </div>
      <div class="section-body">
        <div class="card" style="width: 50%;">
        <div class="card-body">
        <!-- action buat mengarahkan form ini kemana, diarahkan ke store -->
        <form action="/dashboard/penyakit/store" method='POST'>
            <!-- crsf buat token, kalo ga pake ini error 419 page expired --> 
            @csrf
        <div class="mb-3">
            <label for="kode_penyakit" class="form-label">KODE PENYAKIT</label>
            <input type="text" class="form-control" name="kode_penyakit">
        </div>
        <div class="mb-3">
            <label for="nama_penyakit" class="form-label">NAMA PENYAKIT</label>
            <input type="text" class="form-control"name="nama_penyakit">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">DESKRIPSI</label>
            <textarea class="form-control" name="deskripsi" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        </div>  
        </div>
    </div>
    </section>

  
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script> -->
    <script src="/js/dashboard.js"></script>
</body>


@endsection