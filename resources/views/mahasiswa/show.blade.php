@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mahasiswa</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>Nama</strong></td>
                                <td><?= $mahasiswa->nama ?></td>
                            </tr>
                            <tr>
                                <td><strong>NIM</strong></td>
                                <td><?= $mahasiswa->nim ?></td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td><?= $mahasiswa->email ?></td>
                            </tr>
                            <tr>
                                <td><strong>Jurusan</strong></td>
                                <td><?= $mahasiswa->jurusan ?></td>
                            </tr>
                        </tbody>
                      </table>
                      <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
