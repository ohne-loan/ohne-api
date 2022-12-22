<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Admin\DashboardRepository;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
;

class DashboardController extends Controller
{
	private $dashboardRepository;

	/**
	 * Create a new controller instance.
	 * @param DashboardRepository $dashboardRepository
	 */
    public function __construct(DashboardRepository $dashboardRepository)
    {
		$this->middleware('auth');
    	$this->dashboardRepository = new DashboardRepository();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$roles = $this->dashboardRepository->getUsersByRole();
		$label = [];
		$count = [];

		foreach ($roles as $role) {
			$label[] = $role->name;
			$count[] = $role->total;
		}
		$chart = new Chart();
		$chart->title('Quantidade de usuários por Perfil')
			->labels($label)->options(['legend' => [ 'display' => false]])
			->dataset('Sample', 'line',$count)
			->backgroundColor('#17a2b8')
			->options([
				'stepSize' => 1
			]);

		return view('admin.dashboard', ['chart' => $chart]);
    }

    public function usersCreatedCurrentMonth()
	{
		$users = $this->dashboardRepository->getUsersCreatedCurrentMonth();
		return response()->json($users);
	}
}
