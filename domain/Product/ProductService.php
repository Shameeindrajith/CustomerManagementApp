<?php
namespace domain\Product;

use App\Models\Category;
use App\Models\Product;
use infrastructure\Facades\ImagesFacade;

class ProductService{

    protected $product;

    public function __construct()
    {
     $this->product=new Product();
    }

//get all product data
    public function getAllData()
    {
     return $this->product->get();
    }

//store product data
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

//find product data
    public function getProductData($id)
    {
     return $this->product->find($id);
    }

//update product
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

?>