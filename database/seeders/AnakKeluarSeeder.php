<?php

namespace Database\Seeders;

use App\Models\AnakKeluar;
use Illuminate\Database\Seeder;

class AnakKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $anak1 = AnakKeluar::create(['nama' => 'haji', 'jenis_kelamin' => 'Laki laki',
            'keterangan' => 'haci']);

        $anak2 = AnakKeluar::create(['nama' => 'usep', 'jenis_kelamin' => 'laki-laki',
            'keterangan' => 'haihi']);

        $anak3 = AnakKeluar::create(['nama' => 'ucup', 'jenis_kelamin' => 'perempuan',
            'keterangan' => 'haha']);

    }
}
