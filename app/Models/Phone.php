<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Phone extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    const LANDLINE = 'LANDLINE';
    const CELLPHONE = 'CELLPHONE';

    const TYPES = [
        self::LANDLINE,
        self::CELLPHONE
    ];

    protected $fillable = [
        'user_id',
        'country_code',
        'area_code',
        'phone',
        'type'
    ];

    protected $auditInclude = [
        'user_id',
        'country_code',
        'area_code',
        'phone',
        'type'
    ];

    public static function parse(string $input): Phone
    {
        if (! preg_match('/^(?<area_code>\d{2})(?<phone>\d{8,9})$/', $input)) {
            if (! preg_match('/^(?<country_code>\d{2})(?<area_code>\d{2})(?<phone>\d{8,9})$/', $input)) {
                throw new \InvalidArgumentException('O valor não corresponde a telefone válido');
            }
		}

		if(preg_match('/^(?<country_code>\d{2})(?<area_code>\d{2})(?<phone>\d{8,9})$/', $input)){
			$input = substr($input, 2);
		}

        static $landlineLength = 10;

        $phone = new Phone();
		$phone->country_code = 55;
        $phone->area_code = substr($input, 0, 2);
        $phone->phone = substr($input, 2);
        $phone->type = strlen($input) === $landlineLength
            ? Phone::LANDLINE
            : Phone::CELLPHONE;

        return $phone;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
