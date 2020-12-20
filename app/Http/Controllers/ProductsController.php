<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function listProducts(Request $request){
        $product_id = $request->product_id;
        $product_id = (int) $product_id;
        if ($product_id){
            $star = $request->star;
            $star = (int) $star;
            if ($star>0){
                $this->rateProduct($product_id, $star);
            }
            $product = Product::find($product_id);
            return view("product", compact('product'));
        }else{
            $products = Product::all();
            return view("products", compact('products'));
        }


    }

    private function rateProduct($product_id, $newstar=0){
        $product = Product::find($product_id);
        $rate = $product->rate;
        $rate+=$newstar;
        $number_rates = $product->number_rates;
        $number_rates++;
        $product->update([
            'rate' => $rate,
            'number_rates' => $number_rates
        ]);
        return false;
    }
}
