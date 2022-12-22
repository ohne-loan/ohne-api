<?php

use App\Models\ApiClient;
use Illuminate\Database\Seeder;

class ApiClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApiClient::create([
            'name' => 'api_client',
            'secret' => 'rJhRlv5tqMW2kEbYBteonWtOXpXmNRcA'
        ]);
    }
}
