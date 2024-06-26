<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'photo', 'is_parent', 'parent_id', 'status'];


    public static function shiftChild($cat_id)
    {
        return Category::whereIn('id', $cat_id)->update(['is_parent' => 1]);
    }
    public static function getChildByParentID($id)
    {
        return Category::where('parent_id', $id)->pluck('title', 'id');
    }

    public static function getChildByParentSlug($id)
    {
        return Category::where(['parent_id' => $id, 'status' => 'active'])->pluck('title', 'slug');
    }

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'cat_id', 'id');
    }
}
