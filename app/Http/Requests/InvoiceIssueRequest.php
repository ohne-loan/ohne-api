<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;
use App\Rules\Money;

class InvoiceIssueRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $dtMaxDate = new Carbon();
        $dtMinDate = new Carbon();
        $minDate = $dtMinDate->format('Y-m-d');
        $maxDate = $dtMaxDate->addDays(3)->format('Y-m-d');

        return [
            'paymentDate' => 'required|date|after_or_equal:' . $minDate . '|before_or_equal:' . $maxDate,
            'installments' => 'required|array'
        ];
    }

    public function attributes()
    {
        return [
            'paymentDate' => 'Data de pagamento do boleto',
            'installments' => 'Array de parcelas',
        ];
    }
}
