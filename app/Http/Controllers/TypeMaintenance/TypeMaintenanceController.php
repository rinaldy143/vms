<?php

namespace App\Http\Controllers\TypeMaintenance;

use App\Http\Controllers\ApiController;
use App\Http\Requests\TypeMaintenance\StoreTypeMaintenanceRequest;
use App\Http\Requests\TypeMaintenance\UpdateTypeMaintenanceRequest;
use App\Services\TypeMaintenance\TypeMaintenanceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TypeMaintenanceController extends ApiController
{
    protected TypeMaintenanceService $service;

    /**
     * @param TypeMaintenanceService $service
     * @param Request $request
     */
    public function __construct(TypeMaintenanceService $service, Request $request)
    {
        $this->service = $service;
        parent::__construct($request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $data = $this->service->dataTable($request);
        return $this->sendSuccess($data, null, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTypeMaintenanceRequest $request
     * @return JsonResponse
     */
    public function store(StoreTypeMaintenanceRequest $request)
    {
        $data = $this->service->create($request);
        return $this->sendSuccess($data, null, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param String $id
     * @return JsonResponse
     */
    public function show(string $id)
    {
        $datum = $this->service->getById($id);
        return $this->sendSuccess($datum, null, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTypeMaintenanceRequest $request
     * @param String $id
     * @return JsonResponse
     */
    public function update(UpdateTypeMaintenanceRequest $request, string $id)
    {
        $datum = $this->service->update($id, $request);
        return $this->sendSuccess($datum, null, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param String $id
     * @return JsonResponse
     */
    public function destroy(string $id)
    {
        $datum = $this->service->delete($id);
        return $this->sendSuccess($datum, null, 200);
    }
}
