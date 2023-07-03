<?php

namespace App\Services\WeightProduct;

use App\Models\Entity\WeightProduct;
use App\Models\Table\WeightProductTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;


class WeightProductService extends AppService implements AppServiceInterface
{

    public function __construct(WeightProductTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return WeightProductTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return WeightProductTable::findOrFail($id);

    }

    public function create($data)
    {
        return WeightProductTable::create([
            'kriteria' => $data['kriteria'],
            'nilai_bobot' => $data['nilai_bobot'],

        ]);
    }

    public function update($id, $data)
    {
        $row = WeightProductTable::findOrFail($id);
        $row->update([
            'kriteria' => $data['kriteria'],
        ]);
        return $row;

    }

    public function updatePrioritas()
    {
        $jumlahBobot = WeightProductTable::sum('nilai_bobot');

        $data = WeightProductTable::all();

        foreach ($data as $row) {
            $nilaiBobot = $row->nilai_bobot;
            $prioritas = $nilaiBobot / $jumlahBobot;

            $row->prioritas = $prioritas;
            $row->save();
        }

        return $data;
    }


    public function delete($id)
    {
        $row = WeightProductTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
