<?php

namespace App\Models;

use App\Libraries\D4sign\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Contract extends Model implements Auditable
{
	use SoftDeletes, \OwenIt\Auditing\Auditable;
	
	const PENDING = 'PENDING';
	const PROCESSING = 'PROCESSING';
	const WAITING_SIGNATORIES = 'WAITING_SIGNATORIES';
	const WAITING_SIGNATURES = 'WAITING_SIGNATURES';
	const SIGNED = 'SIGNED';
	const ARCHIVED = 'ARCHIVED';
	const CANCELED = 'CANCELED';

    const STATUSES = [
    	'0' => 'PENDING',
    	'1' => 'PROCESSING',
		'2' => 'WAITING_SIGNATORIES',
		'3' => 'WAITING_SIGNATURES',
		'4' => 'SIGNED',
		'5' => 'ARCHIVED',
		'6' => 'CANCELED'
	];

    const DOCUMENT_NAME_LOAN = "Contrato de Emprestimo OHNE";

	protected $fillable = [
		'uuid',
		'status'
	];

	protected $auditInclude = [
		'uuid',
		'status'
	];

    public function loan()
    {
        return $this->hasOne(Loan::class);
    }

	public function getLinkAttribute($value)
    {
        $client = new Client();
        return $client->getDownloadLink($this->uuid);
    }
}
