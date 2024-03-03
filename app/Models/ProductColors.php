<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColors extends Model
{
    use HasFactory;
    protected $table ='color_product';
    protected $fillable = [
        'color_id',
        'product_id',
    ];
}
