<?php

namespace App\Http\Controllers\Sparepart;

use App\Helpers\PaginationHelper;
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
        $this->middleware('can:create,App\Models\Entity\Sparepart')->only('store');
        $this->middleware('can:viewAny,App\Models\Entity\Sparepart')->only('index');
        $this->middleware('can:create,App\Models\Entity\Sparepart')->only('update');
        $this->middleware('can:create,App\Models\Entity\Sparepart')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        $data = $this->service->dataTable($request);
        $sparepart = Sparepart::all();
        $spareparts = PaginationHelper::paginate($sparepart, 12);
        return view('pages.spareparts', compact('spareparts'));
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
        $sparepart = Sparepart::all();
        $spareparts = PaginationHelper::paginate($sparepart, 12);


        return view('pages.spareparts', compact('spareparts'));

        // return $this->sendSuccess($data, null, 201);
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
        $sparepart = Sparepart::all();
        $spareparts = PaginationHelper::paginate($sparepart, 12);



        return view('pages.spareparts', compact('spareparts'));
        // return $this->sendSuccess($datum, null, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param String $id
     * @return JsonResponse
     */

     public function search(Request $request)
     {
         $sparepart = $this->service->search($request);
         $spareparts = PaginationHelper::paginate($sparepart, 12);
         return view('pages.spareparts', compact('spareparts'));
     }

     public function ascending(Request $request)
     {
         $sparepart = $this->service->ascending($request);
         $spareparts = PaginationHelper::paginate($sparepart, 12);
         return view('pages.spareparts', compact('spareparts'));
     }
     public function descending(Request $request)
     {
         $sparepart = $this->service->descending($request);
         $spareparts = PaginationHelper::paginate($sparepart, 12);
         return view('pages.spareparts', compact('spareparts'));
     }
     public function highStock(Request $request)
     {
         $sparepart = $this->service->highStock($request);
         $spareparts = PaginationHelper::paginate($sparepart, 12);
         return view('pages.spareparts', compact('spareparts'));
     }
     public function lowStock(Request $request)
     {
         $sparepart = $this->service->lowStock($request);
         $spareparts = PaginationHelper::paginate($sparepart, 12);
         return view('pages.spareparts', compact('spareparts'));
     }
    public function destroy(string $id)
    {
        $datum = $this->service->delete($id);
        $sparepart = Sparepart::all();
        $spareparts = PaginationHelper::paginate($sparepart, 12);


        return view('pages.spareparts', compact('spareparts'));
    }
}
