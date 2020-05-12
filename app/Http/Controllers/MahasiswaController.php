<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Requests\MahasiswaStore;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Mahasiswa::getAllJurusan();

        return view('mahasiswa.create', compact('jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MahasiswaStore $request)
    {
        $data = $request->validated();

        if (Mahasiswa::create($data)) {
            alert('mahasiswa', 'Sukses menyimpan data.', 'success');
        } else {
            alert('mahasiswa', 'Gagal menyimpan data.', 'danger');
        }

        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $jurusan = Mahasiswa::getAllJurusan();

        return view('mahasiswa.edit', compact('mahasiswa', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(MahasiswaStore $request, Mahasiswa $mahasiswa)
    {
        $data = $request->validated();

        if ($mahasiswa->update($data)) {
            alert('mahasiswa', 'Sukses memperbarui data.', 'success');
        } else {
            alert('mahasiswa', 'Gagal memperbarui data.', 'danger');
        }

        return redirect('/mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        if ($mahasiswa->delete()) {
            alert('alert', 'Sukses menghapus data.', 'success');
        } else {
            alert('alert', 'Gagal menghapus data.', 'danger');
        }

        return redirect('/mahasiswa');
    }
}
