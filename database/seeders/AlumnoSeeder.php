<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        alumno::factory()->count(10)->create();
    }
}
