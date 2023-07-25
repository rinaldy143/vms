<?php

namespace App\Services\RequestMaintenance;

use App\Models\Table\RequestMaintenanceTable;
use App\Models\Entity\RequestMaintenance;
use App\Models\Entity\WeightProduct;

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
        $user = Auth::user();
        // $dampak = $data['dampak'];
        // $activity_maintenance = $data['activity_maintenance'];
        // $C1 = $this->getValueForSelectedDampak($dampak);
        // $C4 = $this->getValueForSelectedActivity($activity_maintenance);
        // $weightProduct = WeightProduct::get();
        // $preferensi = 1;
        // $vektor = 1;

        $newRequestMaintenance = new RequestMaintenanceTable([
            'report_by' => $user->name,
            'report_problem' => $data['report_problem'],
            'vehicle_id' => $data['vehicle_id'],
            'km_Unit' => $data['km_Unit'],
            'hm_Unit' => $data['hm_Unit'],
            // 'dampak' => $dampak,
            'unit_condition' => $data['unit_condition'],
            // 'priority' => $data['priority'],
            // 'activity_maintenance' => $activity_maintenance,
            'analysist' => $data['analysist'],
            // 'C1' => $C1,
            // 'C4' => $C4,
            // 'vektor' => $data['vektor'],
        ]);

        $newRequestMaintenance->save();

        $newRequestMaintenance->C2 = $newRequestMaintenance->id ? $newRequestMaintenance->vehicle->selected_value1 : null;
        $newRequestMaintenance->C3 = $newRequestMaintenance->id ? $newRequestMaintenance->vehicle->selected_value2 : null;
        $newRequestMaintenance->save();

        // // Perhitungan preferensi
        // $preferensi *= pow($C1, $weightProduct->where('kriteria', 'Dampak')->pluck('bobot')->first());
        // $preferensi *= pow($newRequestMaintenance->C2, $weightProduct->where('kriteria', 'Model')->pluck('bobot')->first());
        // $preferensi *= pow($newRequestMaintenance->C3, $weightProduct->where('kriteria', 'tipe')->pluck('bobot')->first());
        // $preferensi *= pow($C4, $weightProduct->where('kriteria', 'Aktivitas')->pluck('bobot')->first());

        // // Setelah perhitungan preferensi selesai, update nilai preferensi
        // $newRequestMaintenance->preferensi = $preferensi;
        // $newRequestMaintenance->save();

        // // Perhitungan vektor berdasarkan preferensi sebelum submit
        // $preferensiData = RequestMaintenanceTable::pluck('preferensi')->toArray();


        // if (count($preferensiData) > 0) {
        //     // Menghitung total preferensi
        //     $totalPreferensi = array_sum($preferensiData);

        //     // Mengupdate vektor pada setiap data
        //     $requestMaintenanceData = RequestMaintenanceTable::all();
        //     foreach ($requestMaintenanceData as $requestMaintenance) {
        //         $requestMaintenance->vektor = $requestMaintenance->preferensi / $totalPreferensi;
        //         $requestMaintenance->save();
        //     }
        // }
        return $newRequestMaintenance;
    }

    private function getValueForSelectedDampak($dampak)
    {
        // Logika untuk menentukan nilai berdasarkan tipe yang dipilih
        // Misalnya menggunakan conditional statement, switch case, atau query ke database
        $C1 = 0;

        if ($dampak === 'Kecil') {
            $C1 = 3;
        } elseif ($dampak === 'Sedang') {
            $C1 = 6;
        } elseif ($dampak === 'Besar') {
            $C1 = 9;
        }

        return $C1;
    }

    private function getValueForSelectedActivity($activity_maintenance)
    {
        // Logika untuk menentukan nilai berdasarkan tipe yang dipilih
        // Misalnya menggunakan conditional statement, switch case, atau query ke database
        $C4 = 0;

        if ($activity_maintenance === 'Tune Up') {
            $C4 = 1;
        } elseif ($activity_maintenance === 'Service Kecil') {
            $C4 = 3;
        } elseif ($activity_maintenance === 'Service Menengah') {
            $C4 = 5;
        } elseif ($activity_maintenance === 'Service Besar') {
            $C4 = 7;
        } elseif ($activity_maintenance === 'Service Keseluruhan') {
            $C4 = 9;
        }

        return $C4;
    }

    public function update($id, $data)
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login
        $dampak = $data['dampak'];
        $activity_maintenance = $data['activity_maintenance'];
        $C1 = $this->getValueForSelectedDampak($dampak);
        $C4 = $this->getValueForSelectedActivity($activity_maintenance);
        $weightProduct = WeightProduct::get();
        $preferensi = 1;
        $row = RequestMaintenanceTable::findOrFail($id);

        $row->update([
            'analysist' => $data['analysist'],
            // 'wo_id' => $data['wo_id'],
            'dampak' => $dampak,
            'priority' => $data['priority'],
            'activity_maintenance' => $activity_maintenance,
            'analysist' => $data['analysist'],
            'C1' => $C1,
            'C4' => $C4,
            'vektor' => $data['vektor'],
            'aprove_by' => $user->name,
        ]);
                // Perhitungan preferensi
                $preferensi *= pow($C1, $weightProduct->where('kriteria', 'Dampak')->pluck('bobot')->first());
                $preferensi *= pow($row->C2, $weightProduct->where('kriteria', 'Model')->pluck('bobot')->first());
                $preferensi *= pow($row->C3, $weightProduct->where('kriteria', 'tipe')->pluck('bobot')->first());
                $preferensi *= pow($C4, $weightProduct->where('kriteria', 'Aktivitas')->pluck('bobot')->first());

                // Setelah perhitungan preferensi selesai, update nilai preferensi
                $row->preferensi = $preferensi;
                $row->save();

                // Perhitungan vektor berdasarkan preferensi sebelum submit
                $preferensiData = RequestMaintenanceTable::pluck('preferensi')->toArray();


                if (count($preferensiData) > 0) {
                    // Menghitung total preferensi
                    $totalPreferensi = array_sum($preferensiData);

                    // Mengupdate vektor pada setiap data
                    $requestMaintenanceData = RequestMaintenanceTable::all();
                    foreach ($requestMaintenanceData as $requestMaintenance) {
                        $requestMaintenance->vektor = $requestMaintenance->preferensi / $totalPreferensi;
                        $requestMaintenance->save();
                    }
                }
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
