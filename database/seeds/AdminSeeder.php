<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $admin = new \App\User;
    $admin->username = "administrator";
    $admin->name = "Ari Nuryadi";
    $admin->email = "nuryadiari8@gmail.com";
    $admin->address = "Sukawangi";
    $admin->phone = "0899274";
    $admin->roles = json_encode(["ADMIN"]);
    $admin->password = \Hash::make("larashop");

    $admin->save();

    $this->command->info("User Admin Berhasil diinsert");
    }
}
