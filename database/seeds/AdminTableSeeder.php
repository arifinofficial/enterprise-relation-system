<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Arifin N',
            'email' => 'arifinofficial30@gmail.com',
            'password' => bcrypt('arifinganteng'),
            'phone' => '085739928666',
            'address' => 'Jl. Imam Bonjol Gang 100, Gg. SS, No 12D, Pemecutan Klod, Denpasar Barat',
        ];

        $result = User::create($user);

        $result->assignRoleTo('admin');
    }
}
