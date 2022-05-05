@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-3">
        <form action="{{ url('update-profile') }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6>Thông tin cơ bản</h6>
                            <hr>
                            <div class="row check-form">
                                <div class="col-md-6">
                                    <label for="">Họ và Đệm</label>
                                    <input type="text" class="form-control firstname" name="firstname"
                                        value="{{ Auth::user()->name }}" placeholder="Enter First Name">
                                    <span id="firstname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Tên</label>
                                    <input type="text" class="form-control lastname" name="lastname"
                                        value="{{ Auth::user()->lastname }}" placeholder="Enter Last Name">
                                    <span id="lastname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control email" name="email"
                                        value="{{ Auth::user()->email }}" placeholder="Enter Email">
                                    <span id="email_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" class="form-control phone" name="phone"
                                        value="{{ Auth::user()->phone }}" placeholder="Enter Phone Number">
                                    <span id="phone_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Địa chỉ 1</label>
                                    <input type="text" class="form-control address1" name="address1"
                                        value="{{ Auth::user()->address1 }}" placeholder="Enter Address 1">
                                    <span id="address1_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Địa chỉ 2</label>
                                    <input type="text" class="form-control address2" name="address2"
                                        value="{{ Auth::user()->address2 }}" placeholder="Enter Address">
                                    <span id="address2_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Quận</label>
                                    <input type="text" class="form-control city" name="city"
                                        value="{{ Auth::user()->city }}" placeholder="Enter City">
                                    <span id="city_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Thành Phố</label>
                                    <input type="text" class="form-control state" name="state"
                                        value="{{ Auth::user()->state }}" placeholder="Enter State">
                                    <span id="state_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Quốc Gia</label>
                                    <input type="text" class="form-control country" name="country"
                                        value="{{ Auth::user()->country }}" placeholder="Enter Country">
                                    <span id="country_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Mã Pin Code</label>
                                    <input type="text" class="form-control pincode" name="pincode"
                                        value="{{ Auth::user()->pincode }}" placeholder="Enter Pin Code">
                                    <span id="pincode_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <button type="submit" class="btn btn-primary float-end">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            Thông tin thanh toán</div>
                        <hr>
                        @php
                            $total = 0;
                        @endphp
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartitems as $item)
                                    <tr>
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ $item->product_qty }}</td>
                                        <td>{{ $item->products->selling_price }}</td>
                                    </tr>
                                    @php
                                        $total += $item->products->selling_price * $item->product_qty;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>

                        <div class="card-footer">
                            <h6>Tổng cộng: {{ $total }} đ
                            </h6>
                        </div>
                        <hr>
                        <input type="hidden" name="payment_mode" value="COD">
                        <button type="submit" class="btn btn-primary float-end place_btn">Đặt hàng</button>
                        <div class="mt-3 paypal_btn" id="paypal-button"></div>
                    </div>
                </div> --}}
            </div>
        </form>
    </div>
    </div>
@endsection

@section('scripts')
@endsection
