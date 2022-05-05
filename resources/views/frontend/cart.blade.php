@extends('layouts.front')

@section('title')
    My Cart
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h5 class="mb-0">
                <a href="{{ url('/') }}">Trang Chủ</a>/
                <a href="{{ url('/cart') }}">Thanh toán</a>
            </h5>
        </div>
    </div>

    <div class="container my-5">
        <div class="card shadow cartitems">
            @if ($cartitems->count() > 0)
                <div class='card-body'>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($cartitems as $item)
                        @php
                            $arrayImage = explode(',', $item->products->image);
                        @endphp
                        <div class="row product_data">
                            <div class="col-md-2 my-auto">
                                <img src="{{ asset('assets/uploads/product/' . $arrayImage[0]) }}"
                                    style="width:70px; height:70px;" alt="image here">
                            </div>
                            <div class="col-md-3 my-auto">
                                <h6>{{ $item->products->name }}</h6>
                            </div>
                            <div class="col-md-2 my-auto">
                                <h6>$ {{ $item->products->selling_price }}</h6>
                            </div>
                            <div class="col-md-3 my-auto">
                                <input type="hidden" class="prod_id" value="{{ $item->product_id }}">
                                @if ($item->products->qty > $item->product_qty)
                                    <label for="Quantity">Số lượng</label>
                                    <div class="input-group text-center mb-3" style="width: 130px;">
                                        <button class="input-group-text changeQuantity decrement-btn">-</button>
                                        <input type="text" name="quantity " class="form-control qty-input text-center"
                                            value="{{ $item->product_qty }}">
                                        <button class="input-group-text  changeQuantity increment-btn">+</button>
                                    </div>
                                    @php
                                        $total += $item->products->selling_price * $item->product_qty;
                                    @endphp
                                @else
                                    <h6 class="outOfStock">Hết hàng</h6>
                                @endif
                            </div>
                            <div class="col-md-2 my-auto">
                                <button class="btn btn-danger delete-cart-item"><i class="fa fa-trash">
                                        Bỏ</i></button>
                            </div>
                        </div>
                        @php
                            $total;
                        @endphp
                    @endforeach
                </div>
                <div class="card-footer">
                    <h6>Tổng cộng: {{ $total }} đ
                        <a href="{{ url('checkout') }}" style="float: right;"
                            class="btn btn-outline-success float-end">Tiến hành thanh toán</a>
                    </h6>
                </div>
            @else
                <div class="card-body text-center">
                    <h2> <i class="fa fa-shopping-cart"></i> Giỏ hàng trống</h2>
                    <a href="{{ url('/') }}" class="btn btn-outline-primary float-end">Tiến hành thanh toán</a>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // $('.payment').click(function(e) {
        //     e.preventDefault();

        //     //var product_id = $(this).closest('.cartitems').find('.outOfStock');

        //     $(this).closest('.cartitems').find('.outOfStock').val(2);
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        // $.ajax({
        //     method: 'POST',
        //     url: "/add-to-cart",
        //     data: {
        //         'product_id': product_id,
        //         'product_qty': product_qty,
        //     },
        //     success: function(response) {
        //         swal(response.status);
        //         loadcart();
        //     }
        // })
        })
    </script>
@endsection
