<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
      $featured_categories = Category::where('status', '1')->get();

      $orders = Order::where('user_id', Auth::id())->paginate(10);
      //dd($orders);
      return view('frontend.orders.index', compact('orders', 'featured_categories'));
    }

    public function view($id)
    {
      $featured_categories = Category::where('status', '1')->get();

      $orders = Order::where('id', $id)->where('user_id', Auth::id())->first();
      //dd($orders);
      return view('frontend.orders.view', compact('orders', 'featured_categories'));
    }

    public function profile()
    {
        $featured_categories = Category::where('status', '1')->get();

        return view('frontend.users.index', compact('featured_categories'));
    }

    public function update(Request $request)
    {
      $featured_categories = Category::where('status', '1')->get();

        $user = User::where('id', Auth::id())->first();

        $user->name = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->phone = $request->input('phone');
        $user->address1 = $request->input('address1');
        $user->address2 = $request->input('address2');
        $user->city = $request->input('city');
        $user->state = $request->input('state');
        $user->country = $request->input('country');
        $user->pincode = $request->input('pincode');
        $user->update();

        return view('frontend.users.index', compact('featured_categories'));
    }
}
