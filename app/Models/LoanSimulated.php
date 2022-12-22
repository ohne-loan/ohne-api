<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class LoanSimulated extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'loans_simulated';

    protected $fillable = [
        'user_id', 
        'base_data', //DATA_BASE
        'num_installments', //QTDE_PARCELAS
        'financed_value', //VALOR_FINANCIADO
        'installment_value', //VALOR_PARCELA
        'principal_value', //VALOR_PRINCIPAL
        'gross_value', //VALOR_BRUTO
        'net_value', //VALOR_LIQUIDO
        'iof_value', //VALOR_IOC
        'customer_rate', //TAXA_CLIENTE
        'approximate_rate', //TAXA_AP
        'cet_rate', //TAXA_CET
        'nominal_rate', //TAXA_NOMINAL
        'first_due_date', //DATA_1_VCTO
        'last_due_date', //DATA_ULT_VCTO
        'monthly_cet_rate', //TAXA_CET_MES
        'customer_rate_annual', //TAXA_CLIENTE_ANO
        'error_description',
        'error_code'
    ];

    protected $auditInclude = [
        'user_id', 
        'base_data', //DATA_BASE
        'num_installments', //QTDE_PARCELAS
        'financed_value', //VALOR_FINANCIADO
        'installment_value', //VALOR_PARCELA
        'principal_value', //VALOR_PRINCIPAL
        'gross_value', //VALOR_BRUTO
        'net_value', //VALOR_LIQUIDO
        'iof_value', //VALOR_IOC
        'customer_rate', //TAXA_CLIENTE
        'approximate_rate', //TAXA_AP
        'cet_rate', //TAXA_CET
        'nominal_rate', //TAXA_NOMINAL
        'first_due_date', //DATA_1_VCTO
        'last_due_date', //DATA_ULT_VCTO
        'monthly_cet_rate', //TAXA_CET_MES
        'customer_rate_annual', //TAXA_CLIENTE_ANO
        'error_description',
        'error_code'
    ];

	public function user(): BelongsTo
    {
    	return $this->belongsTo(User::class)->withTrashed();
    }
}
