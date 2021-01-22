<?php
namespace domain\Facades;
use Illuminate\Support\Facades\Facade;

class ProductFacade extends Facade{


    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
     return 'domain\Product\ProductService';
    }

}