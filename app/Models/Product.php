<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'images',
        'price',
        'description',
        'discount',
        'SKU',
        'slug',
        'quantity',
        'category_id',
        'cover_image',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
    public function setSKUAttribute($value)
    {
        $this->attributes['SKU'] = strtolower($value);
    }
    //mutator
    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }
    //accessor
    public function getImagesAttribute($value)
    {
        return json_decode($value);
    }
}
