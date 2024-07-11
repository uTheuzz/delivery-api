<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Addition extends Model
{
    use HasFactory, SoftDeletes;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = ['id', 'name', 'price', 'addition_category_id'];

    protected $casts = [
        'price' => 'float',
    ];

    public function additionCategory()
    {
        return $this->belongsTo(AdditionCategory::class);
    }
}
