<?php

namespace App\Services\Sparepart;

use App\Models\Entity\Sparepart;
use App\Models\Table\SparepartTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;
use Illuminate\Support\Facades\Storage;

class SparepartService extends AppService implements AppServiceInterface
{

    public function __construct(SparepartTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return SparepartTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return SparepartTable::findOrFail($id);
    }

    public function create($data)
    {

        $imgName = null;

        if ($data->photo) {
            $imgName = $data->photo->getClientOriginalName() . '-' . time() . '.' . $data->photo->extension();
            $data->photo->move(public_path('/img/users'), $imgName);
        }
        return SparepartTable::create([
            'id_sparepart' => $data['id_sparepart'],
            'brand' => $data['brand'],
            'name' => $data['name'],
            'count' => $data['count'],
            'photo' => $imgName,
        ]);
    }

    public function update($id, $data)
    {
        $row = SparepartTable::findOrFail($id);
        if (!blank($row->photo)) {
            Storage::delete($row->photo);
        }
        $data['photo'] = $data['photo']?->store('spareparts');

        $row->update([
            'id_sparepart' => $data['id_sparepart'],
            'brand' => $data['brand'],
            'name' => $data['name'],
            'count' => $data['count'],
            'photo' => $data['photo'],
        ]);
        return $row;
    }

    public function search($data){
        // Get the search value from the request
        $search = $data->input('search');

        // Search in the title and body columns from the posts table
        $spareparts = Sparepart::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('brand', 'LIKE', "%{$search}%")
            ->orWhere('id_sparepart', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return $spareparts;
    }

    public function ascending(){
        $spareparts = Sparepart::orderBy('name', 'DESC')->get();
        // Return the search view with the resluts compacted
        return $spareparts;
    }
    public function descending(){
        $spareparts = Sparepart::orderBy('name', 'ASC')->get();
        // Return the search view with the resluts compacted
        return $spareparts;
    }
    public function highStock(){
        $spareparts = Sparepart::orderBy('count', 'DESC')->get();
        // Return the search view with the resluts compacted
        return $spareparts;
    }
    public function lowStock(){
        $spareparts = Sparepart::orderBy('count', 'ASC')->get();
        // Return the search view with the resluts compacted
        return $spareparts;
    }

    public function delete($id)
    {
        $row = SparepartTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
