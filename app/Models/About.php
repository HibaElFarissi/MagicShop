<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = [
        'Title_Globale',
        'description_Globale',
        'Title1',
        'description1',
        'Mini_Title1',
        'Slug1',
        'Mini_Title2',
        'Slug2',
        'Title2',
        'description2',
        'image1',
        'image2',
        // 'image3',
        'TitleQuotes',
        'SlugQuotes',
        'TitleCategory',
        'SlugCategory',
        'TitleFaq',
        'SlugFaq',
    ];

}
