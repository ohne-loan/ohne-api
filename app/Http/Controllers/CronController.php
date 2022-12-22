<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

class CronController extends Controller
{
    public function index()
    {
        Artisan::call('send:email');
        return response()->json(['message' => 'ok']);
    }

    public function healthCheck()
    {
        return response()->json(['status' => 'I am alive']);
    }

    public function queueWork(Request $request)
    {
        $args = $request->all();

        $timeout = $args['--timeout'];
        $tries = 1;

        Artisan::call('queue:work', ['--tries' => $tries, '--timeout' => $timeout]);
        return response()->json(['message' => 'ok']);
    }
}
