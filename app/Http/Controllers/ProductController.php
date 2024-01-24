<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    public function index()
    {
       return  ProductResource::collection( Product::cursorPaginate(25) );
    }


    public function store(StoreProductRequest $request)
    {
        //
    }

    public function show($id)
    {
        return Product::with('stocks')->find($id);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
