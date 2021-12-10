<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function add(){
        $categories = Category::all();
        return view('admin.product.add', compact('categories'));
    }

    public function insert(Request $request)
    {
        
        $product = new Product();
        //$product = $request->input();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/product',$filename);
            $product->image = $filename;
        }              
        $product->cate_id = $request->input('cate_id');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status') == TRUE ? 1 : 0;
        $product->trending = $request->input('trending') == TRUE ? 1 : 0;
        $product->meta_title = $request->input('meta_title');
        $product->meta_descrip = $request->input('meta_descrip');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->save();

        return redirect('/products')->with('status', "Product Added Successfully");
    }

    // public function edit($id) {
    //     $category = Category::findOrFail($id);
    //     return view('admin.category.edit', compact('category'));
    // }

    // public function update(Request $request, $id) 
    // {
    //     $category = Category::findOrFail($id);
        
    //     if($request->hasFile('image'))
    //     {
    //         $path = 'assets/uploads/category/'.$category->image;
    //         if(File::exists($path))
    //         {
    //             File::delete($path);
    //         }
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $ext;
    //         $file->move('assets/uploads/category',$filename);
    //         $category->image = $filename;
    //     }
    
    //     $category->name = $request->input('name');
    //     $category->slug = $request->input('slug');
    //     $category->description = $request->input('description');
    //     $category->status = $request->input('status') == TRUE ? 1 : 0;
    //     $category->popular = $request->input('popular') == TRUE ? 1 : 0;
    //     $category->meta_title = $request->input('meta_title');
    //     $category->meta_descrip = $request->input('meta_descrip');
    //     $category->meta_keywords = $request->input('meta_keywords');
    //     $category->update();

    //     return redirect('/categories')->with('status', "Category Updated Successfully");
    // }

    // public function delete($id)
    // {
    //     $category = Category::findOrFail($id);
    //     $path = 'assets/uploads/category/'.$category->image;
    //     if(File::exists($path))
    //     {
    //         File::delete($path);
    //     }
    //     $category->delete();
    //     return redirect('/categories');
    // }
}
