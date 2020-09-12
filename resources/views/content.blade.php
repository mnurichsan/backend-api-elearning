@extends('layouts.dashboard')
@section('title','Content')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h1>Jurusan</h1>
                <hr />
                <div class="row">
                    @foreach($jurusans as $jurusan)
                    <div class="col-lg-3">
                        <a href="{{route('content.kelas',$jurusan->id)}}" style="color: inherit;">
                            <div class="card text-dark">
                                <img src="{{asset($jurusan->image)}}" class="card-img-top img-fluid" alt="..." style="width: 18rem; height: 10rem;">
                                <div class="card-body">
                                    <h5 class="card-text">{{$jurusan->name}}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>
@endsection