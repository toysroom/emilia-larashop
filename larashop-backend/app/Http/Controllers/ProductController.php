<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\CategoryService;
use App\Services\ProductService;

class ProductController extends Controller
{
    private ProductService $productService;
    private CategoryService $categoryService;

    public function __construct(
        ProductService $productService, 
        CategoryService $categoryService
    )
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->productService->getAll();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->categoryService->getAll();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $this->productService->insert($request->name, $request->price, $request->category_id, $request->description);
        
        // $product->image = $request->image;

        // if ($request->file('image') ) {

        //     $fileHashName = $request['image']->hashName();
        //     $file = $request['image']->getClientOriginalName();

        //     $filename = pathinfo($file, PATHINFO_FILENAME);

        //     $filename = $filename.'-'.$fileHashName;
        //     $request['image']->storeAs('products', $filename);
            
        //     $product->image = $filename;
        // }

        return redirect()->route('products.index')->with('success', 'prodotto creato con successo');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $product)
    {
        $categories = $this->categoryService->getAll();
        $product = $this->productService->getById($product);
        return view('products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, int $product)
    {
        $product = $this->productService->getById($product);
        $this->productService->update($product, $request->name, $request->price, $request->category_id, $request->description);
        return redirect()->route('products.index')->with('success', 'prodotto modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $product)
    {
        $product = $this->productService->getById($product);
        $this->productService->delete($product);
        return redirect()->route('products.index')->with('success', 'prodotto cancellato con successo');
    }
}
