<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(Request $request){
        $material = ["Шкіра", "Гума", "Текстиль", "Поліуретан"];
        $id=$request->input('id');

//        dd($id);
        $product = Products::where('id', $id)->first();
//        dd($product);
        if($product == null){
            return view('components.errors.undefined_product');
        }

        $colors = [
            'res/products/test10.jpg',
            'res/products/test11.jpg',
            'res/products/test13.jpg',
            'res/products/test16.jpg',
            'res/products/test17.jpg',
            'res/products/test18.jpg',
        ];
        return view('products')
            ->with('product', $product)
            ->with('material', $material)
            ->with('colors', $colors);

    }

}
