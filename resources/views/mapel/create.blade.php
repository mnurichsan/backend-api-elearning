@extends('layouts.dashboard')
@section('title','Create Mapel')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('detail.kelas',[$kelas->slug,$kelas->id])}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('mapel.store',$kelas->slug)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Mapel</label>
                        <input type="text" name="name" class="form-control form-control-user rounded-pill @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Guru</label>
                        <select class="custom-select custom-select-md" name="guru">
                            <option selected>-- Guru -- </option>
                            @foreach($gurus as $guru)
                            <option value="{{$guru->id}}">{{$guru->name}}</option>
                            @endforeach
                        </select>
                        @error('jurusan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    <button type="reset" class="btn btn-danger float-right mr-1">Reset</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection