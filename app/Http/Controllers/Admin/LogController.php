<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\LogResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Input;

class LogController extends Controller
{
    /**
     * LogController constructor.
     */
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $perPage = Input::get('limit', 20);
	    $resources = Activity::orderBy('created_at', 'desc')->paginate($perPage);
		return LogResource::collection($resources);
    }
}
