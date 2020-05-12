@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mahasiswa</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($mahasiswa->isNotEmpty())
                                @foreach ($mahasiswa as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nim }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('mahasiswa.show', $item->id) }}" class="btn btn-outline-secondary">Lihat</a>
                                                <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-outline-secondary">Sunting</a>
                                                <a href="{{ route('mahasiswa.destroy', $item->id) }}" class="btn btn-outline-secondary">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6">
                                        <div class="alert alert-warning">
                                            Tidak ada mahasiswa. Silakan jalankan <code>php artisan db:seed</code> terlebih dahulu.
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
