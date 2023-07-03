<?php

namespace App\Http\Controllers\RequestMaintenance;

use App\Http\Controllers\ApiController;
use App\Http\Requests\RequestMaintenance\StoreRequestMaintenanceRequest;
use App\Http\Requests\RequestMaintenance\UpdateRequestMaintenanceRequest;
use App\Models\Entity\RequestMaintenance;
use App\Models\Entity\Trailer;
use App\Models\Entity\Vehicle;
use App\Services\RequestMaintenance\RequestMaintenanceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\PaginationHelper;



class RequestMaintenanceController extends ApiController
{
    protected RequestMaintenanceService $service;

    /**
     * @param RequestMaintenanceService $service
     * @param Request $request
     */
    public function __construct(RequestMaintenanceService $service, Request $request)
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
        // $data = $this->service->dataTable($request);
        $maintenance = RequestMaintenance::all();
        $vehicle = Vehicle::all();
        $trailer = Trailer::all();
        return view('pages.maintenance.maintenance', compact('maintenance', 'vehicle','trailer'));

        // return $this->sendSuccess($data, null, 200);
    }
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function list(Request $request)
    {
        // $data = $this->service->list($request);
        // $maintenance = RequestMaintenance::all();

        $maintenance = RequestMaintenance::whereNull('analysist')->get();
        // $vehicle = Vehicle::all();
        // $trailer = Trailer::all();
        return view('pages.maintenance.list-maintenance', compact('maintenance'));

        // return $this->sendSuccess($data, null, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequestMaintenanceRequest $request
     * @return JsonResponse
     */
    public function store(StoreRequestMaintenanceRequest $request)
    {
        // $user = Auth::user(); // Mendapatkan user yang sedang login

        // $reportdata = $request->validated(); // Validasi data request
        // $reportdata['report_by'] = $user->id;

            $data = $this->service->create($request);
            $maintenance = RequestMaintenance::whereNull('analysist')->get();

            // return $this->sendSuccess($data, null, 201);
        return view('pages.maintenance.list-maintenance', compact('maintenance'));
    }

    /**
     * Display the specified resource.
     *
     * @param String $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $datum = $this->service->getById($id);
        $vehicle = Vehicle::all();
        $trailer = Trailer::all();
        $maintenance = RequestMaintenance::where('id', $id)->first();
        // $maintenances = RequestMaintenance::all();


        if ($maintenance == null) {
            abort(404);
        };

        return view('pages.maintenance.detail-maintenance', compact('datum','maintenance','vehicle', 'trailer'));
        // return $this->sendSuccess($datum, null, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequestMaintenanceRequest $request
     * @param String $id
     * @return JsonResponse
     */
    public function update(UpdateRequestMaintenanceRequest $request, string $id)
    {
        $datum = $this->service->update($id, $request);
        // return $this->sendSuccess($datum, null, 200);

        $maintenance = RequestMaintenance::whereNull('analysist')->get();
        $vehicle = Vehicle::all();
        $trailer = Trailer::all();
        return view('pages.maintenance.list-maintenance', compact('maintenance', 'vehicle','trailer'));
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

    public function WP(Request $request)
    {
        $filter = $this->service->WP($request);
        $weight = PaginationHelper::paginate($filter, 12);
        $maintenance = RequestMaintenance::whereNull('analysist')->get();

        return view('pages.maintenance.list-maintenance', compact('maintenance','filter'));
    }
}
