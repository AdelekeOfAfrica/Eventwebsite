<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;
    protected $fillable= ["post_id","name","comment"];

    public function blog(){
        return $this->belongsTo(blogs::class,'post_id');
    }
}
