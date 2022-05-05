<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function index()
    {
      $featured_categories = Category::where('status', '1')->get();

      $wishlist = Wishlist::where('user_id', Auth::id())->get();
      return view('frontend.wishlist', compact('featured_categories', 'wishlist'));
    }

    public function add(Request $request)
    {
      if(Auth::check())
      {
        $product_id = $request->input('product_id');
        if(Product::find($product_id))
        {
          $wishlist = new Wishlist();
          $wishlist->product_id = $product_id;
          $wishlist->user_id = Auth::id();
          $wishlist->save();
          return response()->json(['status' => 'Product Added to Wishlist']);
        }
        else
        {
          return response()->json(['status' => 'Product doesnot exits']);
        }
      }
      else
      {
        return response()->json(['status' => "Login to Continue"]);
      }
    }

    public function deleteitem(Request $request)
    {
      if(Auth::check())
      {
        $prod_id = $request->input('prod_id');
        if(Wishlist::where('product_id', $prod_id)->where('user_id', Auth::id())->exists());
        {
          $wish = Wishlist::where('product_id', $prod_id)->where('user_id', Auth::id())->first();
          $wish->delete();
          return response()->json(['status' => "Item Removed from wishlist"]);
        }
      }
      else
      {
        return response()->json(['status' => "Login to continue"]);
      }
    }

    public function wishlistcount()
    {
      $wishlistcount = Wishlist::where('user_id', Auth::id())->count();
      return response()->json(['count'=> $wishlistcount]);
    }
}
