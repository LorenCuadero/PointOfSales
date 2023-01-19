<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    // public function show_product( Product $product )
    // {
    //     return $product->with( 'purchase' )->first();
    // }

    public function showAll() {
        return Product::all();
    }

    public function createProduct( Request $request ) {
        return Product::create( [
            'name' => $request->name,
            'price' => $request->price,
            'stock'=> $request->stock,
        ] );
    }

    public function showById( $id ) {
        return Product::where( 'id', $id )->first();

    }

    public function updateProduct( Request $request, $id ) {
        //find the Product youre going to update
        Product::find( $id )->update( [
            'name' => $request->name,
            'price' => $request->price,
            'stock'=> $request->stock,
        ] );
    }

    public function deleteProduct( $id ) {
        return Product::find( $id )->delete();
    }
}
