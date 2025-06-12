<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    private CategoryService $categoryService;
    private ProductService $productService;


    public function __construct(
        CategoryService $categoryService,
        ProductService $productService
    )
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }



    public function index()
    {

        $totalCategories = $this->categoryService->getTotalCategories();
        $totalProducts = $this->productService->getTotalProducts();

        return view('dashboard', compact('totalCategories', 'totalProducts'));
    }
}
