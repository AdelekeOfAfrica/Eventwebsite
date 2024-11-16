<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    /** @use HasFactory<\Database\Factories\BlogsFactory> */
    use HasFactory;

    protected $fillable =["title","content","image_path","other_images"];

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }
    public function comments(){
        return $this->hasMany(comment::class,'post_id');
    }
}
