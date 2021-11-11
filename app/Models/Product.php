<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description',  'price', 'photo', 'brand_id', 'cat_id', 'child_cat_id', 'surface', 'facade', 'rdc', 'petage', 'video', 'address', 'conditions', 'fond', 'date_d', 'ref', 'extraction'];

    public function rel_prods()
    {
        return $this->hasMany('App\Models\Product', 'cat_id', 'cat_id')->where('status', 'active')->limit(3);
    }
}
