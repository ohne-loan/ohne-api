<?php


namespace App\Services;


use App\Contracts\FinancialProduct;
use App\Libraries\D4sign\Client;
use App\Models\Contract;
use Illuminate\Support\Facades\DB;


class ContractsService
{
    /**
     * @var Client $client
     */
    private $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function createContract(FinancialProduct $product, string $name, string $template, array $params)
    {
        try {
            DB::beginTransaction();

            $document = $this->client->createFromTemplate($name, $template, $params);

            $contract = new Contract();
            $contract->uuid = $document->uuid;
            $contract->status = Contract::STATUSES[0];
            $contract->save();

            $product->contract_id = $contract->id;
            $product->save();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return $contract;
    }

    public function addSignatories(Contract $contract, array $signatories)
    {
        return $this->client->addSignatories($contract->uuid, $signatories);
    }

    public function sendToSigners(Contract $contract)
    {
        return $this->client->sendToSigners($contract->uuid);
    }

    public function updateContractStatus(Contract $contract)
    {
        $document = current($this->client->find($contract->uuid));

        $contract->status = Contract::STATUSES[$document->statusId];
        $contract->save();
    }

    public  function setWebHook(Contract $contract){
        $this->client->setWebHook($contract->uuid);
    }
}