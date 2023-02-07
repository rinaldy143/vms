<?php

namespace App\Services\TypeJob;

use App\Models\Table\JobTypeTable;
use App\Services\AppService;
use App\Services\AppServiceInterface;

class TypeJobService extends AppService implements AppServiceInterface
{

    public function __construct(JobTypeTable $model)
    {
        parent::__construct($model);
    }


    public function dataTable($filter)
    {
        return JobTypeTable::datatable($filter)->paginate($filter->entries ?? 15);
    }

    public function getById($id)
    {
        return JobTypeTable::findOrFail($id);
    }

    public function create($data)
    {
        return JobTypeTable::create([
            'job_type' => $data['job_type'],
        ]);
    }

    public function update($id, $data)
    {
        $row = JobTypeTable::findOrFail($id);
        $row->update([
            'job_type' => $data['job_type'],
        ]);
        return $row;
    }

    public function delete($id)
    {
        $row = JobTypeTable::findOrFail($id);
        $row->delete();
        return $row;
    }
}
