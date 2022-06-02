<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\Article as Authenticatable;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'featured_image'
    ];
}
