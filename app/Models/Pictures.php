<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    /** @use HasFactory<\Database\Factories\PicturesFactory> */
    use HasFactory;
    protected $fillable =["name","image_path"];
}
