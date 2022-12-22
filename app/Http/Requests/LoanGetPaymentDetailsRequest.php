<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;

class LoanGetPaymentDetailsRequest extends FormRequest
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
            'dischargeDate' => 'required|date|after_or_equal:' . $minDate . '|before_or_equal:' . $maxDate,
        ];
    }

    public function attributes()
    {
        return [
            'dischargeDate' => 'Data de pagamento do boleto',
        ];
    }
}
