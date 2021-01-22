<?php

namespace domain\Category;

use App\Models\Category;



class CategoryService
{
    protected $category;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
     $this->category = new Category();
    }


    /**
     * getAllData
     *
     * @return void
     */
    public function getAllData()
    {
     return $this->category->get();
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store($request)
    {
     $data=$request->all();
     return $this->category->create($data);
    }


    /**
     * getCategoryData
     *
     * @param  mixed $id
     * @return void
     */
    public function getCategoryData($id)
    {
     return $this->category->find($id);
    }


    /**
     * updateCategory
     *
     * @param  mixed $category
     * @param  mixed $data
     * @return void
     */
    public function updateCategory(Category $category, $data)
    {
     return $category->update($this->edit($category, $data));
    }

    protected function edit(Category $category, $data)
    {
     return array_merge($category->toArray(), $data);
    }
}