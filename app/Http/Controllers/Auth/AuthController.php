<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\User\UpdateFcmUserRequest;
use App\Services\Auth\AuthService;
use Exception;
use Session;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\RequestGuard;
use Illuminate\Support\Facades\DB;
use App\Models\Entity\User;
use App\Models\Entity\RequestMaintenance;
use App\Models\Entity\Sparepart;
use App\Models\Entity\Vehicle;

class AuthController extends ApiController
{
    protected AuthService $service;

    /**
     * @param AuthService $service
     * @param Request $request
     */
    public function __construct(AuthService $service, Request $request)
    {
        $this->service = $service;
        parent::__construct($request);
    }

    public function index()
    {
        return view('pages.auth.login');
    }

    /**
     * Login user with username and password.
     *
     * @param LoginRequest $request
     * @return object
     */
    public function login(LoginRequest $request)
    {
        try {
            $user = $this->service->login($request);
            $users = User::select(DB::raw("COUNT(*) as count"), 'role')
            ->where('role', '<>', 'admin')
            ->groupBy('role')
            ->orderBy('role', 'ASC')
            ->pluck('count', 'role');
            $totaluser = User::where('role', '<>', 'admin')->count();
            $totalsparepart = Sparepart::count();
            $totalvehicle = Vehicle::count();
            $sparepart = Sparepart::where('count', '<', 50)->get();
            $rm = RequestMaintenance::where('aprove_by', null)->get();

            $vehicleCounts = RequestMaintenance::join('work_orders', 'request_maintenances.wo_id', '=', 'work_orders.id')
            ->select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(work_orders.updated_at) as month_name"))
            ->whereNotNull('work_orders.photo')
            ->whereYear('request_maintenances.created_at', date('Y'))
            ->groupBy(DB::raw("month_name"))
            ->orderBy('request_maintenances.id', 'asc')
            ->pluck('count', 'month_name');

            $labelsJSON = $vehicleCounts->keys();
            $dataJSON = $vehicleCounts->values();
            return view('pages.dashboard', compact('users','totaluser','sparepart','totalsparepart','totalvehicle','rm','labelsJSON','dataJSON'));
            // return $this->sendSuccess($user, null, 200);
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            return view('pages.auth.login', compact('errorMessage'));
            // return $this->sendError(null, $e->getMessage(), $e->getCode());
        }
    }

    /**
     * Register new user.
     *
     * @param RegisterRequest $request
     * @return object
     */
    public function register(RegisterRequest $request)
    {
        $user = $this->service->register($request);
        return $this->sendSuccess($user, null, 200);
    }

    /**
     * Get authenticated user.
     *
     * @return object
     */
    public function profile()
    {
        $user = $this->service->profile();
        return $this->sendSuccess($user, null, 200);
    }

    /**
     * Update the fcm resource in storage.
     *
     * @param UpdateFcmUserRequest $request
     * @return JsonResponse
     */
    public function updateFcm(UpdateFcmUserRequest $request)
    {
        $user = $this->service->updateFcm($request);
        return $this->sendSuccess($user, null, 200);
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
