<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [

        'name',
        'slug',
        'images',
        'price',
        'old_price',
        'sold',
        'quantity',
        'status',
        'description',
        'category_id',
        'brand_id',

    ];

    // Relations: 

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }


    public  function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }

}
