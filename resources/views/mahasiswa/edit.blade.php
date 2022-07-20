@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Mahasiswa</h3>
                        <div class="card-tools">
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-sm btn-danger">
                                Kembali
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-warning">{{ $error }}
                                </div>
                            @endforeach
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-warning">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ method_field('patch') }}
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value={{ $mahasiswa->nama }} class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" value={{ $mahasiswa->nim }} class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" value={{ $mahasiswa->alamat }} class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="telp">telp</label>
                                <input type="text" name="telp" value={{ $mahasiswa->telp }} class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
