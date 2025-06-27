<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Http\Resources\CartCollection;
use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\User;

class CartController extends Controller
{
    public function addProduct(AddProductCartRequest $addProductCartRequest)
    {
        // $cart = new Cart();
        $cart = Cart::firstOrNew([
            'user_id' => $addProductCartRequest->user_id, 
            'product_id' => $addProductCartRequest->product_id, 
        ]);

        $cart->user_id = $addProductCartRequest->user_id;
        $cart->product_id = $addProductCartRequest->product_id;
        $cart->quantity += $addProductCartRequest->quantity;
        $cart->order_date = now()->format('Y-m-d H:i:s');
        $cart->save();

        return response()->json( new CartResource($cart) );
    }

    public function getCartFromUserID(User $user)
    {
        $cart = Cart::where('user_id', $user->id)->get();
        
        return response()->json( new CartCollection($cart) );
    }
}
