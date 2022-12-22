<?php

namespace Database\Seeds\Dev;
use App\Models\ProfessionalClass;
use Illuminate\Database\Seeder;

class ProfessionalClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professionClasses = array(
            array('name' => 'Assalariado'),
            array('name' => 'Servidor Público Estadual'),
            array('name' => 'Servidor Público Federal'),
            array('name' => 'Servidor Público Municipal'),
            array('name' => 'Militar'),
            array('name' => 'Forças Armadas'),
            array('name' => 'Aposentado / Pensionista'),
            array('name' => 'Prestador de Serviço'),
            array('name' => 'Pensão Judicial'),
            array('name' => 'Autônomo'),
            array('name' => 'Profissional Liberal'),
            array('name' => 'Empresário'),
        );

        foreach ($professionClasses as $professionClass){
            ProfessionalClass::create($professionClass);
        }
    }
}
