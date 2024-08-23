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
        // Mengambil jumlah baris yang sudah ada
        $rowCount = WeightProductTable::count();

        // Memeriksa apakah jumlah baris sudah mencapai batas maksimum (4)
        if ($rowCount >= 4) {
            // Jika sudah mencapai batas, tampilkan pesan error dan kembali ke halaman sebelumnya
            return redirect()->back()->with('error', 'Batas jumlah baris sudah tercapai.');
        }

        // Jika belum mencapai batas, lakukan penyimpanan data
        return WeightProductTable::create([
            'kriteria' => $data['kriteria'],
            'nilai_bobot' => $data['nilai_bobot'],
            'status' => $data['status'],
        ]);
    }


    public function update($id, $data)
    {
        $row = WeightProductTable::findOrFail($id);
        $row->update([
            'kriteria' => $data['kriteria'],
            'nilai_bobot' => $data['nilai_bobot'],
            'status' => $data['status'],        ]);
        return $row;

    }

    public function updatePrioritas()
    {
        $jumlahBobot = WeightProduct::sum('nilai_bobot');

        $data = WeightProduct::all();

        foreach ($data as $row) {
            $nilaiBobot = $row->nilai_bobot;
            $prioritas = $nilaiBobot / $jumlahBobot;

            $bobot = $prioritas;
            if ($row->status === 'cost') {
                $bobot *= -1;
            }

            $row->bobot = $bobot;
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
