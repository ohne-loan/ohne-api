<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class ApiClient extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable, HasApiTokens;

    public function getAuthPassword()
    {
        return $this->secret;
    }
}
