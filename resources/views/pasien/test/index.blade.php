@extends('pasien.main')
@section('container')
<section class="section">
          <div class="section-header">
            <h1>Konsultasi</h1>
          </div>
<form action="/pasien/test" method="POST">
    @csrf   
          @foreach($gejala as $g)
<div class="form-check">
<input class="form-check-input" type="checkbox" name="gejala[]" value="{{ $g->id }}" id="gejala{{ $g->id }}">
        <label class="form-check-label" for="gejala{{ $g->id }}">
          
        {{ $g->nama_gejala }}
    </label>
</div>
@endforeach
<br>
<button type="submit" class="btn btn-primary">Tes</button>
</form>

<!-- <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Checked checkbox
  </label>
</div> -->

</section>
@endsection