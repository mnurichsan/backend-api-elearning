@extends('layouts.dashboard')
@section('title','Trash Jurusan')
@section('content')

<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($jurusans as $key => $jurusan)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$jurusan->name}}</td>
                                <td>{{$jurusan->description}}</td>
                                <td>{{$jurusan->image}}</td>
                                <td>
                                    <a href="{{route('jurusan.restore',$jurusan->id)}}" class="btn btn-sm btn-success"><i class="fas fa-recycle"></i></a>
                                    <a href="{{route('jurusan.delete',$jurusan->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
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