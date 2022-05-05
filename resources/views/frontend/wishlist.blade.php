@extends('layouts.front')

@section('title')
    My Wishlist
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h5 class="mb-0">
                <a href="{{ url('/') }}">Home</a>/
                <a href="{{ url('/wishlist') }}">Wishlist</a>
            </h5>
        </div>
    </div>

    <div class="container my-5">
        <div class="card shadow ">
            <div class="card-body">
                @if ($wishlist->count() > 0)
                    @foreach ($wishlist as $item)
                        <div class="row product_data">
                            <div class="col-md-2 my-auto">
                                @php
                                    $arrayImage = explode(',', $item->products->image);
                                @endphp
                                <img src="{{ asset('assets/uploads/product/' . $arrayImage[0]) }}"
                                    style="width:70px; height:70px;" alt="image here">
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6>{{ $item->products->name }}</h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6>$ {{ $item->products->selling_price }}</h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <input type="hidden" class="prod_id" value="{{ $item->product_id }}">
                                @if ($item->products->qty >= $item->product_qty)
                                    <label for="Quantity">Quantity</label>
                                    <div class="input-group text-center mb-3" style="width: 130px;">
                                        <button class="input-group-text decrement-btn">-</button>
                                        <input type="text" name="quantity " class="form-control qty-input text-center"
                                            value="1">
                                        <button class="input-group-text increment-btn">+</button>
                                    </div>
                                @else
                                    <h6>Out of Stock</h6>
                                @endif
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-success addToCartBtn"><i class="fa fa-shopping-cart">
                                        Add to Cart</i></button>
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-danger remove-wishlist-item"><i class="fa fa-trash">
                                        Remove</i></button>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4>There are no products in Your Wishlist</h4>
                @endif
            </div>
        </div>
    </div>

@endsection
