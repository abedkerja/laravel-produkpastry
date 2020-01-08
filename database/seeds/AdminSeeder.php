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
        $administrator = new \App\User;
        $administrator->username = "admin aja";
        $administrator->name = "Site Admin";
        $administrator->email = "pastryomah@gmail.com";
        $administrator->roles = json_encode(["ADMIN"]);
        // $administrator->roles = 'admin';
        $administrator->password = \Hash::make("omahpastry48");
        $administrator->avatar = "tidak-ada-image.png";
        $administrator->address = "Muja-Muju, Umbulharjo, Yogyakarta";
        $administrator->phone = "0875859909";

        $administrator->save();

        $this->command->info("User Admin berhasil ditambahkan");
    }
}
