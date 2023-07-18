<?php

namespace App\Http\Controllers\User;

use App\Helpers\PaginationHelper;
use App\Http\Controllers\ApiController;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\Entity\TypeRole;
use App\Models\Entity\User;
use App\Services\User\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    protected UserService $service;

    /**
     * @param UserService $service
     * @param Request $request
     */
    public function __construct(UserService $service, Request $request)
    {
        $this->service = $service;
        parent::__construct($request);
        $this->middleware('can:create, App\Models\Entity\User')->only('store');
        $this->middleware('can:create, App\Models\Entity\User')->only('destroy');
        $this->middleware('can:create, App\Models\Entity\User')->only('update');
        $this->middleware('can:create, App\Models\Entity\User')->only('index');


    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {

        $users = $this->service->dataTable($request);
        $collect = User::all();
        $user = PaginationHelper::paginate($collect, 12);
        $type_role = TypeRole::all();
        // $this->authorize('view', $users);
        return view('pages.users', compact('user', 'type_role'));

        // return $this->sendSuccess($users, null, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUserRequest $request
     * @return JsonResponse
     */
    public function store(StoreUserRequest $request)
    {
        $data = $this->service->create($request);
        $collect = User::all();
        $user = PaginationHelper::paginate($collect, 12);
        // return $this->sendSuccess($user, null, 201);
        return view('pages.users', compact('user'));

    }

    /**
     * Display the specified resource.
     *
     * @param String $id
     * @return JsonResponse
     */
    public function show(string $id)
    {
        $feature = $this->service->getById($id);
        return $this->sendSuccess($feature, null, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateUserRequest $request
     * @param String $id
     * @return JsonResponse
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        $user = $this->service->update($id, $request);
        // $this->authorize('update', User::class);
        $collect = User::all();

        $user = PaginationHelper::paginate($collect, 12);
        // return $this->sendSuccess($user, null, 201);
        return view('pages.users', compact('user'));
    }

    public function search(Request $request)
    {
        $users = $this->service->search($request);
        $user = PaginationHelper::paginate($users, 12);
        $type_role = TypeRole::all();

        return view('pages.users', compact('user', 'type_role'));
    }

    public function operation(Request $request)
    {
        $users = $this->service->operation($request);
        $user = PaginationHelper::paginate($users, 12);
        $type_role = TypeRole::all();

        return view('pages.users', compact('user', 'type_role'));
    }

    public function lead_mechanice(Request $request)
    {
        $users = $this->service->lead_mechanice($request);
        $user = PaginationHelper::paginate($users, 12);
        $type_role = TypeRole::all();

        return view('pages.users', compact('user', 'type_role'));
    }
    public function mechanice(Request $request)
    {
        $users = $this->service->mechanice($request);
        $user = PaginationHelper::paginate($users, 12);
        $type_role = TypeRole::all();

        return view('pages.users', compact('user', 'type_role'));
    }
    public function logistic(Request $request)
    {
        $users = $this->service->logistic($request);
        $user = PaginationHelper::paginate($users, 12);
        $type_role = TypeRole::all();

        return view('pages.users', compact('user', 'type_role'));
    }
    public function admin(Request $request)
    {
        $users = $this->service->admin($request);
        $user = PaginationHelper::paginate($users, 12);
        $type_role = TypeRole::all();

        return view('pages.users', compact('user', 'type_role'));
    }
    public function member(Request $request)
    {
        $users = $this->service->member($request);
        $user = PaginationHelper::paginate($users, 12);
        $type_role = TypeRole::all();

        return view('pages.users', compact('user', 'type_role'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param String $id
     * @return JsonResponse
     */
    public function destroy(string $id)
    {
        // $this->authorize('delete', User::class);

        $user = $this->service->delete($id);
        $collect = User::all();
        $user = PaginationHelper::paginate($collect, 12);
        // return $this->sendSuccess($user, null, 201);
        return view('pages.users', compact('user'));
    }
}
