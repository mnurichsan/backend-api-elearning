@extends('layouts.dashboard')
@section('title','Content')
@section('content')
<div class="row">
    <div class="col ml-2 mb-2">
        <a href="{{route('content.index')}}" class="btn btn-success btn-sm">Back</a>
    </div>
</div>
<div class="row">
    <div class="col ml-2 mr-2">
        <div class="card">
            <div class="card-header border-bottom-0 d-flex justify-content-between align-items-center px-3">
                <label>{{$jurusanName->name}}</label>
            </div>
            <div class="table-responsive">
                <table class="table mb-0">
                    <tbody>
                        @foreach($kelass as $kelas)
                        <tr>
                            <td width="1%">
                                <img src="https://via.placeholder.com/60">
                            </td>
                            <td>
                                <a href="{{route('detail.kelas',[$kelas->slug,$kelas->id])}}" class="text-decoration-none font-weight-bold text-reset">{{$kelas->name}}</a>
                                <div class="text-secondary text-justify">
                                    Wali Kelas - {{$kelas->walikelas->name}}
                                </div>
                            </td>
                            <!-- <td nowrap="nowrap" class="text-right">
                                <div class="d-inline-block">
                                    <button type="button" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" class="btn btn-link border-0 p-0 text-secondary ">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <h6 class="dropdown-item">Action</h6>
                                        <a href="" class="dropdown-item">Edit</a>
                                        <a href="" class="dropdown-item">Delete</a>
                                    </div>
                                </div>
                            </td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection