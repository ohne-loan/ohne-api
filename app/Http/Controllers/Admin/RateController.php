<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\SimpleRateResource;
use App\Models\Parameter;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
{

    public function index(){
        $parameterYear = Parameter::where('key', 'loan.default.rate.year')->first();
        $parameterMonth = Parameter::where('key', 'loan.default.rate.month')->first();

        $parameterYear->value *= 100;
        $parameterMonth->value *= 100;

        $resources = collect([$parameterMonth, $parameterYear]);
        return new SimpleRateResource($resources);
    }

    public function update(Request $request){
        $month = str_replace(',', '.', $request->input('monthly_rate') / 100);
        $yearly_rate = str_replace(',', '.', $request->input('yearly_rate') / 100);

        $old_month = Parameter::where('key', 'loan.default.rate.month')->first()->value * 100;
        $old_year = Parameter::where('key', 'loan.default.rate.year')->first()->value * 100;

        $new_month = $request->input('monthly_rate');
        $new_year = $request->input('yearly_rate');

        if($month != null){
            $parameterMonth = Parameter::where('key', 'loan.default.rate.month')->first();
            $parameterMonth->value = $month;
            $parameterMonth->save();
            $parameterYear = Parameter::where('key', 'loan.default.rate.year')->first();
            if($request->input('yearly_rate')){
                $parameterYear->value = $yearly_rate;
            }else{
                $parameterYear->value = rateMonthToYear($month);
            }
            $parameterYear->save();
        }

        activity('Atualização da taxa de juros mensal')
            ->causedBy(Auth::user())
            ->performedOn($parameterMonth)
            ->log(":causer.name atualizou a taxa de juros mensal de {$old_month}% para {$new_month}%");

        activity('Atualização da taxa de juros anual')
            ->performedOn($parameterYear)
            ->causedBy(Auth::user())
            ->log(":causer.name atualizou a taxa de juros anual de {$old_year}% para {$new_year}%");

        $resource = collect([$parameterYear, $parameterMonth]);
        return new SimpleRateResource($resource);
    }
}
