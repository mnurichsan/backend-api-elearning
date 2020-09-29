@extends('layouts.dashboard')
@section('title','Trash Kelas')
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
                                <th>Jurusan</th>
                                <th>Wali Kelas</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Jurusan</th>
                                <th>Wali Kelas</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($kelass as $key => $kelas)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$kelas->name}}</td>
                                <td>{{$kelas->jurusan['name']}}</td>
                                <td>{{$kelas->walikelas['name']}}</td>
                                <td><img class="img-fluid" src="{{asset($kelas->image)}}" width="100px"> </td>
                                <td>
                                    <a href="{{route('kelas.restore',$kelas->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-recycle"></i></a>
                                    <a href="{{route('kelas.delete',$kelas->id)}}" class="btn btn-sm btn-danger btn-hapus"><i class="fas fa-trash"></i></a>
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