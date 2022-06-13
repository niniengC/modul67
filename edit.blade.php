@extends('main')

@section('container')
<div class="container mt-3" style="color:#082e64 ;">
    <h3>Edit Data Mahasiswa</h3>
</div>
<div class="container mt-4">
    <form action="/data_mahasiswa/{{$mahasiswa->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mt-3">
            <div class="col">
        <label for="nama">Nama Mahasiswa</label>
        <input type="text" name="nama" id="nama" value="{{$mahasiswa->nama}}" class="form-control">
            </div>
            <div class="col">
        <label for="email">Alamat Email</label>
        <input type="email" name="email" id="email" value="{{$mahasiswa->email}}" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
        <label for="nama">NIM</label>
        <input type="text" name="nrp" id="nrp" value="{{$mahasiswa->nrp}}" class="form-control">
            </div>
            <div class="col">
        <label for="alamat">Alamat Rumah</label>
        <input type="text" name="alamat" id="alamat" value="{{$mahasiswa->alamat}}" class="form-control">
                <div class="d-flex justify-content-end mt-5">
        <button type="submit" class="btn btn-primary" style="background-color:#082e64;">Edit</button>
                </div>
        </div>
    </form>
</div>
@endsection