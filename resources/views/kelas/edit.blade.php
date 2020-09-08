@extends('layouts.dashboard')
@section('title','Edit Kelas')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('kelas.index')}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('kelas.update',$kelas->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Kelas</label>
                        <input type="text" name="name" class="form-control form-control-user rounded-pill @error('name') is-invalid @enderror" value="{{$kelas->name}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select class="custom-select custom-select-md" name="jurusan">
                            <option selected>-- Jurusan -- </option>
                            @foreach($jurusans as $jurusan)
                            <option value="{{$jurusan->id}}" @if($jurusan->id == $kelas->id_jurusan) selected @endif>{{$jurusan->name}}</option>
                            @endforeach
                        </select>
                        @error('jurusan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Wali Kelas</label>
                        <select class="custom-select custom-select-md" name="guru">
                            <option selected>-- Guru -- </option>
                            @foreach($gurus as $guru)
                            <option value="{{$guru->id}}" @if($guru->id == $kelas->id_user) selected @endif>{{$guru->name}}</option>
                            @endforeach
                        </select>
                        @error('jurusan')
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