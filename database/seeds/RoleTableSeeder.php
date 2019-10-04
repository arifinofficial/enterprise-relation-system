<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            ['name' => 'admin'],
            ['name' => 'hrd'],
            ['name' => 'accounting'],
            ['name' => 'employee'],
        ];

        foreach ($fields as $field) {
            Role::create($field);
        }
    }
}
