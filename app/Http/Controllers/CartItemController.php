<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function index()
    {
        return response()->json(CartItem::all(), 200);
    }
}
