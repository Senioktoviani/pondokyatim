<?php

namespace Database\Seeders;

use App\Models\AnakAsuh;
use Illuminate\Database\Seeder;

class AnakAsuhseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $asuh1 = AnakAsuh::create(['nama' => 'Ucup', 'tempat_lahir' => 'Bandung',
            'tgl_lahir' => '2021-10-29', 'jenis_kelamin' => 'Laki-laki', 'pendidikan' => 'SD',
            'nama_ortu_wali' => 'Danang', 'alamat_tinggal' => 'Cangkuang']);

        $asuh2 = AnakAsuh::create(['nama' => 'Icip', 'tempat_lahir' => 'Surabaya',
            'tgl_lahir' => '2021-10-29', 'jenis_kelamin' => 'Perempuan', 'pendidikan' => 'SD',
            'nama_ortu_wali' => 'Mimin', 'alamat_tinggal' => 'Sekeawi']);

        $asuh3 = AnakAsuh::create(['nama' => 'Acep', 'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '2021-10-29', 'jenis_kelamin' => 'Laki-laki', 'pendidikan' => 'SD',
            'nama_ortu_wali' => 'Jubaedah', 'alamat_tinggal' => 'Ciboogo']);

    }
}
