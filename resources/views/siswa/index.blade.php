@extends('layouts.dashboard')
@section('title','Siswa')
@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('siswa.create')}}" class="btn btn-md btn-primary rounded-pill shadow-lg"><i class="fas fa-plus"></i> Add Siswa</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswas as $key => $siswa)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$siswa->name}}</td>
                                <td>{{$siswa->email}}</td>
                                <td>{{$siswa->siswa['name']}}</td>
                                <td>
                                    <a href="{{route('siswa.edit',$siswa->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('siswa.destroy',$siswa->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
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