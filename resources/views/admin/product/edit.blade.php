@extends('layouts.admin')

@section('content')
<div class="container-fluid p-0">
  <div class="card-header">
    <h1 class="h3 mb-3"><strong>Edit/Update Product</strong></h1>
  </div>

  <div class="card-body">
    <form action="/update-product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">       
        <div class="col-md-6 mb-3">
          <label for="">Category_id</label>
          <select class="form-select" name="cate_id" id="">
            <option value="{{ $product->cate_id }}">{{ $product->cate_id }} - {{ $product->category->name }}</option>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name" value="{{ $product->name }}">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Slug</label>
          <input type="text" class="form-control" name="slug" value="{{ $product->name }}">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Excerpt</label>
          <textarea class="form-control" row="3" name="small_description">{{ $product->small_description }}</textarea>
        </div>
        <div class="col-md-12 mb-3">
          <label for="">Description</label>
          <textarea class="form-control" row="3" name="description">{{ $product->description }}</textarea>
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Original Price</label>
          <input type="number" class="form-control" name="original_price" value="{{ $product->original_price }}">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Selling Price</label>
          <input type="number" class="form-control" name="selling_price" value="{{ $product->selling_price }}">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Quantity</label>
          <input type="number" class="form-control" name="qty" value="{{ $product->qty }}">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Tax</label>
          <input type="text" class="form-control" name="tax" value="{{ $product->tax }}">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Status</label>
          <input type="checkbox" name="status" {{ $product->status == '1' ? 'checked' : '' }}>
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Trending</label>
          <input type="checkbox" name="trending" {{ $product->trending == '1' ? 'checked' : '' }} >
        </div>

        <div class="col-md-12 mb-3">
          <label for="">Meta Title</label>
          <textarea class="form-control" row="3" name="meta_title">{{ $product->meta_title }}</textarea>
        </div>
        <div class="col-md-12 mb-3">
          <label for="">Meta Description</label>
          <textarea class="form-control" row="3" name="meta_descrip">{{ $product->meta_descrip }}</textarea>
        </div>
        <div class="col-md-12 mb-3">
          <label for="">Meta Keywords</label>
          <textarea class="form-control" row="3" name="meta_keywords">{{ $product->meta_keywords }}</textarea>
        </div>
        <div class="col-md-6 mb-3">
          <input type="file" class="form-control" name="image">
        </div>
        @if ($product->image)
        <div class="col-md-6 mb-3">
          <img class="cate-image" src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="Product image">
        </div>
        @endif
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Save</button>
          <button class="btn btn-primary" onclick="history.back(-1)">Back</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection