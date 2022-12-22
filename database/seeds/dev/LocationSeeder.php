<?php

namespace Database\Seeds\Dev;

use App\Models\Address;
use Database\Seeds\Locations\CountriesSeeder;
use Database\Seeds\Locations\AcreSeeder;
use Database\Seeds\Locations\AlagoasSeeder;
use Database\Seeds\Locations\AmapaSeeder;
use Database\Seeds\Locations\AmazonasSeeder;
use Database\Seeds\Locations\BahiaSeeder;
use Database\Seeds\Locations\CearaSeeder;
use Database\Seeds\Locations\DistritoFederalSeeder;
use Database\Seeds\Locations\EspiritoSantoSeeder;
use Database\Seeds\Locations\GoiasSeeder;
use Database\Seeds\Locations\MaranhaoSeeder;
use Database\Seeds\Locations\MatoGrossoDoSulSeeder;
use Database\Seeds\Locations\MatoGrossoSeeder;
use Database\Seeds\Locations\MinasGeraisSeeder;
use Database\Seeds\Locations\ParaibaSeeder;
use Database\Seeds\Locations\ParanaSeeder;
use Database\Seeds\Locations\ParaSeeder;
use Database\Seeds\Locations\PernambucoSeeder;
use Database\Seeds\Locations\PiauiSeeder;
use Database\Seeds\Locations\RioDeJaneiroSeeder;
use Database\Seeds\Locations\RioGrandeDoNorteSeeder;
use Database\Seeds\Locations\RioGrandeDoSulSeeder;
use Database\Seeds\Locations\RondoniaSeeder;
use Database\Seeds\Locations\RoraimaSeeder;
use Database\Seeds\Locations\SantaCatarinaSeeder;
use Database\Seeds\Locations\SaoPauloSeeder;
use Database\Seeds\Locations\SergipeSeeder;
use Database\Seeds\Locations\TocantinsSeeder;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	echo "Country\n";
		$this->call(CountriesSeeder::class);

		echo "State\n";
		$this->call(AcreSeeder::class);
		$this->call(AlagoasSeeder::class);
		$this->call(AmapaSeeder::class);
		$this->call(AmazonasSeeder::class);
		$this->call(BahiaSeeder::class);
		$this->call(CearaSeeder::class);
		$this->call(DistritoFederalSeeder::class);
		$this->call(EspiritoSantoSeeder::class);
		$this->call(GoiasSeeder::class);
		$this->call(MaranhaoSeeder::class);
		$this->call(MatoGrossoDoSulSeeder::class);
		$this->call(MatoGrossoSeeder::class);
		$this->call(MinasGeraisSeeder::class);
		$this->call(ParaibaSeeder::class);
		$this->call(ParanaSeeder::class);
		$this->call(ParaSeeder::class);
		$this->call(PernambucoSeeder::class);
		$this->call(PiauiSeeder::class);
		$this->call(RioDeJaneiroSeeder::class);
		$this->call(RioGrandeDoNorteSeeder::class);
		$this->call(RioGrandeDoSulSeeder::class);
		$this->call(RondoniaSeeder::class);
		$this->call(RoraimaSeeder::class);
		$this->call(SantaCatarinaSeeder::class);
		$this->call(SaoPauloSeeder::class);
		$this->call(SergipeSeeder::class);
		$this->call(TocantinsSeeder::class);

        echo "Address\n";
    	factory(Address::class, 5)->create();
    }
}
