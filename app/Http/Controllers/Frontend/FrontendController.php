<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
      $featured_categories = Category::where('status', '1')->get();
      for ($i=0; $i < $featured_categories->count(); $i++) {
        $featured_products[$i] = Product::where('cate_id', $i+1)->where('trending', '1')->where('status', '1')->take(15)->get();
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
          return view('frontend.products.view', compact('product', 'featured_categories'));
        }
        else{
          return redirect('/')->with('status', 'The link was broken');
        }
      }
      else{
        return redirect('/')->with('status', 'No such category found');
      }
    }
}