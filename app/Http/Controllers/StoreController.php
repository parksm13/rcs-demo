<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Store;

class StoreController extends Controller
{
    public function index() {
        $stores = Store::all();
        return view('store', compact('stores'));
    }
}
