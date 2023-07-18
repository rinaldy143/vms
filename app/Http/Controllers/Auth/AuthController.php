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
            // ->whereYear('created_at', date('Y'))
            ->groupBy('role')
            ->orderBy('role', 'ASC')
            ->pluck('count', 'role');

            return view('pages.dashboard', compact('users'));
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
