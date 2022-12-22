<?php

use App\Exceptions\NotImplementedException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 * @throws NotImplementedException
	 */
    public function run()
    {
        DB::beginTransaction();
        
        try {
            if ( config('app.env') === 'local' ) {
                $this->call(Database\Seeds\Dev\RolePermissionSeeder::class);
                $this->call(Database\Seeds\Dev\BankSeeder::class);
                $this->call(Database\Seeds\Dev\LocationSeeder::class);
                $this->call(Database\Seeds\Dev\AddressSeeder::class);
                $this->call(Database\Seeds\Dev\ScoreRateSeeder::class);
                $this->call(Database\Seeds\Dev\ParameterSeeder::class);
                $this->call(Database\Seeds\Dev\EducationLevelSeeder::class);
                $this->call(Database\Seeds\Dev\LoanReasonsSeeder::class);
                $this->call(Database\Seeds\Dev\MaritalStatusSeeder::class);
                $this->call(Database\Seeds\Dev\ProfessionalClassSeeder::class);
                $this->call(Database\Seeds\Dev\FaqSeeder::class);
                $this->call(Database\Seeds\Dev\ConfigurationSeeder::class);
                $this->call(Database\Seeds\Dev\UserSeeder::class);
            } else {
                throw new NotImplementedException();
            }
            
            $this->call(ApiClientSeeder::class);
    
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();
            throw $ex;
        }
    }
}
