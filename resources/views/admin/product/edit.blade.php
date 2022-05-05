@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-0">
        <div class="card-header">
            <h1 class="h3 mb-3"><strong>Chỉnh Sửa Sản Phẩm</strong></h1>
        </div>

        <div class="card-body">
            <form action="/update-product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Mã thư mục</label>
                        <select class="form-select" name="cate_id" id="">
                            <option value="{{ $product->cate_id }}">{{ $product->cate_id }} -
                                {{ $product->category->name }}</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tên</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{ $product->name }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Đoạn trích</label>
                        <textarea class="form-control" row="3" name="small_description"
                            required>{{ $product->small_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Mô tả</label>
                        <textarea class="form-control" row="3" name="description"
                            required>{{ $product->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Giá gốc</label>
                        <input type="number" class="form-control" name="original_price"
                            value="{{ $product->original_price }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">GIá bán</label>
                        <input type="number" class="form-control" name="selling_price"
                            value="{{ $product->selling_price }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Số lượng</label>
                        <input type="number" class="form-control" name="qty" value="{{ $product->qty }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Thuế</label>
                        <input type="text" class="form-control" name="tax" value="{{ $product->tax }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trạng thái</label>
                        <input type="checkbox" name="status" {{ $product->status == '1' ? 'checked' : '' }}>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Xu hướng</label>
                        <input type="checkbox" name="trending" {{ $product->trending == '1' ? 'checked' : '' }}>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <textarea class="form-control" row="3" name="meta_title">{{ $product->meta_title }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea class="form-control" row="3"
                            name="meta_descrip">{{ $product->meta_descrip }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea class="form-control" row="3"
                            name="meta_keywords">{{ $product->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="file" class="form-control" name="image[]" multiple>
                    </div>
                    @if ($product->image)
                        <div class="col-md-6 mb-3">
                            <img class="cate-image" src="{{ asset('assets/uploads/product/' . $product->image) }}"
                                alt="Product image">
                        </div>
                    @endif
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                        <button class="btn btn-primary" onclick="history.back(-1)">Quay lại</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
