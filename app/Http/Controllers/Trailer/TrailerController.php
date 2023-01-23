<?php

namespace App\Http\Controllers\Trailer;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Trailer\StoreTrailerRequest;
use App\Http\Requests\Trailer\UpdateTrailerRequest;
use App\Models\Entity\ModelTrailer;
use App\Models\Entity\TypeTrailer;
use App\Models\Entity\Trailer;
use App\Services\Trailer\TrailerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TrailerController extends ApiController
{
    protected TrailerService $service;

    /**
     * @param TrailerService $service
     * @param Request $request
     */
    public function __construct(TrailerService $service, Request $request)
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

        // $this->authorize(ability: 'view', arguments: $data);
        return $this->sendSuccess($data, null, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTrailerRequest $request
     * @return JsonResponse
     */
    public function store(StoreTrailerRequest $request)
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
     * @param UpdateTrailerRequest $request
     * @param String $id
     * @return JsonResponse
     */
    public function update(UpdateTrailerRequest $request, string $id)
    {
        $datum = $this->service->update($id, $request);
        return $this->sendSuccess($datum, null, 200);
    }

    public function search(Request $request)
    {
        $trailers = $this->service->search($request);
        $trailerT = TypeTrailer::all();
        $trailerM = ModelTrailer::all();
        return view('pages.vehicle.trailer', compact('trailers','trailerT', 'trailerM'));
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
