<?php

namespace Database\Seeders;

use App\models\Donatur;
use Illuminate\Database\Seeder;

class DonaturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $donatur1 = Donatur::create(['nama' => 'haji', 'nominal' => 50000,
            'tanggal' => '2021-09-21', 'telepon' => '076724592']);

        $donatur2 = Donatur::create(['nama' => 'usep', 'nominal' => 90000,
            'tanggal' => '2021-09-21', 'telepon' => '076724592']);

        $donatur3 = Donatur::create(['nama' => 'ucup', 'nominal' => 70000,
            'tanggal' => '2021-09-21', 'telepon' => '076724592']);

    }
}
