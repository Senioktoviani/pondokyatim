<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat role admin
        $adminRole = new Role;
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin Pondok yatim";
        $adminRole->save();

        // membuat sample admin
        $admin = new User;
        $admin->name = "Admin Pondok Yatim";
        $admin->email = "adminyatim@gmail.com";
        $admin->password = bcrypt("12345678");
        $admin->save();
        $admin->attachRole($adminRole);

    }
}
