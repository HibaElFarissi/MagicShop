<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
   
        'text',
       
        'photo',
       
        'user_id',
        'Categorie_id',
       
    ];
    public function categorie(){ 
        
        return $this->belongsTo(Category::class , 'Categorie_id');

    }

    public function user(){ 
         
        return $this->belongsTo(User::class);

    }
}