<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;

class ProductController extends Controller
{
    private ProductService $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productService->getAll();
        return response()->json(new ProductCollection($products));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()->json(new ProductResource($product));
    }
    
    
    public function indexByCategory(Category $category)
    {
        $products = $this->productService->getAllByCategory($category);
        return $products;
    }
}
