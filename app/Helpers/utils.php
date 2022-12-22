<?php

use App\Exceptions\ApiException;
use Bugsnag\BugsnagLaravel\Facades\Bugsnag;
use Carbon\Carbon;
use Google\Cloud\Storage\StorageClient;
use App\Services\LogService;

function money($amount, $flagReplace = false) : float
{
    if ($flagReplace) {
        $amount = str_replace(".", "", $amount);
        $amount = str_replace(",", ".", $amount);
        $amount = (float)$amount;
    }
    return adjustDecimalPlaces($amount);
}

function adjustDecimalPlaces($value, $precision = 3) : float
{
    if ($value == null) {
        return 0;
    }

    return round($value, $precision);
}

function handle(\Exception $exception, string $message, int $statusCode, bool $throwToBugsnag = false)
{
    if($throwToBugsnag){
        Bugsnag::notifyException($exception);
    }

    $logService = new LogService();
    $logService->insertLogException($exception);
    
    if ($exception instanceof ApiException) {
        throw $exception;
    } else {
        $customMessage = 'Ops! algo deu errado. Tente novamente mais tarde.';

        throw new ApiException($customMessage, $statusCode);
    }
}

function formatMoney(float $amount)
{
    return number_format($amount, 2, ',', '.');
}

// https://www.dirceuresende.com/blog/escrevendo-numero-por-extenso-no-php/
function valorPorExtenso(float $valor, bool $exibirMoeda = false, bool $palavraFeminina = false)
{
    $singular = null;
    $plural = null;

    if ($exibirMoeda) {
        $singular = array('centavo', 'real', 'mil', 'milhão', 'bilhão', 'trilhão', 'quatrilhão');
        $plural = array('centavos', 'reais', 'mil', 'milhões', 'bilhões', 'trilhões', 'quatrilhões');
    } else {
        $singular = array('', '', 'mil', 'milhão', 'bilhão', 'trilhão', 'quatrilhão');
        $plural = array('', '', 'mil', 'milhões', 'bilhões', 'trilhões', 'quatrilhões');
    }

    $c = array('', 'cem', 'duzentos', 'trezentos', 'quatrocentos', 'quinhentos', 'seiscentos', 'setecentos', 'oitocentos', 'novecentos');
    $d = array('', 'dez', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa');
    $d10 = array('dez', 'onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezesseis', 'dezesete', 'dezoito', 'dezenove');
    $u = array('', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove');

    if ($palavraFeminina) {
        if ($valor == 1) {
            $u = array('', 'uma', 'duas', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove');
        } else {
            $u = array('', 'um', 'duas', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove');
        }

        $c = array('', 'cem', 'duzentas', 'trezentas', 'quatrocentas', 'quinhentas', 'seiscentas', 'setecentas', 'oitocentas', 'novecentas');
    }

    $z = 0;

    $valor = number_format($valor, 2, '.', '.');
    $inteiro = explode('.', $valor);

    for ($i = 0; $i < count($inteiro); $i++) {
        for ($ii = mb_strlen($inteiro[$i]); $ii < 3; $ii++) {
            $inteiro[$i] = '0' . $inteiro[$i];
        }
    }

    // $fim identifica onde que deve se dar junção de centenas por 'e' ou por ',' ;)
    $rt = null;
    $fim = count($inteiro) - ($inteiro[count($inteiro) - 1] > 0 ? 1 : 2);

    for ($i = 0; $i < count($inteiro); $i++) {
        $valor = $inteiro[$i];
        $rc = (($valor > 100) && ($valor < 200)) ? 'cento' : $c[$valor[0]];
        $rd = ($valor[1] < 2) ? '' : $d[$valor[1]];
        $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : '';

        $r = $rc . (($rc && ($rd || $ru)) ? ' e ' : '') . $rd . (($rd && $ru) ? ' e ' : '') . $ru;
        $t = count($inteiro) - 1 - $i;
        $r .= $r ? ' ' . ($valor > 1 ? $plural[$t] : $singular[$t]) : '';
        if ($valor == '000') {
            $z++;
        } elseif ($z > 0) {
            $z--;
        }

        if (($t == 1) && ($z > 0) && ($inteiro[0] > 0)) {
            $r .= (($z > 1) ? ' de ' : '') . $plural[$t];
        }

        if ($r) {
            $rt = $rt . ((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? (($i < $fim) ? ', ' : ' e ') : ' ') . $r;
        }
    }

    $rt = mb_substr($rt, 1);

    return ($rt ? trim($rt) : 'zero');
}

function rateMonthToYear(float $rateMonth) : float
{
    return pow(pow(($rateMonth + 1), (1/30)), 365) - 1;
}

function multiplyByOneHundred(float $value) : float
{
    return $value * 100;
}

function divideByOneHundred(float $value) : float
{
    return $value / 100;
}

function dataPorExtenso() : string
{
    $date = Carbon::now();

    $month = getMonthName($date->month);
    
    return date('d') . " de " . $month . " de " . date('Y');
}

function formatarDataPorExtenso(Carbon $date) : string
{
    $month = getMonthName($date->month);
    
    return $date->day . " de " . $month . " de " . $date->year;
}

function getFirstName(string $name) : string
{
    if (empty($name)) {
        return $name;
    }
    
    $names = explode(" ", $name);

    return $names[0];
}

function addressInline($address) : string
{
    return $address->address . ' ' . $address->number . ', ' . $address->neighborhood . ', ' . $address->city . ', ' . $address->state;
}

function emailToken() : int
{
    return mt_rand(1000, 9999);
}

function phoneInline($phone) : string
{
    return $phone->country_code . $phone->area_code . $phone->phone;
}

function gcs_sign_url($path)
{
    $storageClient = new StorageClient([
        'projectId' => config('filesystems.disks.gcs.project_id'),
        'keyFilePath' => config('filesystems.disks.gcs.key_file')
    ]);

    $bucket = $storageClient->bucket(config('filesystems.disks.gcs.bucket'));
    $object = $bucket->object($path);
    return $object->signedUrl(now()->addHours(3));
}

function accumulatedRate($rate, $numInstallments) : float
{
    return adjustDecimalPlaces((((1 + ($rate/100)) ** $numInstallments) - 1) * 100);
}

function changeFloatToTwoDecimalPlaces($float) : float
{
    return (float)substr($float, 0, ((strpos($float, '.') + 1) + 2));
}

function getMonthName(int $monthNumber) : string
{
    switch ($monthNumber) {
        case 1:
            return 'Janeiro';
            break;
        case 2:
            return 'Fevereiro';
            break;
        case 3:
            return 'Março';
            break;
        case 4:
            return 'Abril';
            break;
        case 5:
            return 'Maio';
            break;
        case 6:
            return 'Junho';
            break;
        case 7:
            return 'Julho';
            break;
        case 8:
            return 'Agosto';
            break;
        case 9:
            return 'Setembro';
            break;
        case 10:
            return 'Outubro';
            break;
        case 11:
            return 'Novembro';
            break;
        case 12:
            return 'Dezembro';
            break;
    }
}

function tryGetValueArray(array $array, $key)
{
    return isset($array[$key]) ? $array[$key] : null;
}

function createFileByBase64($base64, $pathFile)
{
    $file = fopen($pathFile, "wb");

    $data = explode(',', $base64);

    fwrite($file, base64_decode($data[1]));
    fclose($file);
}

function convertArrayToCollection($array)
{
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $value = r_collect($value);
            $array[$key] = $value;
        }
    }

    return collect($array);
}
