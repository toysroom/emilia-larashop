<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Services\CategoryService;
use App\Models\Category;

class CategoryController extends Controller
{

    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->categoryService->getAllWithDescription();
        return response()->json(new CategoryCollection($categories));
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json(new CategoryResource($category));
    }

}
