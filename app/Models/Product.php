<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $keyType = 'string';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'category_id',
        'description',
        'image',
        'price',
        'discount_price',
        'discount_percent',
    ];

    protected $casts = [
        'price' => 'float',
    ];

    // protected $with = ['category', 'additionCategories'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function additionCategories()
    {
        return $this->belongsToMany(AdditionCategory::class);
    }
}
