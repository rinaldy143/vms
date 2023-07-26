<?php

namespace App\Http\Controllers\WorkOrder;

use App\Http\Controllers\ApiController;
use App\Http\Requests\WorkOrder\StoreWorkOrderRequest;
use App\Http\Requests\WorkOrder\UpdateWorkOrderRequest;
use App\Services\WorkOrder\WorkOrderService;
use App\Models\Entity\RequestMaintenance;
use App\Models\Entity\Sparepart;
use App\Models\Entity\WorkOrder;
use App\Models\Entity\Trailer;
use App\Models\Entity\User;
use App\Models\Entity\Vehicle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class WorkOrderController extends ApiController
{
    protected WorkOrderService $service;

    /**
     * @param WorkOrderService $service
     * @param Request $request
     */
    public function __construct(WorkOrderService $service, Request $request)
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
        // $maintenance = RequestMaintenance::whereNotNull('analysist')->get();
        // $maintenance = RequestMaintenance::where(function ($query) {
        //     $query->orWhereNotNull('analysist')
        //     // ->orWhereNotNull('analysist')
        //         ->orWhereExists(function ($subquery) {
        //             $subquery->select(DB::raw(1))
        //                 ->from('work_orders')
        //                 ->whereRaw('work_orders.rm_id = request_maintenances.id');
        //                 // ->whereNull('analysist');
        //         });
        // })
        // ->paginate(15);
        $userRole = Auth::user()->role;

        $maintenance = RequestMaintenance::where(function ($query) use ($userRole) {
            if ($userRole === 'Mechanices') {
                $query->orWhereNull('analysist');
            } else {
                $query->orWhereNotNull('analysist');
            }
            $query->orWhereExists(function ($subquery) {
                $subquery->select(DB::raw(1))
                    ->from('work_orders')
                    ->whereRaw('work_orders.rm_id = request_maintenances.id');
            });
        })
        ->paginate(15);


        return view('pages.work-order.workorder', compact('maintenance', 'data'));

        // return $this->sendSuccess($data, null, 200);
    }

    public function history(Request $request)
    {
        $data = $this->service->dataTable($request);
        // $maintenance = RequestMaintenance::whereNotNull('analysist')->get();
        $maintenance = WorkOrder::whereNotNull('photo')->paginate(15);

        return view('pages.history.history', compact('maintenance', 'data'));

        // return $this->sendSuccess($data, null, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreWorkOrderRequest $request
     * @return JsonResponse
     */
    public function store(StoreWorkOrderRequest $request)
    {
        $data = $this->service->create($request);
        // dd($data);

        DB::table('request_maintenances')
        ->whereNull('wo_id')
        ->join('work_orders', 'request_maintenances.id', '=', 'work_orders.rm_id')
        ->update(['request_maintenances.wo_id' => DB::raw('work_orders.id')]);
        // return $this->sendSuccess($data, null, 201);
        $maintenance = RequestMaintenance::where(function ($query) {
            $query->orWhereNotNull('analysist')
            // ->orWhereNotNull('analysist')
                ->orWhereExists(function ($subquery) {
                    $subquery->select(DB::raw(1))
                        ->from('work_orders')
                        ->whereRaw('work_orders.rm_id = request_maintenances.id');
                        // ->whereNull('analysist');
                });
        })->paginate(15);
        return view('pages.work-order.workorder', compact('maintenance', 'data'));
    }

    /**
     * Display the specified resource.
     *
     * @param String $id
     * @return JsonResponse
     */
    public function detailhistory(string $id)
    {
        // $datum = $this->service->getById($id);
        // $datum = $this->service->getById($id);
        $vehicle = Vehicle::all();
        $user = User::all();
        $sparepart = Sparepart::all();
        $trailer = Trailer::all();
        $maintenance = RequestMaintenance::where('id', $id)->first();
        $workorder = WorkOrder::where('id', $id)->first();


        // $maintenances = RequestMaintenance::all();


        if ($maintenance == null) {
            abort(404);
        };

        return view('pages.history.detail-history', compact('user','sparepart','maintenance','vehicle', 'trailer','workorder'));
        // return $this->sendSuccess($datum, null, 200);
    }

    public function show(string $id)
    {
        // $datum = $this->service->getById($id);
        // $datum = $this->service->getById($id);
        $vehicle = Vehicle::all();
        $user = User::all();
        $sparepart = Sparepart::all();
        $trailer = Trailer::all();
        $maintenance = RequestMaintenance::where('id', $id)->first();
        $workorder = WorkOrder::where('id', $id)->first();


        // $maintenances = RequestMaintenance::all();


        if ($maintenance == null) {
            abort(404);
        };

        return view('pages.work-order.detail-workorder', compact('user','sparepart','maintenance','vehicle', 'trailer','workorder'));
        // return $this->sendSuccess($datum, null, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateWorkOrderRequest $request
     * @param String $id
     * @return JsonResponse
     */
    public function update(UpdateWorkOrderRequest $request, string $id)
    {
        $datum = $this->service->update($id, $request);
        // return $this->sendSuccess($datum, null, 200);

        $maintenance = RequestMaintenance::where(function ($query) {
            $query->whereNull('analysist')
            ->orWhereExists(function ($subquery) {
                $subquery->select(DB::raw(1))
                ->from('work_orders')
                ->whereRaw('work_orders.rm_id = request_maintenances.id');
                // ->whereNull('analysist');
            });
        })->paginate(15);
        // $selectedSparepartIds = $maintenance->workorder->spareparts->pluck('id')->toArray();
        return view('pages.work-order.workorder', compact('maintenance'));
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

    public function filterStatus(Request $request)
    {
        $maintenance = RequestMaintenance::select('request_maintenances.*')
        ->leftJoin('work_orders', 'request_maintenances.id', '=', 'work_orders.rm_id')
        ->orderByRaw("
            CASE
                WHEN work_orders.assign_by IS NULL THEN 1
                WHEN work_orders.analysist IS NOT NULL THEN 3
                ELSE 2
            END
        ")
        ->paginate(15);

    return view('pages.work-order.workorder', compact('maintenance'));

    }

    public function vehicleName(Request $request)
    {

        $userRole = Auth::user()->role;

        $maintenance = RequestMaintenance::where(function ($query) use ($userRole) {
            if ($userRole === 'Mechanices') {
                $query->orWhereNull('analysist');
            } else {
                $query->orWhereNotNull('analysist');
            }
            $query->orWhereExists(function ($subquery) {
                      $subquery->select(DB::raw(1))
                               ->from('work_orders')
                               ->whereRaw('work_orders.rm_id = request_maintenances.id');
                  });
        })
        ->join('vehicles', 'request_maintenances.vehicle_id', '=', 'vehicles.id')
        ->orderBy('vehicles.plat_number', 'asc')
        ->select('request_maintenances.*')
        ->paginate(15);

        return view('pages.work-order.workorder', compact('maintenance'));

    }

    public function priority(Request $request)
    {
        $userRole = Auth::user()->role;

        $maintenance = RequestMaintenance::where(function ($query) use ($userRole) {
            if ($userRole === 'Mechanices') {
                $query->orWhereNull('analysist');
            } else {
                $query->orWhereNotNull('analysist');
            }
            $query->orWhereExists(function ($subquery) {
                    $subquery->select(DB::raw(1))
                        ->from('work_orders')
                        ->whereRaw('work_orders.rm_id = request_maintenances.id');
                        // ->whereNull('analysist');
                });
        })
        ->orderBy('priority', 'asc')
        ->orderBy('vektor', 'desc')
        ->paginate(15);

        return view('pages.work-order.workorder', compact('maintenance'));

    }
}
