<?php


namespace App\Libraries\D4sign;

use App\Models\Parameter;
use D4sign\Client as D4sign;
use http\Exception;

class Client
{
    /**
     * @var D4sign $cliente
     */
    private $client;

    /**
     * @var string $safe
     */
    private $safe;

    /**
     * Client constructor.
     * @throws \Exception
     */
    public function __construct()
    {
        $this->safe = Parameter::get('lib.d4sign.safe');
        $token = env('D4SIGN_TOKEN');

        $this->client = new D4sign();
        $this->client->setAccessToken($token);
    }

    public function getTemplates()
    {
        return $this->client->templates->find();
    }

    public function createFromTemplate(string $documentName, string $template, array $params)
    {
        return $this->client->documents->makedocumentbytemplate(
            $this->safe,
            $documentName,
            [$template => $params]
        );
    }

    public function addSignatories(string $uuid, array $signatories)
    {
        $payload = [];

        foreach ($signatories as $signatory) {
            $payload[] = [
                'email' => $signatory,
                'act' => '1', // assinatura
                'foreign' => '0', // tem cpf
                'certificadoicpbr' => '0', // assinatura padrão d4sign
                'assinatura_presencial' => '0' // não precisa de assinatura presencial
            ];
        }

        return $this->client->documents->createList($uuid, $payload);
    }

    public function sendToSigners(string $uuid)
    {
        return $this->client->documents->sendToSigner($uuid, "Contrato de Empréstimo OHNE", 1, 0);
    }

    //Seta URL de PostBack para atualizar contrato
    public function setWebHook(string $uuid)
    {
        try{

            $url = route('d4sign');
            $webhook = $this->client->documents->webhookadd($uuid, $url);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function find(string $uuid)
    {
        return $this->client->documents->find($uuid);
    }

    public function getDownloadLink(string $uuid)
    {
        return $this->client->documents->getfileurl($uuid, 'PDF');
    }
}