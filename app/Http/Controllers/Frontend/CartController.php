<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
      $product_id = $request->input('product_id');
      $product_qty = $request->input('product_qty');

      if(Auth::check())
      {
        $prod_check = Product::where('id', $product_id)->first();

        if($prod_check)
        {
          if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
          {
            return response()->json(['status' => $prod_check->name. " Already Added to cart"]);
          }
          else
          {
          $cartItem = new Cart();
          $cartItem->product_id = $product_id;
          $cartItem->user_id = Auth::id();
          $cartItem->product_qty = $product_qty;
          $cartItem->save();
          return response()->json(['status' => $prod_check->name." Added to cart"]);
          }
        }
      }
      else
      {
        return response()->json(['status' => "Login to Continue"]);
      }
    }

    public function viewcart()
    {
      $featured_categories = Category::where('status', '1')->get();

      $cartitems  = Cart::where('user_id', Auth::id())->get();
      return view('frontend.cart', compact('cartitems', 'featured_categories'));
    }

    public function updateCart(Request $request)
    {
      $prod_id = $request->input('prod_id');
      $product_qty = $request->input('prod_qty');

      if(Auth::check())
      {
        if(Cart::where('product_id', $prod_id)->where('user_id', Auth::id())->exists());
        {
          $cartItem = Cart::where('product_id', $prod_id)->where('user_id', Auth::id())->first();
          $cartItem->product_qty = $product_qty;
          $cartItem->update();
          return response()->json(['status' => "Product Deleted Successfully"]);
        }
      }
    }

    public function deleteProduct(Request $request)
    {
      if(Auth::check())
      {
        $prod_id = $request->input('prod_id');
        if(Cart::where('product_id', $prod_id)->where('user_id', Auth::id())->exists());
        {
          $cartItem = Cart::where('product_id', $prod_id)->where('user_id', Auth::id())->first();
          $cartItem->delete();
          return response()->json(['status' => "Product Deleted Successfully"]);
        }
      }
      else
      {
        return response()->json(['status' => "Login to continue"]);
      }
    }

    public function cartcount()
    {
      $cartcount = Cart::where('user_id', Auth::id())->count();
      return response()->json(['count'=> $cartcount]);
    }
}
