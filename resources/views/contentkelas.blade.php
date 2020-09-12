@extends('layouts.dashboard')
@section('title','Content')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{route('content.index')}}" class="btn btn-success">Back</a>
            </div>
            <div class="card-body">
                <h1>{{$jurusanName->name}}</h1>
                <hr />
                <div class="row">
                    @foreach($kelass as $kelas)
                    <div class="col-lg-3">
                        <a href="{{route('detail.kelas',[$kelas->slug,$kelas->id])}}" style="color: inherit;">
                            <div class="card">
                                <img src="{{asset($kelas->image)}}" class="card-img-top img-fluid" alt="..." style="width: 18rem; height: 10rem;">
                                <div class="card-body">
                                    <h5 class="card-text">{{$kelas->name}}</h5>
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