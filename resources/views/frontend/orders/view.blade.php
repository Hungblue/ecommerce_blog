@extends('layouts.front')

@section('title')
    My orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Đơn đặt hàng
                            <a href="{{ url('my-orders') }}" class="btn btn-success float-right">Quay lại</a>
                        </h4>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Chi tiết đơn đặt hàng</h4>
                                <hr>
                                <label for="">Họ & Đệm</label>
                                <div class="border">{{ $orders->firstname }}</div>
                                <label for="">Tên</label>
                                <div class="border">{{ $orders->lastname }}</div>
                                <label for="">Email</label>
                                <div class="border">{{ $orders->email }}</div>
                                <label for="">Số điện thoại</label>
                                <div class="border">{{ $orders->phone }}</div>
                                <label for="">Địa chỉ</label>
                                <div class="border">
                                    {{ $orders->address1 }},
                                    {{ $orders->address2 }},
                                    {{ $orders->city }},
                                    {{ $orders->state }},
                                    {{ $orders->country }}
                                </div>
                                <label for="">Mã Zip Code</label>
                                <div class="border">{{ $orders->pincode }}</div>
                            </div>
                            <div class="col-md-6">
                                <h4>Chi tiết đơn đặt hàng</h4>
                                <hr>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>22
                                            <th>Ảnh</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>
                                                    @php
                                                        $arrayImage = explode(',', $item->products->image);
                                                    @endphp
                                                    <img src="{{ asset('assets/uploads/product/' . $arrayImage[0]) }}"
                                                        width="50px" alt="picture here">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Tổng cộng: <span
                                        style="float: right;">{{ $orders->total_price }}</span></h4>
                                <h6 class="px-2">Hình thức trả: {{ $orders->payment_mode }}</h6>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
