@extends('layouts.front')

@section('title', 'Write a Review')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if ($verified_purchase->count() > 0)
                            <h5>Đánh giá sản phẩm {{ $product->name }}</h5>
                            <form action="{{ url('/add-review') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <textarea class="form-control" name="user_review" id="" cols="30" rows="5"
                                    placeholder="Write a review"></textarea>
                                <button type="submit" class="btn btn-primary mt-3">Đánh giá</button>
                            </form>
                        @else
                            <div class="alert alert-danger">
                                <h5>Bạn chưa thể đánh giá sản phẩm này</h5>
                                <p>
                                    Bạn phải mua sản phẩm để có thể được đánh giá
                                </p>
                                <a href="{{ url('/') }}" class="btn btn-primary mt-3">Quay lại trang chủ</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
