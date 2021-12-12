@extends('layouts.admin')

@section('content')
<div class="container-fluid p-0">

  <h1 class="h3 mb-3"><strong>Products</strong></h1>

  <a type="button" class="btn btn-success"href="/add-product">Add New Product</a>

  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Category</th>
          <th>Name</th>
          <th>Description</th>
          <th>Original Price</th>
          <th>Selling Price</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->original_price }}</td>
            <td>{{ $product->selling_price }}</td>
            <td>
              <img class="cate-image" src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="Image here">
            </td>
            <td>
              <a href="/edit-product/{{ $product->id }}" class="btn btn-primary">Edit</a>
              <a href="/delete/{{ $product->id }}" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>


</div>
@endsection