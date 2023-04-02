<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Services\FilterSearchService;
use App\Http\Requests\FilterSearchRequest;

class FilterSearchController extends Controller
{

    private FilterSearchService $service;
     
    public function __construct(FilterSearchService $service){

        $this->service = $service;
    }

    public function index(FilterSearchRequest $request){

        return $this->service->index($request->validated());
    }

}
