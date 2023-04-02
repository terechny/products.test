<?php

namespace App\Services;

use App\Models\Product;

class FilterSearchService
{

    function index($data){

        $filters = $this->buildFilterValuesArray($data['properties']);

        $products = Product::with('filters')
                            ->whereHas('filters', function ($query) use ( $filters ){ $query->whereIn('name', $filters); })
                            ->paginate(40); 

        return response()->json([ 'data' =>  $products ]);
    }

    private function buildFilterValuesArray($properties){

        $values = [];

        foreach($properties as $filter){

           foreach($filter as $value){
               $values[] = $value;
           }
        }

        return $values;
    }
}