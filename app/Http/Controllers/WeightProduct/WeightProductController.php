<?php

namespace App\Http\Controllers\WeightProduct;

use App\Http\Controllers\ApiController;
use App\Http\Requests\WeightProduct\StoreWeightProductRequest;
use App\Http\Requests\WeightProduct\UpdateWeightProductRequest;
use App\Models\Entity\WeightProduct;
use App\Services\WeightProduct\WeightProductService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class WeightProductController extends ApiController
{
    protected WeightProductService $service;

    /**
     * @param WeightProductService $service
     * @param Request $request
     */
    public function __construct(WeightProductService $service, Request $request)
    {
        $this->service = $service;
        parent::__construct($request);
        $this->middleware('can:create, App\Models\Entity\WeightProduct')->only('store');
        $this->middleware('can:delete, App\Models\Entity\WeightProduct')->only('destroy');
        $this->middleware('can:update, App\Models\Entity\WeightProduct')->only('update');
        $this->middleware('can:viewAny, App\Models\Entity\WeightProduct')->only('index');

    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        // $data = $this->service->dataTable($request);
        // return $this->sendSuccess($data, null, 200);
        $weight_product = WeightProduct::all();

        return view('pages.weight-product', compact('weight_product'));
        // return view('pages.weight-product');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param StoreWeightProductRequest $request
     * @return JsonResponse
     */
    public function store(StoreWeightProductRequest $request)
    {
        $data = $this->service->create($request);
        // return $this->sendSuccess($data, null, 201);
        $weight_product = WeightProduct::all();

        return view('pages.weight-product', compact('data','weight_product'));
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
     * @param UpdateWeightProductRequest $request
     * @param String $id
     * @return JsonResponse
     */
    public function update(UpdateWeightProductRequest $request, string $id)
    {
        $datum = $this->service->update($id, $request);
        return $this->sendSuccess($datum, null, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateWeightProductRequest $request
     * @param String $id
     * @return JsonResponse
     */
    public function updatePrioritas()
    {
        $datum = $this->service->updatePrioritas();
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
