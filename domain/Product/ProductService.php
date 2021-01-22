<?php
namespace domain\Product;

use App\Models\Category;
use App\Models\Product;
use infrastructure\Facades\ImagesFacade;

class ProductService{

    protected $product;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
     $this->product=new Product();
    }


    /**
     * getAllData
     *
     * @return void
     */
    public function getAllData()
    {
     return $this->product->get();
    }


    /**
     * store
     *
     * @param  mixed $data
     * @return void
     */
    public function store($data)
    {

     if (isset($data['image']))
     {
      $name = str_replace(' ', '-', '');
      $image = ImagesFacade::up($data['image'], [2, 12, 9, 10, 13, 14], $name);
     }


     $data['image_id']=$image->id;

     return $this->product->create($data);
    }


    /**
     * getProductData
     *
     * @param  mixed $id
     * @return void
     */
    public function getProductData($id)
    {
     return $this->product->find($id);
    }


    /**
     * updateProduct
     *
     * @param  mixed $product
     * @param  mixed $request
     * @return void
     */
    public function updateProduct(Product $product, $request)
    {

     if (isset($request['image']))
     {
      $name = str_replace(' ', '-', '');
      $image = ImagesFacade::up($request['image'], [2, 12, 9, 10, 13, 14], $name);
     }
     $request['image_id']=$image->id;

     return $product->update($this->edit($product, $request));
    }

    protected function edit(Product $product, $data)
    {
     return array_merge($product->toArray(), $data);
    }
}