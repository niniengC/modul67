@extends('main')

@section('container')
<div class="container mt-3" style="color:#082e64 ;">
    <h3>Input Data Mahasiswa</h3>
</div>
<div class="container mt-4" style="padding-bottom: 100px;">
    <form action="/submit_data" method="POST">
    {{csrf_field()}}
        <div class="row mt-3">
            <div class="col">
        <label for="nama">Nama Mahasiswa</label>
        <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="col">
        <label for="email">Alamat Email</label>
        <input type="email" name="email" id="email" class="form-control">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
        <label for="nama">NIM</label>
        <input type="text" name="nrp" id="nrp" class="form-control">
            </div>
            <div class="col">
        <label for="alamat">Alamat Rumah</label>
        <input type="text" name="alamat" id="alamat" class="form-control">
                <div class="d-flex justify-content-end mt-5">
        <button type="submit" class="btn btn-primary" style="background-color:#082e64;">Submit Data</button>
                </div>
        </div>
    </form>
</div>
@endsection