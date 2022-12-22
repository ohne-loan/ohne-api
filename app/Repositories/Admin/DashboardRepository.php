<?php

namespace App\Repositories\Admin;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DashboardRepository
{

	/**
	 * Get users register created at current month.
	 *
	 * @return \App\Models\User
	 */
	public function getUsersCreatedCurrentMonth()
	{
		return User::select(DB::raw('MONTHNAME(created_at) as month'), DB::raw("DATE_FORMAT(created_at,'%Y-%m') as monthNum"), DB::raw('count(*) as total'))
			->groupBy('monthNum')
			->get();
	}

	public function getUsersByRole()
	{
		return Role::select('name', DB::raw('count(*) as total'))
			->join('model_has_roles as mhr', 'id', 'mhr.role_id')
			->groupBy('name')
			->get();
	}
}