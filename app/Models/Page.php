<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    public $fillable = ['title', 'subtitle', 'template', 'text', 'text2', 'banner_image_url', 'image_url1', 'image_url2'];

}
