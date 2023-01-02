<?php

namespace App\Http\Controllers\Sparepart;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Sparepart\StoreSparepartRequest;
use App\Http\Requests\Sparepart\UpdateSparepartRequest;
use App\Models\Entity\Sparepart;
use App\Services\Sparepart\SparepartService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SparepartController extends ApiController
{
    protected SparepartService $service;

    /**
     * @param SparepartService $service
     * @param Request $request
     */
    public function __construct(SparepartService $service, Request $request)
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
        $sparepats = Sparepart::all();

        return view('pages.spareparts', compact('sparepats'));
        // return $this->sendSuccess($data, null, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSparepartRequest $request
     * @return JsonResponse
     */
    public function store(StoreSparepartRequest $request)
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
     * @param UpdateSparepartRequest $request
     * @param String $id
     * @return JsonResponse
     */
    public function update(UpdateSparepartRequest $request, string $id)
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
