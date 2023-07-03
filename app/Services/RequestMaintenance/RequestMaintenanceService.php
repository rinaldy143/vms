<?php

namespace App\Services\RequestMaintenance;

use App\Models\Table\RequestMaintenanceTable;
use App\Models\Entity\RequestMaintenance;

use App\Services\AppService;
use App\Services\AppServiceInterface;
use Illuminate\Support\Facades\Auth;


class RequestMaintenanceService extends AppService implements AppServiceInterface
{

    public function __construct(RequestMaintenanceTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return RequestMaintenanceTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return RequestMaintenanceTable::findOrFail($id);
    }

    public function create($data)
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login

        // $reportdata = $request->validated(); // Validasi data request
        // $reportdata['report_by'] = $user->name;
        return RequestMaintenanceTable::create([
            'report_by' => $user->name,
            'report_problem' => $data['report_problem'],
            // 'maintenance_date' => $data['maintenance_date'],
            'vehicle_id' => $data['vehicle_id'],
            // 'trailer_id' => $data['trailer_id'],
            'km_Unit' => $data['km_Unit'],
            'hm_Unit' => $data['hm_Unit'],
            // 'breakdown_type' => $data['breakdown_type'],
            'unit_condition' => $data['unit_condition'],
            'priority' => $data['priority'],
            'activity_maintenance' => $data['activity_maintenance'],
            'analysist' => $data['analysist'],
            // 'aprove_by' => $user->name,
        ]);
    }

    public function update($id, $data)
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login

        $row = RequestMaintenanceTable::findOrFail($id);
        $row->update([
            'analysist' => $data['analysist'],
            // 'wo_id' => $data['wo_id'],
            'aprove_by' => $user->name,        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = RequestMaintenanceTable::findOrFail($id);
        $row->delete();
        return $row;
    }

    public function list(){
        $maintenance = RequestMaintenance::whereNull('aprove_by')
        ->get();

        // $spareparts = Sparepart::orderBy('name', 'DESC')->get();
        // Return the search view with the resluts compacted
        return $maintenance;
    }
    public function WP(){
        $filter = RequestMaintenance::query()
        ->where('role', '=', 'Operation')->get();
        // Return the search view with the resluts compacted
        return $filter;
    }
}
