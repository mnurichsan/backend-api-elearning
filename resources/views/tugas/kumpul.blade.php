@extends('layouts.dashboard')
@section('title','Kumpul Tugas')
@section('content')
<div class="row">
    <div class="col text-center">
        <h5></h5>
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        <div class="col">
            <a href="{{route('tugas.index',[$kelass->slug,$mapels->slug])}}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{$mapels->name}} - {{$tugasid->name}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>File</th>
                                    <th>Tanggal Kumpul</th>
                                    <th>Jam</th>
                                    <th>Nilai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tugass as $key => $tugas)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$tugas->siswa->name}}</td>
                                    <td><a target="_blank" class="btn btn-sm btn-primary" href="{{asset($tugas->file)}}">lihat File</a></td>
                                    <td>{{$tugas->tanggal_kumpul->format('d-m-Y')}}</td>
                                    <td>{{$tugas->tanggal_kumpul->format('h:i:s')}}</td>
                                    <td>{{$tugas->nilai}}</td>
                                    <td class="text-center"><a href="{{route('delete.kumpul',[$kelass->slug,$mapels->slug,$tugas->id])}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection