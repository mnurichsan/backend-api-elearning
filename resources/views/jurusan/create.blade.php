@extends('layouts.dashboard')
@section('title','Create Jurusan')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('jurusan.index')}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('jurusan.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Jurusan</label>
                        <input type="text" name="name" class="form-control form-control-user rounded-pill @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control form-control-user @error('description') is-invalid @enderror"></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                    <button type="reset" class="btn btn-danger float-right mr-1">Reset</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection