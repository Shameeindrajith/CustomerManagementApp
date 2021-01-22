<?php

namespace App\Http\Controllers;
use domain\Facades\CategoryFacade;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends ParentController
{

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
     $catData=CategoryFacade::getAllData();
     return view('category')->with('categories',$catData);
    }

     /**
      * addCategory
      *
      * @return void
      */
     public function addCategory()
     {
      return view('categoryAdd');
     }


    /**
     * catStore
     *
     * @param  mixed $request
     * @return void
     */
    public function catStore(Request $request)
    {
     CategoryFacade::store($request); //calling to categoryfacade
    //  return redirect()->back();
    return redirect(route('category-all'));
    }

    /**
     * deleteCategory
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteCategory($id)
    {
     $delete=CategoryFacade::getCategoryData($id);
     $delete->delete();
     return redirect()->back();
    }


    /**
     * updateCategory
     *
     * @param  mixed $id
     * @return void
     */
    public function updateCategory($id)
    {
     $update=CategoryFacade::getCategoryData($id);
     return view('categoryUpdate')->with('update_categories_data',$update);
    }


    /**
     * update
     *
     * @param  mixed $request
     * @return void
     */
    public function update(Request $request)
    {
     $categoryData=CategoryFacade::getCategoryData($request->id);
     Categoryfacade::updateCategory($categoryData, $request->all());
     return redirect(route('category-all'));
    }

}