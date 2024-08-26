<?php

namespace App\Services\WorkOrder;

use Illuminate\Support\Str;
use App\Services\AppService;
use Illuminate\Http\Request;
use App\Models\Entity\Sparepart;
use App\Models\Entity\WorkOrder;
use Illuminate\Support\Facades\DB;
use App\Models\Table\WorkOrderTable;
use Illuminate\Support\Facades\Auth;
use App\Services\AppServiceInterface;
use App\Models\Entity\RequestMaintenance;
use App\Models\Table\RequestMaintenanceTable;

class WorkOrderService extends AppService implements AppServiceInterface
{

    public function __construct(WorkOrderTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return WorkOrderTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        $workOrder = WorkOrderTable::with('users')->findOrFail($id);
        return $workOrder;
    }

    public function create($data)
    {
        $user = Auth::user(); // Mendapatkan user yang sedang login

        $workOrder = WorkOrderTable::create([
            'rm_id' => $data['rm_id'],
            'assign_by' => $user->name,
        ]);

        $workOrder->user()->attach($data['user_id'], [
            'id' => Str::uuid(), // Generate UUID for the 'id' column
        ]);
    }

    public function update($id, $data)
{
    $row = WorkOrderTable::findOrFail($id);
    // maintenance->WorkOrder->User
    $akun = Auth::user()->name;
    // dd($row->User->name);
    if (!$row->User->contains('name', $akun)) {
        // Simpan pesan dalam flash message
        session()->flash('error', 'Hanya maintainer yang diassign yang dapat memulai maintenance.');
        // Arahkan pengguna ke halaman yang dituju (misalnya, halaman beranda)
        return redirect()->route('workorder.index');
    }
    // if (Auth::user()->id !== $data->assign) {
    //     abort(403);
    // }
    // $workOrder = WorkOrderTable::all();

    // Update foto jika ada perubahan
    if ($data->hasFile('photo')) {
        if ($data->file('photo')->isValid()) {
            $imgName = $data->photo->getClientOriginalName();
            $data->photo->move(public_path('/img/workorder'), $imgName);
            $row->photo = $imgName;
        }
    } elseif (!$data->hasFile('photo') && !$row->photo) {
        unset($row->photo);
    }

    // Update data lainnya dari form pertama
    $row->fill([
        'jobsite_location' => $data['jobsite_location'],
        'damage_component' => $data['damage_component'],
        'damaged_level' => $data['damaged_level'],
        'analysist' => $data['analysist']
    ]);

    $row->save();

    // Tangkap data sparepart dan jumlah dari form
    $sparepartIds = $data['sparepart_id'];
    $jumlahs = $data['jumlah'];

    try {
        DB::beginTransaction();

        // Loop melalui data sparepart dan jumlah
        foreach ($sparepartIds as $index => $sparepartId) {
            $jumlah = $jumlahs[$index];

            // Cari sparepart berdasarkan ID
            $sparepart = Sparepart::findOrFail($sparepartId);

            // Periksa ketersediaan stok
            if ($sparepart->count < $jumlah) {
                throw new \Exception("Stok $sparepart->name tidak cukup.");
            }

            // Kurangi jumlah stok
            $sparepart->count -= $jumlah;
            $sparepart->save();

            // Tambahkan sparepart ke workorder
            $row->spareparts()->attach([
                $sparepartId => [
                    'jumlah' => $jumlah,
                    'id' => Str::uuid(), // Generate UUID for the 'id' column
                ]
            ]);

        }

        DB::commit();

        return $row;
    } catch (\Exception $e) {
        // DB::rollBack();
        // throw new \Exception("$e->getMessage()");

    }
}

    public function delete($id)
    {
        $row = WorkOrderTable::findOrFail($id);
        $row->delete();
        return $row;
    }


}
