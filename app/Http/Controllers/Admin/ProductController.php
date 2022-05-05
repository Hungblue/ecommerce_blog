<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    public function add(){
        $categories = Category::all()->load('products');
        return view('admin.product.add', compact('categories'));
    }

    public function insert(Request $request)
    {

        $product = new Product();

        //$product = $request->input();
        if($request->hasFile('image'))
        {
            $files = array();
            $files = $request->file('image');
            $product->image = '';
            //dd($files);
            foreach($files as $file)
            {
                $size = $file->getSize();
                $ext = $file->getClientOriginalExtension();
                $filename = time() . $size . '.' . $ext;
                $file->move('assets/uploads/product',$filename);
                if($product->image === '')
                {
                  $product->image = $filename;
                }else
                {
                  $product->image = $product->image . ',' . $filename;
                }
            }
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

    public function edit($id) {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('categories', 'product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if($request->hasFile('image'))
        {
            $files = $request->file('image');
            $product->image = '';
            foreach($files as $file)
            {
                $path = 'assets/uploads/product/'.$file->getClientOriginalName();
                if(File::exists($path))
                {
                    File::delete($path);
                }
                $size = $file->getSize();
                $ext = $file->getClientOriginalExtension();
                $filename = time() . $size . '.' . $ext;
                $file->move('assets/uploads/product',$filename);
                if($product->image === '')
                {
                  $product->image = $filename;
                }else
                {
                  $product->image = $product->image . ',' . $filename;
                }
            }
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
        $product->update();

        return redirect('/products')->with('status', "Product Updated Successfully");
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $arrayImage = explode(',', $product->image);
        foreach ($arrayImage as $image)
        {
            $path = 'assets/uploads/product/'.$image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        $product->delete();
        }
        return redirect('/products');
    }
}