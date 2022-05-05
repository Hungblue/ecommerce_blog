@extends('layouts.admin')

@section('title')
    Orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4>Đơn đặt hàng
                            <a href="{{ url('orders') }}" class="btn btn-success float-end">Quay lại</a>
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
                                <label for="">Địa chỉ giao hàng</label>
                                <div class="border">
                                    {{ $orders->address1 }}, <br>
                                    {{ $orders->address2 }}, <br>
                                    {{ $orders->city }}, <br>
                                    {{ $orders->state }}, <br>
                                    {{ $orders->country }}
                                </div>
                                <label for="">Mã Zip Code</label>
                                <div class="border">{{ $orders->pincode }}</div>
                            </div>
                            <div class="col-md-6">
                                <h4>Thông tin đơn đặt hàng</h4>
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
                                                    <img src="{{ asset('assets/uploads/product/' . $item->products->image) }}"
                                                        width="50px" alt="picture here">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Tổng cộng: <span
                                        style="float: right;">{{ $orders->total_price }}</span></h4>
                                <div class="mt-5 px-2">
                                    <label for="">Trạng thái đơn đặt hàng</label>
                                    <form action="{{ url('update-order/' . $orders->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <select class="form-select" name="order_status" id="">
                                            <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">Đang xử lý
                                            </option>
                                            <option {{ $orders->status == '1' ? 'selected' : '' }} value="1">Đã hoàn thành
                                            </option>
                                        </select>
                                        <button class="btn btn-primary mt-3 float-end" type="submit">Cập nhật</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
