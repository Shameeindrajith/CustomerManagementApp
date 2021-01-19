<?php

namespace App\Http\Controllers;
use domain\Facades\CategoryFacade;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends ParentController
{
//* open category page
    public function index()
    {
     $catData=CategoryFacade::getAllData();
     return view('category')->with('categories',$catData);
    }

//* Category store part
    public function catStore(Request $request)
    {
     CategoryFacade::store($request); //calling to categoryfacade
     return redirect()->back();
    }
//* Category delete part
    public function deleteCategory($id)
    {
     $delete=CategoryFacade::getCategoryData($id);
     $delete->delete();
     return redirect()->back();
    }

//* Category update function
    public function updateCategory($id)
    {
     $update=CategoryFacade::getCategoryData($id);
     return view('categoryUpdate')->with('update_categories_data',$update);
    }

// update second function start
    public function update(Request $request)
    {
     $categoryData=CategoryFacade::getCategoryData($request->id);
     Categoryfacade::updateCategory($categoryData, $request->all());
     return redirect(route('category-all'));
    }

}