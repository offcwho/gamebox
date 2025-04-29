<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($id)
    {
        $product = Product::where('id', $id)->first();

        return view('website.product.show', [
            'product' => $product
        ]);
    }
}
