<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create()
    {
        return view('brand.create');
    }

    public function show($slug){
        $brand = Brand::where('slug', $slug)
            ->firstOrFail();

        $products = Product::where('brand_id', $brand->id)
            ->orderBy('id', 'desc')
            ->get();

        return view('brand.show')
            ->with([
                'brand' => $brand,
                'products' => $products,
            ]);
    }
}
