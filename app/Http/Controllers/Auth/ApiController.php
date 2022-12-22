<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\ApiAuthRequest;
use App\Http\Controllers\Controller;
use App\Models\ApiClient;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApiController extends Controller
{
    use SoftDeletes;

    public function auth(ApiAuthRequest $request)
    {
        /** @var ApiClient $client */
        $client = ApiClient::query()
            ->where('secret', $request['secret'])
            ->first();

        $token = $client->createToken($client->id, ['public']);

        return response()->json([
            'token_type' => 'Bearer',
            'access_token' => $token->accessToken
        ]);
    }
}
