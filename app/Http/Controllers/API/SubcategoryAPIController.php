<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSubcategoryAPIRequest;
use App\Http\Requests\API\UpdateSubcategoryAPIRequest;
use App\Models\Subcategory;
use App\Repositories\SubcategoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class SubcategoryController
 * @package App\Http\Controllers\API
 */

class SubcategoryAPIController extends AppBaseController
{
    /** @var  SubcategoryRepository */
    private $subcategoryRepository;

    public function __construct(SubcategoryRepository $subcategoryRepo)
    {
        $this->subcategoryRepository = $subcategoryRepo;
    }

    /**
     * Display a listing of the Subcategory.
     * GET|HEAD /subcategories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->subcategoryRepository->pushCriteria(new RequestCriteria($request));
        $this->subcategoryRepository->pushCriteria(new LimitOffsetCriteria($request));
        $subcategories = $this->subcategoryRepository->all();

        return $this->sendResponse($subcategories->toArray(), 'Subcategories retrieved successfully');
    }

    /**
     * Store a newly created Subcategory in storage.
     * POST /subcategories
     *
     * @param CreateSubcategoryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSubcategoryAPIRequest $request)
    {
        $input = $request->all();

        $subcategories = $this->subcategoryRepository->create($input);

        return $this->sendResponse($subcategories->toArray(), 'Subcategory saved successfully');
    }

    /**
     * Display the specified Subcategory.
     * GET|HEAD /subcategories/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Subcategory $subcategory */
        $subcategory = $this->subcategoryRepository->findWithoutFail($id)->with('category')->get();

        if (empty($subcategory)) {
            return $this->sendError('Subcategory not found');
        }

        return $this->sendResponse($subcategory->toArray(), 'Subcategory retrieved successfully');
    }

    /**
     * Update the specified Subcategory in storage.
     * PUT/PATCH /subcategories/{id}
     *
     * @param  int $id
     * @param UpdateSubcategoryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubcategoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var Subcategory $subcategory */
        $subcategory = $this->subcategoryRepository->findWithoutFail($id);

        if (empty($subcategory)) {
            return $this->sendError('Subcategory not found');
        }

        $subcategory = $this->subcategoryRepository->update($input, $id);

        return $this->sendResponse($subcategory->toArray(), 'Subcategory updated successfully');
    }

    /**
     * Remove the specified Subcategory from storage.
     * DELETE /subcategories/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Subcategory $subcategory */
        $subcategory = $this->subcategoryRepository->findWithoutFail($id);

        if (empty($subcategory)) {
            return $this->sendError('Subcategory not found');
        }

        $subcategory->delete();

        return $this->sendResponse($id, 'Subcategory deleted successfully');
    }
}
