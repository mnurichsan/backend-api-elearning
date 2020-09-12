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
                <h5>Kelas - {{$kelas->name}}</h5>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                Daftar Mapel
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($siswas as $key => $siswa)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$siswa->name}}</td>
                                                <td>{{$siswa->email}}</td>
                                                <td>
                                                    <a href="" class="btn btn-primary">Detail</a>
                                                    <a href="" class="btn btn-success">Hapus</a>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                Daftar Siswa
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>email</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>email</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach($siswas as $key => $siswa)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$siswa->name}}</td>
                                                <td>{{$siswa->email}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection