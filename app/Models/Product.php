<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'description',
        'price',
        'category_id', // Add this if you have categories
    ];

    // Add relationships with Category model if needed
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
