<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'amount'
    ];

    public function filters(){
        
        return $this->belongsToMany(Filter_value::class, 'product_filters', 'product_id', 'filter_value_id');
    }    

}
