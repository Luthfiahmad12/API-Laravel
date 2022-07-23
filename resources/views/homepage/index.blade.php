@extends('layouts.template')

@section('content')
    <div style="padding-buttom:20px" class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/admin" class="btn btn-success me-md-2" type="button"><b> Halaman Admin</b></a>
    </div>
    <div class="container mt-5">
        <div style="text-align: center">
            <h1 style="color: white"><strong> DATA MAHASISWA</strong></h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body rounded" style="background: black">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="color: white">
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Telp</th>
                                </tr>
                            </thead>
                            <tbody style="color: white">
                                @foreach ($mahasiswa as $data)
                                    <tr>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->nim }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->telp }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $mahasiswa->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
