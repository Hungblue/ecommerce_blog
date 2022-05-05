@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Sản Phẩm</strong></h1>

        <a type="button" class="btn btn-success" href="/add-product">Thêm Mới Sản Phẩm</a>

        <div class="card-body text-center" style="padding-left: 0px">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Mã</th>
                        <th>Thư mục</th>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>Giá gốc</th>
                        <th>Giá bán</th>
                        <th>Ảnh</th>
                        <th>Tác vụ</th>
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
                                @php
                                    $arrayImage = explode(',', $product->image);
                                @endphp
                                @foreach ($arrayImage as $image)
                                    <div>
                                        <img class="cate-image" src="{{ asset('assets/uploads/product/' . $image) }}"
                                            alt="Image here">
                                    </div>
                                @endforeach
                            </td>
                            <td>
                                <a href="/edit-product/{{ $product->id }}" class="btn btn-primary">Sửa</a>
                                <a href="/delete/{{ $product->id }}" class="btn btn-primary"
                                    onclick="return confirm('Are you sure you want to delete this category?')">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
@endsection
