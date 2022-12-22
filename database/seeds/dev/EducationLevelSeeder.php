<?php

namespace Database\Seeds\Dev;

use App\Models\EducationLevel;
use Illuminate\Database\Seeder;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EducationLevel::create([
           'id' => EducationLevel::Fundamental,
           'title' => 'Ensino fundamental'
        ]);

        EducationLevel::create([
            'id' => EducationLevel::Medio,
            'title' => 'Ensino médio'
        ]);

        EducationLevel::create([
            'id' => EducationLevel::Superior,
            'title' => 'Curso superior'
        ]);

        EducationLevel::create([
            'id' => EducationLevel::Mestrado,
            'title' => 'Mestrado'
        ]);

        EducationLevel::create([
            'id' => EducationLevel::Doutorado,
            'title' => 'Doutorado'
        ]);
    }
}
