<?php

namespace App\Http\Controllers;
use App\Models\Purchase;
use Illuminate\Http\Request;


class PurchaseController extends Controller {

    public function show_purchase(Purchase $purchase)
    {
        return $purchase->with('products')->first();
    }
    public function showAll()
    {
        return Purchase::all();
    }
    public function showById($id)
    {
        return Purchase::where('id', $id)->first();
    }



}

