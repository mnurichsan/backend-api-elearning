@extends('layouts.dashboard')
@section('title','Create Tugas')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('tugas.index',[$kelass->slug,$mapels->slug])}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('tugas.store',[$kelass->slug,$mapels->slug])}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Tugas</label>
                        <input type="text" name="name" class="form-control form-control-user rounded-pill @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Awal</label>
                        <div class="input-group">
                            <input type="date" name="start_at" class="form-control" />
                        </div>
                        @error('start_at')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Tanggal Akhir</label>
                        <div class="input-group">
                            <input type="date" name="end_at" class="form-control" />
                        </div>
                        @error('end_at')
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