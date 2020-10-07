@extends('layouts.dashboard')
@section('title','Tugas')
@section('content')
<div class="row">
    <div class="col text-center">
        <h5>{{$kelass->name}} - {{$mapels->name}}</h5>
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        <div class="col">
            <a href="{{route('mapel.show',[$kelass->slug,$mapels->slug])}}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('tugas.create',[$kelass->slug,$mapels->slug])}}" class="btn btn-md btn-primary rounded-pill shadow-lg"><i class="fas fa-plus"></i> Add Tugas</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tugas</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Berakhir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tugass as $key => $tugas)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tugas->name}}</td>
                                <td>{{$tugas->start_at->format('d-m-Y')}}</td>
                                <td>{{$tugas->end_at->format('d-m-Y')}}</td>
                                <td>
                                    <a href="{{route('tugas.kumpul',[$kelass->slug,$mapels->slug,$tugas->id])}}" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('tugas.edit',[$kelass->slug,$mapels->slug,$tugas->id])}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('tugas.delete',[$kelass->slug,$mapels->slug,$tugas->id])}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
                                </td>
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