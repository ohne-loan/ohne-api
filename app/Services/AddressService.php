<?php


namespace App\Services;


use App\Exceptions\ApiException;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use App\Models\User;
use GuzzleHttp\Client;

class AddressService
{
	public function store(User $user, array $data) : void
	{
        $address = Address::firstOrNew([
            'id' => $user->address_id
        ]);
        
		$address->fill($data);
		$address->saveOrFail();

		$user->address_id = $address->id;
		$user->saveOrFail();
    }
    
    public function updateProofId(User $user, int $proofId)
    {
        $address = Address::find($user->address_id);
        $address->address_proof_id = $proofId;
        $address->saveOrFail();
    }

    /**
     * @param $cep
     * @return AddressResource
     * @throws ApiException
     */
    public function getAddress($cep)
    {
        if (strlen(str_replace('-', '', str_replace(' ', '', $cep))) > 8){
            return response()->json([
                'data' => []
            ]);
        }

        $client = new Client();

        try {
            $url = config('webservice.cep.url-postmon') . '/' . $cep;
            $result = $client->get($url);
            $address = json_decode($result->getBody(), true);

        } catch (\Exception $e) {

            try {
                $url = config('webservice.cep.url-viacep') . '/' . $cep . '/json';
                $result = $client->get($url);

                $address = json_decode($result->getBody(), true);
                $address['estado'] = \tryGetValueArray($address,'uf');
                $address['cidade'] = \tryGetValueArray($address, 'localidade');
            } catch (\Exception $e){
                throw new ApiException("CEP não encontrado", 404);
            }
        }

        if (isset($address['erro'])) {
            throw new ApiException("CEP não encontrado", 404);
        }

        $resource = new Address();
        $resource->postal_code = \tryGetValueArray($address, 'cep');
        $resource->neighborhood = \tryGetValueArray($address, 'bairro');
        $resource->address = \tryGetValueArray($address, 'logradouro');
        $resource->city = \tryGetValueArray($address, 'cidade');
        $resource->state = \tryGetValueArray($address, 'estado');
        return new AddressResource($resource);
    }
}