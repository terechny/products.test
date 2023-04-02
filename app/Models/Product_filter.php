<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_filter extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['product_id', 'filter_value_id'];
}
