<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 
        'shipping_address', 
        'total_cost',
        'telephone_number', 
        'country_region', 
        'province', 
        'city', 
        'zip_code',
        'email',
        'Full_Name',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
   

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
