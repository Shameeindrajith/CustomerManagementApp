<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use domain\Facades\ProductFacade;
use domain\Facades\CategoryFacade;


class ProductController extends ParentController
{


  /**
   * index
   *
   * @return void
   */
  public function index()
  {
   $response['categaries']=CategoryFacade::getAllData();
   $response['products']=ProductFacade::getAllData();
   return view('product')->with($response);
  }

  /**
   * addProduct
   *
   * @return void
   */
  public function addProduct()
  {
   $response['categaries']=CategoryFacade::getAllData();
   return view('productAdd')->with($response);
  }

  /**
   * proStore
   *
   * @param  mixed $request
   * @return void
   */
  public function proStore(Request $request)
  {
   ProductFacade::store($request->all());
   return redirect(route('product-all'));
  }



  /**
   * deleteProduct
   *
   * @param  mixed $id
   * @return void
   */
  public function deleteProduct($id)
  {
   $delete=ProductFacade::getProductData($id);
   $delete->delete();
   return redirect()->back();
  }


  /**
   * updateProduct
   *
   * @param  mixed $id
   * @return void
   */
  public function updateProduct($id)
  {
   $response['categaries']=CategoryFacade::getAllData();
   $response['products']=ProductFacade::getProductData($id);
   return view('productUpdate')->with($response);
  }


  /**
   * update
   *
   * @param  mixed $request
   * @return void
   */
  public function update(Request $request)
  {
     $productData=ProductFacade::getProductData($request->id);
     ProductFacade::updateProduct($productData, $request->all());
    return redirect(route('product-all'));
  }


}