<?php

use App\Csubmission;
use Illuminate\Database\Seeder;

class CsubmissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fields = [
            ['name' => 'Sakit'],
            ['name' => 'Izin'],
            ['name' => 'Cuti']
        ];

        foreach ($fields as $field) {
            Csubmission::create($field);
        }
    }
}
