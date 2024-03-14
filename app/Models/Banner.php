<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
        'image7',
        'image8',
        'Title1',
        'Slug1',
        'Title2',
        'Slug2',
        'Title3',
        'Slug3',
        'Title4',
        'Slug4',
        'Title5',
        'Slug5',
    ];
}
