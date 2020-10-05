@extends('layouts.dashboard')
@section('title','Mapel')
@section('content')

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col">
            <a href="{{route('detail.kelas',[$kelas->slug,$kelas->id])}}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex">
                    Mata Pelajaran
                </div>
                <div class="card-body">
                    <h5 class="font-weight-bold">{{$mapel->name}}</h5>
                    <p style="white-space:pre-wrap">{{$mapel->description}}</p>
                    <p>Guru : {{$mapel->guru->name}}</p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="info-box">
                <span class="info-box-icon bg-success">
                    <i class="fas fa-spell-check"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        <a href="" class="text-reset">
                            Absen
                        </a>
                    </span>
                    <span class="info-box-number">1</span>
                </div>
            </div>
            <div class="info-box">
                <span class="info-box-icon bg-success">
                    <i class="fas fa-spell-check"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        <a href="" class="text-reset">
                            Materi
                        </a>
                    </span>
                    <span class="info-box-number">1</span>
                </div>
            </div>
            <div class="info-box">
                <span class="info-box-icon bg-success">
                    <i class="fas fa-spell-check"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        <a href="" class="text-reset">
                            Tugas
                        </a>
                    </span>
                    <span class="info-box-number">1</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection