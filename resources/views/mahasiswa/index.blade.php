@extends('layouts.dashboard')
@section('content')
    <div class="container-fluid">
        <!-- table produk -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Mahasiswa</h4>
                        <div class="card-tools">
                            <a href="{{ route('mahasiswa.create') }}" class="btn btn-sm btn-primary">
                                Tambah Baru
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="keyword" id="keyword" class="form-control"
                                        placeholder="ketik keyword disini">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary">
                                        Cari
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
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
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        {{-- <th width="50px">No</th> --}}
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Alamat</th>
                                        <th>No.Telp</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswa as $data)
                                        <tr>
                                            {{-- <td>{{ ++$no }}</td> --}}
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->nim }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->telp }}</td>
                                            <td>
                                                <a href="{{ route('mahasiswa.edit', $data->id) }}"
                                                    class="btn btn-sm btn btn-warning mr-2 mb-2">
                                                    Edit
                                                </a>
                                                <form action="{{ route('mahasiswa.destroy', $data->id) }}" method="post"
                                                    style="display:inline;">
                                                    @csrf
                                                    {{ method_field('delete') }}
                                                    <button type="submit" class="btn btn-sm btn-danger mb-2">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </td>
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
    </div>
@endsection
