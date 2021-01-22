<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
use HasFactory;
protected $fillable=[
    'cat_id',
    'pro_name',
    'pro_price',
    'image_id'
     ];

public function CategoryDetails()
{
return $this->belongsTo('App\Models\Category','cat_id');
}

public function images()
{
return $this->belongsTo('App\Models\Image', 'image_id');
}
}