<?php


namespace App\Services;

use App\Models\BankAccount;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use App\Exceptions\ApiException;

class BankAccountService
{
    public function all(User $user): Collection
    {
        return $user->bankAccounts()
            ->eager()
            ->get();
    }

    public function find(User $user, int $id): BankAccount
    {
        return $user->bankAccounts()
            ->eager()
            ->findOrFail($id);
    }

    public function store(User $user, array $data)
    {
        $this->validateIfUserIsOwner($user->name, $data['owner']);

        $bankAccount = $user->bankAccounts()->firstOrNew([
            'user_id' => $user->id
        ]);

        $newBankAccount = false;

        if (!isset($bankAccount->id)) {
            $newBankAccount = true;
        }

        $bankAccount->fill($data);
        $bankAccount->save();

        if ($newBankAccount) {
            $user->bankAccounts()->attach($bankAccount);
        }
        
        return $bankAccount;
    }

    /**
     * @param string $userName
     * @param string $bankAccountOwnerName
     * @throws ApiException
     */
    private function validateIfUserIsOwner(string $userName, string $bankAccountOwnerName): void
    {
        $bankAccountOwnerNameEqualsUserName = strtolower($userName) == strtolower($bankAccountOwnerName);

        if (!$bankAccountOwnerNameEqualsUserName) {
            throw new ApiException("Ops! Você deve ser o títular da conta. Verifique se o nome foi preenchido corretamente como " . $userName, 400);
        }
    }
}
