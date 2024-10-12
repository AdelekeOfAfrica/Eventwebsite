<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    /** @use HasFactory<\Database\Factories\EventsFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'event_date',
        'location',
        'capacity',
        'price',
        'email',      
        'address',    
        'phone',      
    ];
}
