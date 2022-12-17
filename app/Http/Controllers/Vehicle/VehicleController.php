<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Vehicle\StoreVehicleRequest;
use App\Http\Requests\Vehicle\UpdateVehicleRequest;
use App\Models\Entity\ModelVehicle;
use App\Models\Entity\TypeVehicle;
use App\Models\Entity\Vehicle;
use App\Services\Vehicle\VehicleService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VehicleController extends ApiController
{
    protected VehicleService $service;

    /**
     * @param VehicleService $service
     * @param Request $request
     */
    public function __construct(VehicleService $service, Request $request)
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
        $vehicles = Vehicle::all();
        $vehiclesT = TypeVehicle::all();
        $model_vehicle = ModelVehicle::all();


        return view('pages.vehicle.vehicle1', compact('vehicles', 'vehiclesT', 'model_vehicle'));
        // return $this->sendSuccess($data, null, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreVehicleRequest $request
     * @return JsonResponse
     */
    public function store(StoreVehicleRequest $request)
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
     * @param UpdateVehicleRequest $request
     * @param String $id
     * @return JsonResponse
     */
    public function update(UpdateVehicleRequest $request, string $id)
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
