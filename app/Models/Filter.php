<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];  

    public function values()
    {
        return $this->hasMany(Filter_value::class);
    }      
}
