<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function add(){
        return view('admin.category.add');
    }

    public function insert(Request $request)
    {
        $category = new Category();
        if($request->hasFile('image'))
        {
            $files = array();
            $file = $request->file('image');
            $category->image = '';
            foreach($files as $file)
            {
                $size = $file->getSize();
                $ext = $file->getClientOriginalExtension();
                $filename = time() . $size . '.' . $ext;
                $file->move('assets/uploads/category',$filename);

                if($category->image === '')
                {
                    $category->image = $filename;
                }else{
                    $category->image = $category->image . ',' . $filename;
                }
            }

        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? 1 : 0;
        $category->popular = $request->input('popular') == TRUE ? 1 : 0;

        $category->meta_title = $request->input('meta_title');
        $category->meta_descrip = $request->input('meta_descrip');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->save();

        return redirect('/categories')->with('status', "Category Added Successfully");
    }

    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        if($request->hasFile('image'))
        {
            $files = $request->file('image');
            $category->image = '';
            foreach($files as $file)
            {
                $path = 'assets/uploads/category/'.$category->image;
                if(File::exists($path))
                {
                    File::delete($path);
                }
                $size = $file->getSize();
                $ext = $file->getClientOriginalExtension();
                $filename = time() . $size . '.' . $ext;
                $file->move('assets/uploads/category',$filename);

                if($category->image === '')
                {
                    $category->image = $filename;
                }else{
                    $category->image = $category->image . ',' . $filename;
                }
            }

        }

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status') == TRUE ? 1 : 0;
        $category->popular = $request->input('popular') == TRUE ? 1 : 0;
        $category->meta_title = $request->input('meta_title');
        $category->meta_descrip = $request->input('meta_descrip');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->update();

        return redirect('/categories')->with('status', "Category Updated Successfully");
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        $path = 'assets/uploads/category/'.$category->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
        $category->delete();
        return redirect('/categories');
    }
}
