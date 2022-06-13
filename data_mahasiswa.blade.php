@extends('main')

@section('container')
<div class="container mt-3" style="color:#082e64 ;">
    <h3>Data Mahasiswa</h3>
</div>
<div class="container mt-4">
    <div class="row">
        @foreach ($mahasiswa as $mhs)
        <div class="col-sm-6 mt-3 mb-3">
            <div class="card" style="border-radius: 25px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col"><p class="card-text"><b>{{$mhs->nama}}</b></p></div>
                        <div class="col-sm" style="text-align:right;">
                        <form action="/data_mahasiswa/{{$mhs->id}}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('delete')
                                <button type="submit" style="color:red;background-color:#ffffff;border:1px solid #082e64;border-radius: 50px;"><ion-icon name="trash-outline"></ion-icon></button>
                            </form><span>
                            <button style="background-color:#082e64;border:1px solid #082e64;border-radius: 50px;"><a href="/data_mahasiswa/{{$mhs->id}}/edit"  style="color: white;"><ion-icon name="create-outline"></ion-icon></a></button>
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><p class="card-text">{{$mhs->nrp}}</p></div>
                        <div class="col-sm" style="font-size: 12px;text-align:right;"><p class="card-text" >{{$mhs->email}}</p></div>
                    </div>
                    <div class="row">
                        <div class="col"><p class="card-text">{{$mhs->alamat}}</p></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection