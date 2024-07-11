<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdditionCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'description',
        'max_selection',
        'global',
        'additional_type'
    ];

    protected $casts = [
        'global' => 'bool',
    ];

    protected $with = ['additions'];

    public function additions()
    {
        return $this->hasMany(Addition::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
