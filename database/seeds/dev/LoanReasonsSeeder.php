<?php
namespace Database\Seeds\Dev;

use App\Models\LoanReason;
use Illuminate\Database\Seeder;

class LoanReasonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoanReason::create([
            'title' => 'VIAGEM'
        ]);

        LoanReason::create([
            'title' => 'QUITAR DÍVIDAS'
        ]);

        LoanReason::create([
            'title' => 'INVESTIMENTO'
        ]);

        LoanReason::create([
            'title' => 'EDUCAÇÃO'
        ]);

        LoanReason::create([
            'title' => 'IMPOSTOS'
        ]);

        LoanReason::create([
            'title' => 'OUTROS'
        ]);
    }
}
