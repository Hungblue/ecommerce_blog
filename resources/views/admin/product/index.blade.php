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
          <th>Name</th>
          <th>Excerpt</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->small_description }}</td>
            <td>
              <img class="cate-image" src="{{ asset('assets/uploads/product/'.$product->image) }}" alt="Image here">
            </td>
            <td>
              <a href="/edit-product/{{ $product->id }}" class="btn btn-primary">Edit</a>
              <a href="/delete/{{ $product->id }}" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
              <a href="/" class="btn btn-primary">Products</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>


</div>
@endsection