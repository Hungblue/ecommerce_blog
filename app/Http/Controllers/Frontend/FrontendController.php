<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Rating;
use App\Models\Review;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
      $featured_categories = Category::where('status', '1')->get();
      foreach ($featured_categories as $item) {
        $featured_products[$item->name] = Product::where('cate_id', $item->id)->where('trending', '1')->where('status', '1')->take(15)->get();
      }
      //dd($featured_products);
      return view('frontend.index', compact('featured_products', 'featured_categories'));
    }

    // public function category($id)
    // {
    //   $category = Category::where('status', '0')->get();
    //   return view('frontend.category', compact('category'));
    // }

    public function viewcategory($slug)
    {

      if(Category::where('slug', $slug)->exists())
      {
        $featured_categories = Category::where('status', '1')->get();
        $category = Category::where('slug', $slug)->first();
        $products = Product::where('cate_id', $category->id)->where('status', '1')->where('trending', '0')->get();
        $trending_products = Product::where('cate_id', $category->id)->where('trending', '1')->where('status', '1')->get();
        return view('frontend.products.index', compact('products', 'category', 'featured_categories', 'trending_products'));
      }
      else
      {
        return view('frontend.products.index')->with('status', "Slug doesnot exits");
      }
    }

    public function viewproduct($category_slug, $product_slug)
    {

      if(Category::where('slug', $category_slug)->exists()){
        if(Product::where('slug', $product_slug)->exists())
        {
          $featured_categories = Category::where('status', '1')->get();
          $product = Product::where('slug', $product_slug)->first();
          $ratings = Rating::where('product_id', $product->id)->get();
          $rating_sum = Rating::where('product_id', $product->id)->sum('stars_rated');
          $user_rating = Rating::where('product_id', $product->id)->where('user_id', Auth::id())->first();
          $reviews = Review::where('product_id', $product->id)->get();

          if ($ratings->count() > 0){
              $rating_value = $rating_sum/$ratings->count();
          }
          else{
              $rating_value = 0;
          }
          return view('frontend.products.view', compact('product', 'ratings','rating_value','user_rating', 'reviews', 'featured_categories'));
        }
        else{
          return redirect('/')->with('status', 'The link was broken');
        }
      }
      else{
        return redirect('/')->with('status', 'No such category found');
      }
    }

    public function search(Request $request){
      if(isset($_GET['search']))
      {
        $featured_categories = Category::where('status', '1')->get();

        $search_text = $_GET['search'];
        if(Product::where('name','LIKE', '%'.$search_text.'%')->exists())
        {
          $products = Product::where('name','LIKE', '%'.$search_text.'%')->get();
          return view('frontend.products.search', compact('products', 'featured_categories'));
        }
        else{
          return redirect('/')->with('status', 'No products found');
        }
      }
    }

    public function search_category(Request $request){

      if(isset($_GET['search_category']))
      {
        $featured_categories = Category::where('status', '1')->get();

        $search_text = $_GET['search_category'];
        if(Product::where('cate_id', $search_text)->exists())
        {
          $products = Product::where('cate_id', $search_text)->get();
          return view('frontend.products.search', compact('products', 'featured_categories'));
        }
        else{
          return redirect('/')->with('status', 'No products found');
        }
      }
    }
}