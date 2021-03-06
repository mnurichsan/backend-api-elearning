@extends('layouts.dashboard')
@section('title','Kelas')
@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('kelas.create')}}" class="btn btn-md btn-primary rounded-pill shadow-lg"><i class="fas fa-plus"></i> Add Kelas</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Jurusan</th>
                                <th>Wali Kelas</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kelass as $key => $kelas)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$kelas->name}}</td>
                                <td>{{$kelas->jurusan->name}}</td>
                                <td>{{$kelas->walikelas['name']}}</td>
                                <td><img src="{{asset($kelas->image)}}" class="img-fluid" width="100px"></td>
                                <td>
                                    <a href="{{route('kelas.edit',$kelas->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="{{route('kelas.destroy',$kelas->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
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