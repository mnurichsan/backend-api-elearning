@extends('layouts.dashboard')
@section('title','Edit Siswa')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{route('siswa.index')}}" class="btn btn-md btn-success rounded-pill shadow-lg"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('siswa.update',$siswa->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <input type="text" name="name" value="{{$siswa->name}}" class="form-control form-control-user rounded-pill @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select class="custom-select custom-select-md" name="id_kelas">
                            <option selected>-- Kelas -- </option>
                            @foreach($kelass as $kelas)
                            <option value="{{$kelas->id}}" @if($kelas->id == $siswa->id_kelas) selected @endif>{{$kelas->name}}</option>
                            @endforeach
                        </select>
                        @error('id_kelas')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{$siswa->email}}" class="form-control form-control-user rounded-pill @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control form-control-user rounded-pill @error('password') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="konfirmpass" class="form-control form-control-user rounded-pill @error('konfirmpass') is-invalid @enderror">
                        @error('konfirmpass')
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