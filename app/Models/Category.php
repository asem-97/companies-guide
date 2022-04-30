<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['name','parent_id'];

    // public function companies()
    // {
    //     return $this->hasManyThrough(Company::class, Subcategory::class);
    // }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    // recursive, loads all descendants
    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }
}
