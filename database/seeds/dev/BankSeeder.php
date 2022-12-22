<?php

namespace Database\Seeds\Dev;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bancos = array(
            array('code' => '104', 'name' => 'Caixa Econômica Federal'),
//            array('code' => '001', 'name' => 'Banco do Brasil'),
            array('code' => '237', 'name' => 'Bradesco'),
            array('code' => '341', 'name' => 'Itaú Unibanco'),
            array('code' => '351', 'name' => 'Santander'),
        );

        foreach ($bancos as $banco){
            Bank::create($banco);
        }
    }
}
