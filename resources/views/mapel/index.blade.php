@extends('layouts.dashboard')
@section('title','Content')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <a href="{{route('content.kelas',$kelas->jurusan->id)}}" class="btn btn-success">Back</a>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-lg-10">
                        <h5>Kelas - {{$kelas->name}}</h5>
                    </div>
                    <div class="col-lg-2">
                        <a href="{{route('mapel.create',$kelas->slug)}}" class="btn btn-sm btn-primary mb-2">Tambah Mapel</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col ml-2 mr-2">
                        <div class="card">
                            <div class="card-header border-bottom-0 d-flex justify-content-between align-items-center px-3">
                                <label>Daftar Mapel</label>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody>
                                        @foreach($mapels as $mapel)
                                        <tr>
                                            <td width="1%">
                                                <img src="https://via.placeholder.com/60">
                                            </td>
                                            <td>
                                                <a href="" class="text-decoration-none font-weight-bold text-reset">{{$mapel->name}}</a>
                                                <div class="text-secondary text-justify">
                                                    {{$mapel->description}}
                                                </div>
                                            </td>
                                            <td nowrap="nowrap" class="text-right">
                                                <div class="d-inline-block">
                                                    <button type="button" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" class="btn btn-link border-0 p-0 text-secondary ">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a href="" class="dropdown-item">Edit</a>
                                                        <a href="{{route('mapel.delete',[$mapel->kelas['slug'],$mapel->id])}}" class="dropdown-item btn-hapus">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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
                                    <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
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