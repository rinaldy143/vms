<?php

namespace App\Services\Vehicle;

use App\Models\Entity\Vehicle;
use App\Models\Table\VehicleTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class VehicleService extends AppService implements AppServiceInterface
{

    public function __construct(VehicleTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return VehicleTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return VehicleTable::findOrFail($id);
    }

    // public function index()
    // {
    //     return view("pages.vehicle.vehicle1");
    // }


    public function create($data)
    {
        $selectedModel = $data['model_vehicle_id'];
        $selectedType = $data['type_vehicle_id'];
        $selectedValue1 = $this->getValueForSelectedType($selectedType); // Fungsi untuk mendapatkan nilai berdasarkan tipe yang dipilih
        $selectedValue2 = $this->getValueForSelectedModel($selectedModel); // Fungsi untuk mendapatkan nilai berdasarkan tipe yang dipilih

        return VehicleTable::create([
            'plat_number' => $data['plat_number'],
            'model_vehicle_id' => $selectedModel,
            'type_vehicle_id' => $selectedType,
            'selected_value1' => $selectedValue1,
            'selected_value2' => $selectedValue2,
        ]);
    }

    private function getValueForSelectedType($selectedType)
    {
        // Logika untuk menentukan nilai berdasarkan tipe yang dipilih
        // Misalnya menggunakan conditional statement, switch case, atau query ke database
        $selectedValue1 = 0;

        if ($selectedType === '00000001-0000-0000-0000-000000000001') {
            $selectedValue1 = 8;
        } elseif ($selectedType === '00000001-0000-0000-0000-000000000002') {
            $selectedValue1 = 5;
        } elseif ($selectedType === '00000001-0000-0000-0000-000000000003') {
            $selectedValue1 = 6;
        } elseif ($selectedType === '00000001-0000-0000-0000-000000000004') {
            $selectedValue1 = 9;
        } elseif ($selectedType === '00000001-0000-0000-0000-000000000005') {
            $selectedValue1 = 7;
        }

        return $selectedValue1;
    }
    private function getValueForSelectedModel($selectedModel)
    {
        // Logika untuk menentukan nilai berdasarkan tipe yang dipilih
        // Misalnya menggunakan conditional statement, switch case, atau query ke database
        $selectedValue2 = 0;

        if ($selectedModel === '00000001-0000-0000-0000-000000000001') {
            $selectedValue2 = 7;
        } elseif ($selectedModel === '00000001-0000-0000-0000-000000000002') {
            $selectedValue2 = 8;
        } elseif ($selectedModel === '00000001-0000-0000-0000-000000000003') {
            $selectedValue2 = 7;
        } elseif ($selectedModel === '00000001-0000-0000-0000-000000000004') {
            $selectedValue2 = 7;
        } elseif ($selectedModel === '00000001-0000-0000-0000-000000000005') {
            $selectedValue2 = 6;
        }elseif ($selectedModel === '00000001-0000-0000-0000-000000000006') {
            $selectedValue2 = 7;
        }elseif ($selectedModel === '00000001-0000-0000-0000-000000000007') {
            $selectedValue2 = 6;
        }elseif ($selectedModel === '00000001-0000-0000-0000-000000000008') {
            $selectedValue2 = 6;
        }elseif ($selectedModel === '00000001-0000-0000-0000-000000000009') {
            $selectedValue2 = 6;
        }elseif ($selectedModel === '00000001-0000-0000-0000-000000000010') {
            $selectedValue2 = 5;
        }elseif ($selectedModel === '00000001-0000-0000-0000-000000000011') {
            $selectedValue2 = 5;
        }elseif ($selectedModel === '00000001-0000-0000-0000-000000000012') {
            $selectedValue2 = 9;
        }elseif ($selectedModel === '00000001-0000-0000-0000-000000000013') {
            $selectedValue2 = 9;
        }elseif ($selectedModel === '00000001-0000-0000-0000-000000000014') {
            $selectedValue2 = 8;
        } elseif ($selectedModel === '00000001-0000-0000-0000-000000000015') {
            $selectedValue2 = 8;
        }

        return $selectedValue2;
    }

    public function update($id, $data)
    {
        $row = VehicleTable::findOrFail($id);
        $row->update([
            'plat_number' => $data['plat_number'],
            'model_vehicle_id' => $data['model_vehicle_id'],
            'type_vehicle_id' => $data['type_vehicle_id'],
        ]);
        return $row;
    }

    public function search($data){
        // Get the search value from the request
        $search = $data->input('search');

        // Search in the title and body columns from the posts table
        $vehicles = Vehicle::query()
            ->where('plat_number', 'LIKE', "%{$search}%")
            ->orWhereHas('ModelVehicle', function ($query) use ($search) {
                $query->where('vehicle_model', 'LIKE', "%{$search}%");
            })
            ->orWhereHas('TypeVehicle', function ($query) use ($search) {
                $query->where('vehicle_type', 'LIKE', "%{$search}%");
            })
            ->get();

        // Return the search view with the resluts compacted
        return $vehicles;
    }

    public function delete($id)
    {
        $row = VehicleTable::findOrFail($id);
        $row->forceDelete();
        return $row;
    }
}
