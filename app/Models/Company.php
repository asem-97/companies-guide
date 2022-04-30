<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $casts=[
        'email'=>'array',
        'phone'=>'array',
        'link'=>'array'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function subcategory()
    // {
    //     return $this->belongsTo(Subcategory::class);
    // }

    public function getImageAttribute($value) {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        if($value===null)
        {
            return null;
        }
        return asset('storage/images/companies/' . $value);
    }


    public function getBruchoureAttribute($value) {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        if($value===null)
        {
            return null;
        }
        return asset('storage/images/companies/' . $value);
    }
    
    
    public function getProfileAttribute($value) {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        if($value===null)
        {
            return null;
        }
        
        return'storage/profiles/' . $value;
    }
}
