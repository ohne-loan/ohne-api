<?php

namespace Database\Seeds\Dev;

use Illuminate\Database\Seeder;

class RegisterStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = array(
            array('name' => 'BASIC_DATA', 'sequence_number' => 1),
            array('name' => 'CHECK_ALPHA', 'sequence_number' => 2),
            array('name' => 'APPROVED_ALPHA', 'sequence_number' => 3),
            array('name' => 'REJECTED_ALPHA', 'sequence_number' => 4),
            array('name' => 'ADDITIONAL_DATA', 'sequence_number' => 5),
            array('name' => 'INCOME_AND_PROFESSION', 'sequence_number' => 6),
            array('name' => 'ADDRESS', 'sequence_number' => 7),
            array('name' => 'PERSONAL_REFERENCE', 'sequence_number' => 8),
            array('name' => 'BANK_DETAILS', 'sequence_number' => 9),
            array('name' => 'DOCUMENTS', 'sequence_number' => 10),
            array('name' => 'FACIAL_BIOMETRY', 'sequence_number' => 11),
            array('name' => 'EMAIL_ANALYSIS_PERMISSION', 'sequence_number' => 12),
            array('name' => 'CHECK_OMEGA', 'sequence_number' => 13),
            array('name' => 'APPROVED_OMEGA', 'sequence_number' => 14),
            array('name' => 'REJECTED_OMEGA', 'sequence_number' => 15),
            array('name' => 'COMPLETED', 'sequence_number' => 16)
        );
    }
}
