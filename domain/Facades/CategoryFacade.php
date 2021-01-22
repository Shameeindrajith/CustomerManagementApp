<?php

namespace domain\Facades;

use Illuminate\Support\Facades\Facade;


class CategoryFacade extends Facade
{

    /**
     * getFacadeAccessor
     *
     * @return void
     */
    protected static function getFacadeAccessor()
    {
     return 'domain\Category\CategoryService';
    }
}