@extends('layouts.dashboard')
@section('title','Guru')
@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('guru.create')}}" class="btn btn-md btn-primary rounded-pill shadow-lg"><i class="fas fa-plus"></i> Add Guru</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>email</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($gurus as $key => $guru)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$guru->name}}</td>
                                <td>{{$guru->email}}</td>
                                <td>
                                    <a href="{{route('guru.edit',$guru->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('guru.destroy',$guru->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
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