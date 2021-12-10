@extends('layouts.admin')

@section('content')
<div class="container-fluid p-0">
  <div class="card-header">
    <h1 class="h3 mb-3"><strong>Edit/Update Category</strong></h1>
  </div>

  <div class="card-body">
    <form action="/update-category/{{ $category->id }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="">Name</label>
          <input type="text" class="form-control" name="name" placeholder="" value="{{ $category->name }}">
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Slug</label>
          <input type="text" class="form-control" name="slug" placeholder="" value="{{ $category->slug }}">
        </div>
        <div class="col-md-12 mb-3">
          <label for="">Description</label>
          <textarea class="form-control" row="3" name="description" placeholder="">{{ $category->description }}</textarea>
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Status</label>
          <input type="checkbox" name="status" {{ ($category->status == '1') ? 'checked' : '' }}>
        </div>
        <div class="col-md-6 mb-3">
          <label for="">Popular</label>
          <input type="checkbox" name="popular" {{ ($category->popular == '1') ? 'checked' : '' }}>
        </div>

        <div class="col-md-12 mb-3">
          <label for="">Meta Title</label>
          <textarea class="form-control" row="3" name="meta_title">{{ $category->meta_title }}</textarea>
        </div>
        <div class="col-md-12 mb-3">
          <label for="">Meta Description</label>
          <textarea class="form-control" row="3" name="meta_descrip">{{ $category->meta_descrip }}</textarea>
        </div>
        <div class="col-md-12 mb-3">
          <label for="">Meta Keywords</label>
          <textarea class="form-control" row="3" name="meta_keywords">{{ $category->meta_keywords }}</textarea>
        </div>
        <div class="col-md-6 mb-3">
          <input type="file" class="form-control" name="image">
        </div>
        @if ($category->image)
        <div class="col-md-6 mb-3">
          <img class="cate-image" src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="Category image">
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