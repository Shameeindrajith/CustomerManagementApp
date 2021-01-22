<?php

namespace domain\Category;

use App\Models\Category;



class CategoryService
{
    protected $category;

    public function __construct()
    {
     $this->category = new Category();
    }

//get all category data
    public function getAllData()
    {
     return $this->category->get();
    }

//store category data
    public function store($request)
    {
     $data=$request->all();
     return $this->category->create($data);
    }

//find category data
    public function getCategoryData($id)
    {
     return $this->category->find($id);
    }

//update category
    public function updateCategory(Category $category, $data)
    {
     return $category->update($this->edit($category, $data));
    }

    protected function edit(Category $category, $data)
    {
     return array_merge($category->toArray(), $data);
    }
}