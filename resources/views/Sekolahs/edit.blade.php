@extends('template.dashboard')

@section('body')
<h2>Edit Data</h2>

<div class="card">
    <div class="card-body">
        <form action="{{ route('sekolahs.update', $sekolah->id)}}" class="" method="post">
        @csrf
        @method('PUT')
             <div class="mb-3">
             <label class="form-label">Nama Sekolah</label>
            <input type="text" name="namasekolah" class="form-control" name="example-text-input" 
                placeholder="Masukan Nama Sekolah" value="{{ $sekolah->namasekolah }}">
</div>
<div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" name="example-text-input" 
        placeholder="Masukan Alamat" value="{{ $sekolah->alamat }}">
</div>
<div class="mb-3">
    <label class="form-label">Jurusan</label>
    <input type="text" name="jurusan" class="form-control" name="example-text-input" 
       placeholder="Masukan Nama Jurusan" value="{{ $sekolah->jurusan }}">
</div>
<div class="mb-3">
    <label class="form-label">Jumlah Guru</label>
    <input type="text" name="jumlahguru" class="form-control" name="example-text-input" 
       placeholder="Masukan Jumlah Guru" value="{{ $sekolah->jumlahguru }}">
</div>

<div class="mb-3">
    <input type="submit" value="Simpan" class="btn btn-primary">
</div>

</form>
</div>
</div>
@endsection