<?php

namespace Database\Seeds\Dev;

use AdminSeeder;
use App\Models\Contract;
use App\Models\Loan;
use App\Models\LoanInstallment;
use App\Models\Phone;
use App\Models\ProfessionalClass;
use App\Models\RG;
use App\Models\ScoreCheck;
use App\Models\User;
use App\Models\UserDocument;
use App\Models\UserPersonalInfo;
use App\Models\UserPreferences;
use App\Models\Address;
use App\Services\DocumentsService;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * @var DocumentsService
     */
    private $documentsService;

    /**
     * UserSeeder constructor.
     * @param DocumentsService $documentsService
     */
    public function __construct(DocumentsService $documentsService)
    {
        $this->documentsService = $documentsService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);

        echo "Fake Loan User Documents\n";

        $document = factory(UserDocument::class)->create();
        $document1 = factory(UserDocument::class)->create();

    	echo "Fake Loan User\n";
    	$user = factory(User::class)->create([
    	    'name' => 'Billy Graham',
            'email' => 'notreve.miranda@gmail.com',
            'password' => '100jesus',
            'identity_proof_front_id' => $document->id,
            'identity_proof_back_id' => $document1->id,
            'professional_class_id' => ProfessionalClass::inRandomOrder()->first()->id,
        ]);

        $document = factory(UserDocument::class)->create();

        $address = factory(Address::class)->create();

    	$personalInfo = factory(UserPersonalInfo::class)->create([
    	    'user_id' => $user->id,
            'income_proof_id' => $document->id
        ]);

        echo "Fake Loan Contract\n";
    	$contract = factory(Contract::class)->create();

    	echo "Fake Loan\n";
    	$loan = factory(Loan::class)->create([
    	    'user_id' => $user->id,
            'contract_id' => $contract->id
        ]);

    	echo "Fake Loan Installments\n";
    	factory(LoanInstallment::class, $loan->num_installments)->create([
            'loan_id' => $loan->id,
            'status' => LoanInstallment::PENDING
        ]);
    }
}
