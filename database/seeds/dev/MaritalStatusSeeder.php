<?php
namespace Database\Seeds\Dev;

use App\Models\MaritalStatus;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MaritalStatus::create([
            'title' => 'SOLTEIRO'
        ]);

        MaritalStatus::create([
            'title' => 'CASADO'
        ]);

        MaritalStatus::create([
            'title' => 'UNIÃO ESTÁVEL'
        ]);

        MaritalStatus::create([
            'title' => 'DIVORCIADO'
        ]);

        MaritalStatus::create([
            'title' => 'VIÚVO'
        ]);


    }
}
