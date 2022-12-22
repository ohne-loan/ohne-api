<?php
namespace Database\Seeds\Dev;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'postal_code' => str_random(10),
            'number' => 1,
            'address' => str_random(10),
            'neighborhood' => str_random(10),
            'state' => 'PR',
            'city' => 'Curitiba'
        ]);
    }
}
