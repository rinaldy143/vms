<?php

namespace App\Http\Controllers;

use App\Models\Entity\RequestMaintenance;
use App\Models\Entity\Sparepart;
use Illuminate\Http\Request;
use App\Models\Entity\User;
use App\Models\Entity\Vehicle;
use Illuminate\Support\Facades\DB;


class ChartController extends Controller
{
    public function index()
    {
        // $users = User::select(DB::raw("COUNT(*) as count"), 'role')
        // ->groupBy('role')
        // ->orderBy('role', 'ASC')
        // ->pluck('count', 'role');

        $users = User::select(DB::raw("COUNT(*) as count"), 'role')
        ->where('role', '<>', 'admin')
        ->groupBy('role')
        ->orderBy('role', 'ASC')
        ->pluck('count', 'role');

        $totaluser = User::where('role', '<>', 'admin')->count();
        $totalsparepart = Sparepart::count();
        $totalvehicle = Vehicle::count();
        $sparepart = Sparepart::where('count', '<', 50)->get();
        $rm = RequestMaintenance::where('aprove_by', null)->get();

        $vehicleCounts = RequestMaintenance::join('work_orders', 'request_maintenances.wo_id', '=', 'work_orders.id')
        ->select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(work_orders.updated_at) as month_name"))
        ->whereNotNull('work_orders.photo')
        ->whereYear('request_maintenances.created_at', date('Y'))
        ->groupBy(DB::raw("month_name"))
        ->orderBy('request_maintenances.created_at', 'asc')
        ->pluck('count', 'month_name');

        $labelsJSON = $vehicleCounts->keys();
        $dataJSON = $vehicleCounts->values();
        // dd($dataJSON);
        return view('pages.dashboard', compact('users','totaluser','sparepart','totalsparepart','totalvehicle','rm','labelsJSON','dataJSON'));
    }
}
