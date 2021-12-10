@extends('layouts.admin')

@section('content')
<div class="container-fluid p-0">

  <h1 class="h3 mb-3"><strong>Category</strong> Dashboard</h1>

  <a type="button" class="btn btn-success"href="/add-category">Add New Category</a>

  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td>
              <img class="cate-image" src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="Image here">
            </td>
            <td>
              <a href="/edit-category/{{ $category->id }}" class="btn btn-primary">Edit</a>
              <a href="/delete/{{ $category->id }}" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this category?')">Delete</a>
              <a href="/" class="btn btn-primary">Products</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>


</div>
@endsection