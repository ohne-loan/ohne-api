<?php

namespace Database\Seeds\Dev;

use App\Models\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'name' => 'site.construction',
            'value' => 'false'
        ]);

        Configuration::create([
            'name' => 'without.money',
            'value' => 'false'
        ]);

        Configuration::create([
            'name' => 'max.amount.invoice',
            'value' => '10000'
        ]);
    }
}
