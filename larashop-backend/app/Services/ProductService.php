<?php

namespace App\Services;
use App\Models\Product;
use App\Models\Category;

class ProductService {

    public function getAll()
    {
        return Product::with('category')->get();
    }

    public function getById(int $id): Product
    {
        return Product::findOrFail($id);
    }


    public function insert(string $name, float $price, int $category_id, string | null $description)
    {
        $product = new Product();
        return $this->save($product, $name, $price, $category_id, $description);
    }

    public function update(Product $product, string $name, float $price, int $category_id, string | null $description)
    {
        return $this->save($product, $name, $price, $category_id, $description);
    }


    private function save(Product $product, string $name, float $price, int $category_id, string | null $description)
    {
        $product->name = $name;
        $product->price = $price;
        $product->category_id = $category_id;
        $product->description = $description;
        $product->save();
        return $product;
    }



    public function delete(Product $product)
    {
        return $product->delete();
    }

    public function getAllByCategory(Category $category)
    {
        return Product::with('category')->where('category_id', $category->id)->get();
    }

    public function getTotalProducts()
    {
        return Product::count();
    }
}