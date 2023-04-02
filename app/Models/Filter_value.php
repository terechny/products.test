<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter_value extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ['name', 'filter_id']; 
}
