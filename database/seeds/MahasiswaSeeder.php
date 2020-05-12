<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Mahasiswa::insert([
            [
                'nama' => 'Salim',
                'nim' => '001',
                'email' => 'hi@salim.id',
                'jurusan' => 'Komputer',
            ],
            [
                'nama' => 'Anisa',
                'nim' => '002',
                'email' => 'anisa@salim.id',
                'jurusan' => 'Akuntansi',
            ],
            [
                'nama' => 'Fulan',
                'nim' => '003',
                'email' => 'fulan@salim.id',
                'jurusan' => 'Geografi',
            ],
            [
                'nama' => 'Fulani',
                'nim' => '004',
                'email' => 'fulani@salim.id',
                'jurusan' => 'Mesin',
            ],
            [
                'nama' => 'Anas',
                'nim' => '005',
                'email' => 'anas@salim.id',
                'jurusan' => 'Farmasi',
            ],
        ]);
    }
}
