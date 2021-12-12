@extends('layouts.admin')

@section('content')
<div class="container-fluid p-0">
  <div class="card-header">
    <h1 class="h3 mb-3"><strong>Add Product</strong></h1>
  </div>

  <div class="card-body">
    <form action="/insert-product" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="">Category_id</label>
          <select class="form-select" name="cate_id" id="">
            <option value="">select a Category</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name" placeholder="">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Slug</label>
          <input type="text" class="form-control" name="slug" placeholder="">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Excerpt</label>
          <textarea class="form-control" row="3" name="small_description" placeholder=""></textarea>
        </div>
        <div class="col-md-12 mb-3">
          <label for="">Description</label>
          <textarea class="form-control" row="3" name="description" placeholder=""></textarea>
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Original Price</label>
          <input type="number" class="form-control" name="original_price" placeholder="">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Selling Price</label>
          <input type="number" class="form-control" name="selling_price" placeholder="">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Quantity</label>
          <input type="number" class="form-control" name="qty" placeholder="">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Tax</label>
          <input type="text" class="form-control" name="tax" placeholder="">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Status</label>
          <input type="checkbox" name="status">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Trending</label>
          <input type="checkbox" name="trending">
        </div>

        <div class="col-md-12 mb-3">
          <label for="">Meta Title</label>
          <textarea class="form-control" row="3" name="meta_title"></textarea>
        </div>
        <div class="col-md-12 mb-3">
          <label for="">Meta Description</label>
          <textarea class="form-control" row="3" name="meta_descrip"></textarea>
        </div>
        <div class="col-md-12 mb-3">
          <label for="">Meta Keywords</label>
          <textarea class="form-control" row="3" name="meta_keywords"></textarea>
        </div>
        <div class="col-md-12">
          <input type="file" class="form-control" name="image">
        </div>

        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button class="btn btn-primary" onclick="history.back(-1)">Back</button>
        </div>
      </div>
    </form>
  </div>
  



</div>
@endsection