@extends('layouts.admin')

@section('content')
    <div class="container-fluid p-0">
        <div class="card-header">
            <h1 class="h3 mb-3"><strong>Thêm sản phẩm</strong></h1>
        </div>

        <div class="card-body">
            <form action="/insert-product" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Danh mục</label>
                        <select class="form-select" name="cate_id" id="">
                            <option value="">Chọn danh mục</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Tên</label>
                        <input type="text" class="form-control" name="name" placeholder="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" placeholder="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Đoạn trích</label>
                        <textarea class="form-control" row="3" name="small_description" placeholder=""
                            required></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Mô tả</label>
                        <textarea class="form-control" row="3" name="description" placeholder="" required></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Giá gốc</label>
                        <input type="number" class="form-control" name="original_price" placeholder="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Giá bán</label>
                        <input type="number" class="form-control" name="selling_price" placeholder="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Số lượng</label>
                        <input type="number" class="form-control" name="qty" placeholder="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Thuế</label>
                        <input type="text" class="form-control" name="tax" placeholder="" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Trạng thái</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Xu hướng</label>
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
                        <input type="file" class="form-control" name="image[]" multiple>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button class="btn btn-primary" onclick="history.back(-1)">Quay lại</button>
                    </div>
                </div>
            </form>
        </div>




    </div>
@endsection
