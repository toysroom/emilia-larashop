<?php


namespace App\Services;

use App\Models\Category;

class CategoryService {

    public function getAllOrderByName() 
    {
        return Category::orderBy('name')->get();
    }

    public function getAllWithDescription() 
    {
        return Category::whereNotNull('description')->get();
    }

    public function getAll() 
    {
        return Category::all();
    }

    public function insert($name, $description)
    {
        $category = new Category();
        $category->name = $name;
        $category->description = $description;
        $category->save();

        return $category;
    }

    public function update($category, $name, $description)
    {
        $category->name = $name;
        $category->description = $description;
        $category->save();

        return $category;
    }


    public function delete($category)
    {
        return $category->delete();
    }


    public function getTotalCategories()
    {
        return Category::count();
    }

}