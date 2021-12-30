<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
      $featured_categories = Category::where('status', '1')->get();

      $cartitems = Cart::where('user_id', Auth::id())->get();
      return view('frontend.checkout', compact('featured_categories', 'cartitems'));
    }
}