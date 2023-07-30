<?php

namespace App\Http\Controllers\Api;

use App\Events\ProductAddedToCart;
use App\Events\ProductRemovedFromCart;
use App\Http\Controllers\Controller;
use App\Models\Product;
use \Cart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request, Product $product)
    : JsonResponse {
        Cart::add([
            'id'              => $product->id,
            'name'            => $product->name,
            'price'           => $product->price,
            'quantity'        => $request->quantity,
            'attributes'      => [],
            'associatedModel' => $product,
        ]);

        ProductAddedToCart::dispatch($product, Auth::user());

        return response()->json([
            'message' => 'Item successfully added to Shopping cart',
            'cart'    => Cart::getContent(),
        ], 201);

    }

    public function remove(Product $product)
    : JsonResponse {
        Cart::remove($product->id);

        ProductRemovedFromCart::dispatch($product, Auth::user());

        return response()->json([
            'message' => 'Item successfully removed from Shopping Basket',
            'basket'  => Cart::content(),
        ], 204);
    }

    public function getContent()
    : JsonResponse
    {

        return response()->json([
            'message'         => 'Shopping Basket successfully fetched',
            'basket'          => Cart::getContent(),
            'total'           => Cart::getTotal(),
            'number_of_items' => Cart::getTotalQuantity(),

        ]);
    }
}
