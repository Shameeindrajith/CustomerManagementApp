<?php
namespace domain\Product;

use App\Models\Category;
use App\Models\Product;

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
    public function store($request)
    {
     $image=$request->file('image');
     $image_name=time().'.'.$image->extension();
     $image->move(public_path('images'),$image_name);
     $data=$request->all();
     $data['image']=$image_name;
     return $this->product->create($data);
    }

//find product data
    public function getProductData($id)
    {
     return $this->product->find($id);
    }

//update category
    public function updateProduct(Product $product, $request)
    {
     $image=$request->file('image');
     $image_name=time().'.'.$image->extension();
     $image->move(public_path('images'),$image_name);
     $data=$request->all();
     $data['image']=$image_name;
     return $product->update($this->edit($product, $data));
    }

    protected function edit(Product $product, $data)
    {
     return array_merge($product->toArray(), $data);
    }
}

?>


