<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Http\Resources\PermissionResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
	private $perPage = 7;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application permissions list.
	 *
	 * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
	public function index()
	{
        $user = Auth::user();
        $query = Permission::select(['permissions.*'])->join('role_has_permissions as rhp', 'rhp.permission_id', 'permissions.id')
            ->join('roles as r', 'rhp.role_id', 'r.id')
            ->join('model_has_roles as mhr', 'mhr.role_id', 'r.id')
            ->join('users as u', 'mhr.model_id', 'u.id')
            ->where('u.id', $user->id)->distinct('permissions.*');

        $resources = $query->paginate(empty($perPage) ? Permission::count() : $perPage);
		return PermissionResource::collection($resources);
	}

}
